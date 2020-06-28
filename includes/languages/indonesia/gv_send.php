<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 10 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Kirim ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Konfirmasi Pengiriman ' . TEXT_GV_NAME);
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Terkirim');
define('NAVBAR_TITLE', 'Kirim ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Pesan dari ' . STORE_NAME);
define('HEADING_TEXT','Silakan ketikkan nama, alamat email dan jumlah ' . TEXT_GV_NAME . ' yang ingin Anda kirimkan. Untuk informasi lebih lanjut, silakan lihat <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . ' kami.</a>');
define('ENTRY_NAME', 'Nama Penerima:');
define('ENTRY_EMAIL', 'Alamat Email Penerima:');
define('ENTRY_MESSAGE', 'Pesan Anda:');
define('ENTRY_AMOUNT', 'Jumlah untuk dikirim:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Anda tidak memberikan Nama Penerima. Silakan ketikkan Nama Penerima tersebut dibawah. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Jumlah ' . TEXT_GV_NAME . ' tidak benar. Silakan coba sekali lagi.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Apakan alamat email sudah benar? Silakan coba sekali lagi.');
define('MAIN_MESSAGE', 'Anda mengirim sebuah ' . TEXT_GV_NAME . ' senilai %s sampai %s,  ke alamat email %s. Jika detail ini tidak benar, Anda dapat mengedit pesan Anda dengan mengklik tombol <strong>edit</strong>.<br /><br />Pesan yang ANda kirimkan adalah:<br /><br />');
define('SECONDARY_MESSAGE', 'Hallo %s,<br /><br />' . 'Anda telah dikirimkan sebuah ' . TEXT_GV_NAME . ' senilai %s oleh %s');
define('PERSONAL_MESSAGE', '%s berkata:');
define('TEXT_SUCCESS', 'Selamat, ' . TEXT_GV_NAME . ' Anda telah dikirim.');
define('TEXT_SEND_ANOTHER', 'Apakah Anda ingin mengirimkan ' . TEXT_GV_NAME . ' lainnya?');
define('TEXT_AVAILABLE_BALANCE',  'Akun Kupon Hadiah');

define('EMAIL_GV_TEXT_SUBJECT', 'Sebuah hadiah dari %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Selamat, Anda telah menerima sebuah ' . TEXT_GV_NAME . ' senilai %s');
define('EMAIL_GV_FROM', TEXT_GV_NAME . ' ini telah dikirimkan kepada Anda oleh %s');
define('EMAIL_GV_MESSAGE', 'dengan sebuah pesan seperti berikut ini: ');
define('EMAIL_GV_SEND_TO', 'Hallo, %s');
define('EMAIL_GV_REDEEM', 'Untuk menebus ini ' . TEXT_GV_NAME . ', silakan klik pada tautan dibawah. Mohon tuliskan ' . TEXT_GV_REDEEM . ': %s ini pada sebuah kertas untuk jaga-jaga kalau-kalau ada masalah.');
define('EMAIL_GV_LINK', 'Untuk menebus klik disini');
define('EMAIL_GV_FIXED_FOOTER', 'Jika Anda menemukan masalah disaat menebus ' . TEXT_GV_NAME . ' menggunakan tautan otomatis di atas, ' . "\n" .
                                'Anda juga dapat mengetikkan ' . TEXT_GV_REDEEM . ' ' . TEXT_GV_NAME .   ' selama proses selesai berbelanja pada toko kami.');
define('EMAIL_GV_SHOP_FOOTER', '');
