<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
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

  // Define a message you'd like to add to an order update email
  define('EMAIL_ORDER_UPDATE_MESSAGE',''); 

// office use only
  define('OFFICE_FROM','Dari:');
  define('OFFICE_EMAIL','E-mail:');

  define('OFFICE_USE','Hanya untuk Penggunaan Kantor:');
  define('OFFICE_LOGIN_NAME','Nama Login:');
  define('OFFICE_LOGIN_EMAIL','E-mail login:');
  define('OFFICE_LOGIN_PHONE','<strong>Telepon:</strong>');
  define('OFFICE_IP_ADDRESS','Alamat IP:');
  define('OFFICE_HOST_ADDRESS','Alamat Host:');
  define('OFFICE_DATE_TIME','Tanggal dan Waktu:');

// email disclaimer
  define('EMAIL_DISCLAIMER', "\n" . 'Alamat email ini telah diberikan kepada kami oleh Anda atau oleh salah satu dari pelanggan kami. Jika Anda merasa bahwa Anda telah menerima e-mail ini dalam kesalahan, silakan kirimkan sebuah e-mail kepada kami ke %s');
  define('EMAIL_SPAM_DISCLAIMER','');
  define('EMAIL_FOOTER_COPYRIGHT','Hak Cipta (c) ' . date('Y') . ' <a href="https://www.zen-cart.com">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[GV ADMIN SENT]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[DISCOUNT COUPONS]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ORDERS STATUS]');
  define('TEXT_UNSUBSCRIBE', "\n\nUntuk berhenti berlangganan dari buletin masa depan dan email promosi, silakan klik tautan dibawah ini: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Disabled');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Waspada Admin: pengguna admin baru ditambahkan.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Waspada Administratif: pengguna admin baru (%s) telah DITAMBAHKAN ke toko anda oleh %s.' . "\n\n" . 'Jika anda atau administrator yang memiliki otorisasi tidak melaksanakan perubahan ini, disarankan bahwa Anda memverifikasi keamanan situs Anda segera.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Pemberitahuan Admin: Sebuah Pengguna admin telah dihapus.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Pemberitahuan Administratif: Pengguna admin (%s) telah DIHAPUS dari toko anda oleh %s.' . "\n\n" . 'Jika anda atau administrator yang memiliki otorisasi tidak melaksanakan perubahan ini, disarankan bahwa Anda memverifikasi keamanan situs Anda segera.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Pemberitahuan Admin: Detail Pengguna Admin telah diubah.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Pemberitahuan Admin: Alamat email Pengguna Admin (%s) telah diubah dari (%s) menjadi (%s) oleh (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Pemberitahuan Admin: Nama Pengguna Admin (%s) telah diubah dari (%s) menjadi (%s) oleh (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Pemberitahuan Admin: Profil keamanan Pengguna Admin (%s) telah diubah dari (%s) menjadi (%s) oleh (%s)');
