<?php

// Heading
$_['heading_title']                       = 'RozetkaPay Express Checkout';

// Text
$_['text_payment']                        = 'Payment';
$_['text_success']                        = 'Settings changed';
$_['text_extension']                      = 'Extensions';
$_['text_edit']                           = 'Edit';
$_['text_success_log']                    = 'Log successfully cleared!';
$_['text_white']                          = 'White';
$_['text_black']                          = 'Black';
$_['text_mode_pay']                       = 'Live mode';
$_['text_mode_test']                      = 'Test mode';
$_['text_buy_rpay']                       = 'Buy with';
$_['text_preview']                        = 'Button preview';
$_['text_before']                         = 'Before element';
$_['text_append']                         = 'Inside element';
$_['text_after']                          = 'After element';
$_['text_selector_default']               = 'Reset to default';
$_['text_callback_error']                 = 'Callback sending error. Code: %s. Message: %s.';
$_['text_callback_success']               = 'Retry callback request successfully sent!';
$_['text_test_info']                      = 'You can find test card details for payment testing in the <a href="https://cdn.rozetkapay.com/public-docs/index.html#section/Testing-your-integrations/Test-cards-for-Aquiring-flow" target="_blank">documentation</a>';
$_['text_variant_1']                      = 'Variant 1';
$_['text_variant_2']                      = 'Variant 2';
$_['text_variant_3']                      = 'Variant 3';
$_['text_empty']                          = 'No payment data available.';
$_['text_info_payment_id']                = 'Payment ID';
$_['text_info_status']                    = 'Payment status';
$_['text_info_amount']                    = 'Payment amount';
$_['text_info_currency']                  = 'Currency';
$_['text_info_create_date']               = 'Creation date';
$_['text_info_end_date']                  = 'Last update date';
$_['text_info_customer']                  = 'Customer details';
$_['text_list_status_success']            = '<span style="color:green;">Successful payment</span>';
$_['text_list_status_processing']         = '<span style="color:green;">Processing</span>';
$_['text_list_status_hold']               = '<span style="color:green;">Funds on hold</span>';
$_['text_list_status_refunded']           = '<span style="color:red;">Fully refunded</span>';
$_['text_list_status_refunded_part']      = '<span style="color:red;">Partially refunded</span>';
$_['text_list_status_failure']            = '<span style="color:red;">Failed payment</span>';
$_['text_list_status_created']            = '<span style="color:orange;">Invoice created</span>';
$_['text_list_status_expired']            = '<span style="color:red;">Expired</span>';
$_['text_list_status_full_refund']        = '<span style="color:red;">Fully refunded to customer</span>';
$_['text_list_status_part_refund']        = '<span style="color:orange;">Partially refunded to customer</span>';
$_['text_write_off']                      = 'Refund amount';
$_['text_info_amount_final']              = 'Final write-off amount';
$_['text_info_amount_refunded']           = 'Refund amount';
$_['text_cancel_pay']                     = 'Refund money';
$_['text_success_refund']                 = 'Funds successfully refunded to the customer!';
$_['text_error_refund_detail']            = 'Refund error. Details: %s';

// Entry

$_['entry_login']                         = 'Login';
$_['entry_password']                      = 'Password';
$_['entry_total']                         = 'Lower limit';
$_['entry_order_status']                  = 'Status after successful payment';
$_['entry_order_fail']                    = 'Status after failed payment';
$_['entry_order_success_hold']            = 'Status after accepting HOLD';
$_['entry_order_refund']                  = 'Status after refund';
$_['entry_status']                        = 'Status';
$_['entry_sort_order']                    = 'Sort order';
$_['entry_status_log']                    = 'Request logging';
$_['entry_color_button']                  = 'Button color';
$_['entry_button_css']                    = 'Custom CSS styles';
$_['entry_text_button']                    = 'Change button text';
$_['entry_mode']                          = 'Operation mode';
$_['entry_button_cart']                   = 'Show button in cart';
$_['entry_button_cart_js']                = 'JS selector for custom button display';
$_['entry_position_button_cart_js']       = 'Position for custom button display';
$_['entry_button_product']                = 'Show button on product page';
$_['entry_button_checkout']               = 'Show button at checkout';
$_['entry_button_variant']                = 'Button variant';

// Tab
$_['tab_general']                         = 'General';
$_['tab_status']                          = 'Statuses';
$_['tab_design']                          = 'Design';
$_['tab_log']                             = 'Log';
$_['tab_added']                           = 'Additional';

// Help
$_['help_total']                          = 'Minimum order amount. Below this amount, the method will be unavailable.';
$_['help_login']                          = 'You can get the login from your payment system account.';
$_['help_password']                       = 'You can get the password from your payment system account.';
$_['help_button_css']                     = 'Here you can specify your CSS styles to customize the button appearance.';
$_['help_mode']                           = 'Test mode allows testing payments without actual charges. Live mode enables full payment processing.';
$_['help_button_cart_js']                 = 'To bind the button to your template at a convenient location, you can use a JS (jQuery) selector, e.g., \'#cart_button\', \'.cart_button\', etc.';

// Error
$_['error_permission']                    = 'You do not have sufficient permissions to make changes';
$_['error_login']                         = 'Enter login!';
$_['error_password']                      = 'Enter password!';
$_['error_warning']                       = 'Warning: Your log file %s is %s in size! Display is disabled, but the log can be downloaded below.';
$_['error_currency_uah']                  = 'UAH currency not found in your store! To use this module, UAH must be present and have the ISO 4217 code UAH!';
