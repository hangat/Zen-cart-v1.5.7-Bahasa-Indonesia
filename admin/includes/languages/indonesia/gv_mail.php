<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 May 12 Modified in v1.5.7 $
 */


require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', 'Kirim ' . TEXT_GV_NAME . ' ke Pelanggan');

define('TEXT_FROM', 'Dari:');
define('TEXT_TO', 'Email Ke:');
define('TEXT_TO_CUSTOMERS', 'Ke Daftar Pelanggan:');
define('TEXT_TO_EMAIL', 'atau ke Alamat Email:');
define('TEXT_TO_EMAIL_NAME', 'Nama (opsional):');
define('TEXT_TO_EMAIL_INFO', '<span class="smallText">Pilih Daftar dari drop-down diatas atau gunakan field dibawah ini untuk mengirim sebuah email.</span>');
define('TEXT_SUBJECT', 'Judul:');
define('TEXT_AMOUNT', TEXT_GV_NAME . ' Nilai:');
define('ERROR_GV_AMOUNT', '<span class="smallText">Isi jumlah menggunakan angka desimal untuk pecahan misal.: 25.00.</span>');
define('TEXT_AMOUNT_INFO', '<span class="smallText">' . ERROR_GV_AMOUNT . '</span>');
define('TEXT_HTML_MESSAGE', 'Pesan<br>HTML:');
define('TEXT_MESSAGE', 'HTML<br>Text-Saja:');
define('TEXT_MESSAGE_INFO', '<p>Opsional menyertakan pesan tertentu, dimasukkan sebelum standar ' . TEXT_GV_NAME . ' text email.</p>');

define('NOTICE_EMAIL_SENT_TO', 'Perhatikan: %1s email dikirim ke %2s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Kesalahan: Tidak Ada Pelanggan yang dipilih.');
define('ERROR_NO_AMOUNT_ENTERED', 'Kesalahan: Nilai Sertifikat tidak valid.');
define('ERROR_NO_SUBJECT', 'Kesalahan: tidak ada Judul Email yang dimasukkan.');

define('TEXT_GV_ANNOUNCE', 'Kami senang menawarkan Anda' . TEXT_GV_NAME . ' untuk %s.');
define('TEXT_GV_TO_REDEEM_TEXT', 'Gunakan tautan berikut untuk menebus ' . TEXT_GV_NAME . "\n\n ". '%1$s%2$s' . "\n\n" . 'atau kunjungi ' . STORE_NAME . " at " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'dan isikan kode %2$s pada halaman Pembayaran-Checkout.');
define('TEXT_GV_TO_REDEEM_HTML', '<a href="%1$s%2$s">Klik disini unruk menebus ' . TEXT_GV_NAME . '</a> atau kunjungi <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> dan isikan kode <strong>%2$s</strong> pada halaman Pembayaran-Checkout.');

