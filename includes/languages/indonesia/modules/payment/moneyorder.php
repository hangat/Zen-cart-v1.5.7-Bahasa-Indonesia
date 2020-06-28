<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: moneyorder.php 1969 2005-09-13 06:57:21Z drbyte Modified in v1.5.6 $
//

define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Pesanan Cek/Uang');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Pelanggan dapat mengirimkan pembayaran mereka. Email konfirmasi pesanan mereka akan meminta mereka untuk:<br><br>Harap buat cek atau wesel Anda dibayarkan ke:<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(nama toko anda)') . '<br /><br />Kirim pembayaran anda ke:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Pesanan Anda tidak akan dikirimkan sebelum kami menerima pembayaran.');
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Harap buat cek atau wesel Anda dibayarkan ke:" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nKirim Pembayaran anda ke:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Pesanan Anda tidak akan dikirimkan sebelum kami menerima pembayaran.');
}
