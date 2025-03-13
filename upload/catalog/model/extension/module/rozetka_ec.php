<?php
class ModelExtensionModuleRozetkaEc extends Model {
	
	/**
     * Оновлює дані замовлення за переданими даними.
     *
     * @param array $data Дані замовлення від Rozetka.
     * 
     * @return int|false ID замовлення, якщо оновлення успішне, або false у разі помилки.
     */
	public function setOrderData($data) {
		$order_id = $this->getOrderIdByUuid($data['external_id']);
		
		$query_order_data = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order` WHERE `order_id` = '" . (int)$order_id . "' AND `order_status_id` = 0");
		
		if($query_order_data->num_rows) {
			
			$order_data = $this->getCleanOrder($order_id);
			
			if($order_data) {
				$email = '';
		
				if(!empty($data['customer']['email'])) {
					$email = $data['customer']['email'];
				}
				
				if(!$email) {					
					$email = time() . '@' . $this->request->server['HTTP_HOST'];
				}
				
				$address = $this->getAddress($data['delivery_details']);
				$shipping = $this->getShippingMethod($data['delivery_details']);
				
				$order_data['email'] = $email;
				$order_data['firstname'] = $data['customer']['first_name'];
				$order_data['lastname'] = $data['customer']['last_name'];
				$order_data['telephone'] = $data['customer']['phone'];
				$order_data['comment'] = !empty($data['comment']) ? $data['comment'] : $order_data['comment'];
				
				$order_data['payment_firstname'] = $data['customer']['first_name'];
				$order_data['payment_lastname'] = $data['customer']['last_name'];
				$order_data['payment_address_1'] = $address['address_1'];
				$order_data['payment_city'] = $address['city'];
				$order_data['payment_method'] = 'Rozetka Checkout';
				$order_data['payment_code'] = 'rozetka_checkout';
				
				$order_data['shipping_firstname'] = $data['customer']['first_name'];
				$order_data['shipping_lastname'] = $data['customer']['last_name'];
				$order_data['shipping_address_1'] = $address['address_1'];
				$order_data['shipping_city'] = $address['city'];
				$order_data['shipping_method'] = $shipping['name'];
				$order_data['shipping_code'] = $shipping['code'];
				
				$order_data['products'] = $this->getOrderproducts($order_id);
				$order_data['totals'] = $this->model_checkout_order->getOrderTotals($order_id);
				
				$this->model_checkout_order->editOrder($order_id, $order_data);	
				
				return $order_id;
			}
			
			return false;
		}
		
		return false;
	}
	
	/**
     * Отримує ID замовлення за його UUID.
     *
     * @param string $uuid Унікальний ідентифікатор Rozetka.
     * 
     * @return int|false ID замовлення або false, якщо запис не знайдено.
     */
	public function getOrderIdByUuid($uuid) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "rozetka_ec_uuid` WHERE `uuid` = '" . $this->db->escape($uuid) . "'");
		
		if($query->num_rows) {
			return $query->row['order_id'];
		} else {
			return false;
		}
	}
	
	/**
     * Отримує "чисті" (оригінальні) дані замовлення.
     *
     * @param int $order_id ID замовлення.
     * 
     * @return array Дані замовлення.
     */
	public function getCleanOrder($order_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order` WHERE `order_id` = '" . (int)$order_id . "'");
	
		return $query->row;
	}
	
	/**
     * Отримує список товарів у замовленні.
     *
     * @param int $order_id ID замовлення.
     * 
     * @return array Масив товарів із їхніми опціями.
     */
	private function getOrderproducts($order_id) {
		$product_data = array();
		
		$products = $this->model_checkout_order->getOrderProducts($order_id);
		
		foreach($products as $product) {
			foreach($product as $key => $value) {
				$p_data[$key] = $value;
			}
			
			$p_data['option'] = $this->model_checkout_order->getOrderOptions($order_id, $product['order_product_id']);
			
			$product_data[] = $p_data;
		}
		
		return $product_data;
	}
	
	/**
     * Формує адресу доставки.
     *
     * @param array $data Дані про доставку.
     * 
     * @return array Адреса у форматі ['address_1' => ..., 'city' => ...].
     */
	private function getAddress($data) {
		$address_1 = '';
		
		if($data['provider'] == 'nova_poshta') {
			if($data['delivery_type'] == 'D') {
				$address_1 = $data['street'] . ', ' . $data['house'];
				
				if(!empty($data['apartment'])) {
					$address_1 .= ', ' . $data['apartment'];
				}
			} elseif($data['delivery_type'] == 'W') {
				$address_1 = $data['warehouse_number'];
			} elseif($data['delivery_type'] == 'P') {
				$address_1 = $data['warehouse_number'];
			}
		}
		
		return array(
			'address_1'	=> $address_1,
			'city'		=> $data['city'],
		);
	}
	
	/**
     * Визначає метод доставки.
     *
     * @param array $data Дані про доставку.
     * 
     * @return array Метод доставки у форматі ['code' => ..., 'name' => ...].
     */
	private function getShippingMethod($data) {
		$code = '';
		$name = '';
		
		if($data['provider'] == 'nova_poshta') {
			if($data['delivery_type'] == 'D') {
				$code = 'novaposhta.doors';
				$name = $this->language->get('text_nova_poshta_d');
			} elseif($data['delivery_type'] == 'W') {
				$code = 'novaposhta.department';
				$name = $this->language->get('text_nova_poshta_w');
			} elseif($data['delivery_type'] == 'P') {
				$code = 'novaposhta.poshtomat';
				$name = $this->language->get('text_nova_poshta_p');
			}
		}
		
		return array(
			'code'		=> $code,
			'name'		=> $name,
		);
	}
	
	/**
     * Прив'язує UUID до замовлення.
     *
     * @param int $order_id ID замовлення.
     * @param string $uuid Унікальний ідентифікатор Rozetka.
     */
	public function setUuidOrder($order_id, $uuid) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "rozetka_ec_uuid` WHERE `order_id` = '" . (int)$order_id . "'");
		$this->db->query("INSERT INTO `" . DB_PREFIX . "rozetka_ec_uuid` (`order_id`, `uuid`) VALUES ('" . (int)$order_id . "', '" . $this->db->escape($uuid) . "')");
	}
}