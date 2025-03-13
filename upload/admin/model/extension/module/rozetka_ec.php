<?php
class ModelExtensionModuleRozetkaEc extends Model {	

    /**
     * Встановлення модуля: створює таблицю `oc_rozetka_ec_uuid` у базі даних.
     *
     * @return void
     */
    public function install() {
        $this->db->query("CREATE TABLE `" . DB_PREFIX . "rozetka_ec_uuid` (`order_id` int(11) NOT NULL, `uuid` varchar(55) NOT NULL, PRIMARY KEY (`order_id`, `uuid`)) ENGINE=InnoDB DEFAULT CHARSET=utf8");
    }

    /**
     * Видалення модуля: видаляє таблицю `oc_rozetka_ec_uuid` з бази даних.
     *
     * @return void
     */
    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "rozetka_ec_uuid`");
    }

    /**
     * Отримує UUID для конкретного замовлення.
     *
     * @param int $order_id ID замовлення.
     * 
     * @return string|false UUID, якщо знайдено, або `false`, якщо немає відповідного запису.
     */
    public function getUuid($order_id) {		
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "rozetka_ec_uuid` WHERE `order_id` = '" . (int)$order_id . "'");

        return ($query->num_rows) ? $query->row['uuid'] : false;
    }

    /**
     * Отримує ID замовлення за його UUID.
     *
     * @param string $uuid Унікальний ідентифікатор Rozetka.
     * 
     * @return int|false ID замовлення, якщо знайдено, або `false`, якщо немає відповідного запису.
     */
    public function getOrderId($uuid) {		
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "rozetka_ec_uuid` WHERE `uuid` = '" . $this->db->escape($uuid) . "'");

        return ($query->num_rows) ? (int)$query->row['order_id'] : false;
    }
}
