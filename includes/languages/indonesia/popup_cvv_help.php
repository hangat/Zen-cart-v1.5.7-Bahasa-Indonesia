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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', 'Apakah CVV Itu?');
define('TEXT_CVV_HELP1', '3 Angka Nomor Verifikasi Kartu Visa, Mastercard, Discover<br /><br />
                    Untuk keamanan Anda, kami mengharuskan Anda untuk memberikan nomor verifikasi kartu Anda.<br /><br />
                    Nomor verifikasi adalah 3 buah angka yang tercetak pada bagian belakang kartu Anda.
                    Nomor ini berada setelah dan di sebelah kanan nomor kartu Anda.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', '4 Angka Nomor Verifikasi Kartu American Express<br /><br />
                    Untuk keamanan Anda, kami mengharuskan ANda untuk memberikan nomor verifikasi kartu Anda.<br /><br />
                    Nomor verifikasi American Express adalah 4 buah angka yang tercetak pada bagian depan kartu Anda.
                    Nomor ini berada setelah dan di sebelah kanan nomor kartu Anda.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Tutup Jendela [x]');
?>