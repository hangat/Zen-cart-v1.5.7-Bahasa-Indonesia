<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'Waktu Login Habis');
define('HEADING_TITLE', 'Maaf! Sesi Anda telah kadaluarsa.');
define('HEADING_TITLE_LOGGED_IN', 'Maaf! Akan tetapi Anda tidak diizinkan untuk melakukan tindakan yang diminta. ');
define('TEXT_INFORMATION', '<p>Jika Anda sedng melakukan pemesanan, silakan login dan Troli Anda akan dipulihkan. Anda kemudian dapat kembali ke Selesai Berbelanja dan menyelesaikan pembelian Anda.</p><p>Jika Anda telah menyelesaikan sebuah pesanan dan ingin memeriksanya' . (DOWNLOAD_ENABLED == 'true' ? ', atau sedang mengunduh dan ingin mendapatkannya' : '') . ', silakan pergi ke halaman <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Akun Saya</a> untuk melihat pesanan Anda.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Anda tetap login ke akun Anda dan dapat melanjutkan berbelanja. Silakan pilih sebuah tempat yang ingin dituju dari menu.');

define('HEADING_RETURNING_CUSTOMER', 'Login');
define('TEXT_PASSWORD_FORGOTTEN', 'Lupa Kata Sandi Anda?')
?>