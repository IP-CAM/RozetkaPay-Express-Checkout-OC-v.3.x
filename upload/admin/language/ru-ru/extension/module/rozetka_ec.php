<?php

// Heading
$_['heading_title'] = 'RozetkaPay Express Checkout';

// Text
$_['text_payment'] 						= 'Оплата';
$_['text_success'] 						= 'Настройки изменены';
$_['text_extension'] 					= 'Дополнения';
$_['text_edit'] 						= 'Редактирование';
$_['text_success_log'] 					= 'Лог успешно очищен!';
$_['text_white'] 						= 'Белый';
$_['text_black'] 						= 'Черный';
$_['text_mode_pay'] 					= 'Рабочий режим';
$_['text_mode_test'] 					= 'Тестовый режим';
$_['text_buy_rpay'] 					= 'Купить с';
$_['text_preview'] 						= 'Предварительный вид кнопки';
$_['text_before'] 						= 'До элемента';
$_['text_append'] 						= 'Внутри элемента';
$_['text_after'] 						= 'После элемента';
$_['text_selector_default'] 			= 'Сбросить по умолчанию';
$_['text_callback_error'] 				= 'Ошибка отправки Callback. Код: %s. Сообщение: %s.';
$_['text_callback_success'] 			= 'Запрос на повторный callback успешно отправлен!';
$_['text_test_info'] 					= 'Реквизиты карт для тестирования оплаты вы можете найти в <a href="https://cdn.rozetkapay.com/public-docs/index.html#section/Testing-your-integrations/Test-cards-for-Aquiring-flow" target="_blank">документации</a>';
$_['text_variant_1'] 					= 'Вариант 1';
$_['text_variant_2'] 					= 'Вариант 2';
$_['text_variant_3'] 					= 'Вариант 3';
$_['text_empty'] 						= 'Данные по платежу отсутствуют.';
$_['text_info_payment_id'] 				= 'ID платежа';
$_['text_info_status'] 					= 'Статус платежа';
$_['text_info_amount'] 					= 'Сумма оплаты';
$_['text_info_currency'] 				= 'Валюта';
$_['text_info_create_date'] 			= 'Дата создания';
$_['text_info_end_date'] 				= 'Дата последнего изменения';
$_['text_info_customer'] 				= 'Данные покупателя';
$_['text_list_status_success'] 			= '<span style="color:green;">Успешная оплата</span>';
$_['text_list_status_processing'] 		= '<span style="color:green;">В процессе</span>';
$_['text_list_status_hold'] 			= '<span style="color:green;">Деньги заморожены (Hold)</span>';
$_['text_list_status_refunded'] 		= '<span style="color:red;">Деньги полностью возвращены</span>';
$_['text_list_status_refunded_part'] 	= '<span style="color:red;">Деньги частично возвращены</span>';
$_['text_list_status_failure'] 			= '<span style="color:red;">Неудачная оплата</span>';
$_['text_list_status_created'] 			= '<span style="color:orange;">Создан счет</span>';
$_['text_list_status_expired'] 			= '<span style="color:red;">Время истекло</span>';
$_['text_list_status_full_refund'] 		= '<span style="color:red;">Деньги в полной сумме возвращены клиенту</span>';
$_['text_list_status_part_refund'] 		= '<span style="color:orange;">Деньги частично возвращены клиенту</span>';
$_['text_write_off'] 					= 'Сумма возврата';
$_['text_info_amount_final'] 			= 'Сумма окончательного списания';
$_['text_info_amount_refunded'] 		= 'Сумма возврата';
$_['text_cancel_pay'] 					= 'Вернуть деньги';
$_['text_success_refund'] 				= 'Деньги успешно возвращены клиенту!';
$_['text_error_refund_detail'] 			= 'Ошибка возврата денег. Детали: %s';

// Entry

$_['entry_login'] 						= 'Логин';
$_['entry_password'] 					= 'Пароль';
$_['entry_total'] 						= 'Нижний порог';
$_['entry_order_status'] 				= 'Статус после успешной оплаты';
$_['entry_order_fail'] 					= 'Статус после неудачной оплаты';
$_['entry_order_success_hold'] 			= 'Статус после принятия с HOLD';
$_['entry_order_refund'] 				= 'Статус после возврата денег';
$_['entry_post_pay'] 					= 'Статус, если оплата при получении';
$_['entry_status'] 						= 'Статус';
$_['entry_sort_order'] 					= 'Порядок сортировки';
$_['entry_status_log'] 					= 'Логирование запросов';
$_['entry_color_button'] 				= 'Цвет кнопки';
$_['entry_button_css'] 					= 'Кастомные стили CSS';
$_['entry_text_button'] 				= 'Изменить текст на кнопке';
$_['entry_mode'] 						= 'Режим работы';
$_['entry_button_cart'] 				= 'Показывать кнопку в корзине';
$_['entry_button_cart_js'] 				= 'Селектор js для кастомного показа кнопки';
$_['entry_position_button_cart_js'] 	= 'Позиция для кастомного показа кнопки';
$_['entry_button_product'] 				= 'Показывать кнопку на странице товара';
$_['entry_button_checkout']				= 'Показывать кнопку при оформлении заказа';
$_['entry_button_variant'] 				= 'Вариант кнопки';

// Tab
$_['tab_general'] 						= 'Основное';
$_['tab_status'] 						= 'Статусы';
$_['tab_design'] 						= 'Дизайн';
$_['tab_log'] 							= 'Лог';
$_['tab_added'] 						= 'Дополнительно';

// Help
$_['help_total'] 						= 'Минимальная сумма заказа. Ниже этой суммы метод будет недоступен.';
$_['help_login'] 						= 'Логин можно получить в кабинете платежной системы.';
$_['help_password'] 					= 'Пароль можно получить в кабинете платежной системы.';
$_['help_button_css'] 					= 'Здесь вы можете указать свои стили CSS для адаптации внешнего вида кнопок.';
$_['help_mode'] 						= 'Тестовый режим позволяет протестировать работу платежей без списания реальных денег. Рабочий режим - полноценная работа оплаты заказа.';
$_['help_button_cart_js'] 				= 'Для привязки кнопки к вашему шаблону в удобном для вас месте, вы можете использовать селектор js (jquery), например "#cart_button", ".cart_button" и т.д.';

// Error
$_['error_permission'] 					= 'У вас недостаточно прав для внесения изменений';
$_['error_login'] 						= 'Укажите логин!';
$_['error_password'] 					= 'Укажите пароль!';
$_['error_warning'] 					= 'Внимание: Ваш лог-файл %s имеет размер %s! Отображение отключено, лог можно скачать ниже.';
$_['error_currency_uah'] 				= 'Не найден гривна (UAH) в ваших валютах! Для работы модуля гривна обязательно должна быть в магазине и иметь код UAH согласно ISO 4217!';
