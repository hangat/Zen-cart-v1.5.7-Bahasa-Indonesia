<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Jun 19 Modified in v1.5.7 $
 */

define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
define ('EMAIL_LOGO_WIDTH', '550');
define ('EMAIL_LOGO_HEIGHT', '110');
define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! The Art of E-commerce');

// -----
// If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
// set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
//
define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
define('OFFICE_FROM','<strong>Dari:</strong>');
define('OFFICE_EMAIL','<strong>Email:</strong>');

define('OFFICE_USE','<strong>Hanya Pengguna Kantor:</strong>');
define('OFFICE_LOGIN_NAME','<strong>Nama Login:</strong>');
define('OFFICE_LOGIN_EMAIL','<strong>Email Login:</strong>');
define('OFFICE_LOGIN_PHONE','<strong>Telp:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS','<strong>IP Address:</strong>');
define('OFFICE_HOST_ADDRESS','<strong>Alamat Host:</strong>');
define('OFFICE_DATE_TIME','<strong>Tanggal dan Waktu:</strong>');
if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

define('EMAIL_TEXT_TELEPHONE', 'Telp: ');

// email disclaimer
define('EMAIL_DISCLAIMER', 'Alamat Email ini telah diberikan kepada kami oleh Anda atau oleh salah satu dari pelanggan kami. Jika Anda merasa bahwa Anda telah menerima email ini dalam kesalahan, silakan kirimkan sebuah email kepada kami ke %s');
define('EMAIL_SPAM_DISCLAIMER','Email ini dikirimkan sesuai dengan peraturan pada US CAN-SPAM Law yang berlaku pada tanggal 01/01/2004. Permintaan penghapusan akan dihargai dan dihormati dan dapat dikirimkan ke alamat ini.');
// Define a message you'd like to add to an order confirmation email
define('EMAIL_ORDER_MESSAGE',''); 
define('EMAIL_FOOTER_COPYRIGHT','Hak Cipta (c) ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Dibangun di atas aplikasi <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
define('TEXT_UNSUBSCRIBE', "\n\nTo Berhenti langganan dari fitur buletin dan email promosi, dengan mudah klik pada tautan berikut: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>PENTING:</strong> Untuk perlindungan anda dan untuk mencegah kedengkian, semua email dikirim dari situs ini di log dan isi direkam dan tersedia di pemilik toko. Jika anda merasa anda menerima email ini dalam masalah, silahkan kirim email ke ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Pesan ini disertakan dengan semua Email yang dikirimkan dari situs ini:</strong>');


// Admin additional email subjects
define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[BUAT AKUN]');
define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[PENGIRIMAN GV OLEH PELANGGAN]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[PESANAN BARU]');

// Low Stock Emails
define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Peringatan: Persediaan Sedikit');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Laporan Persediaan Sedikit: ');
