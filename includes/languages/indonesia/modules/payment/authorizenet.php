<?php
/**
 * Authorize.net SIM Payment Module
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net (SIM)');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Kartu Kredit');  // Payment option title as displayed to the customer


  if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Login Authorize.net Merchant</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Testing Info:<br /><b>Nomer Kartu Kredit Persetujuan Otomatis:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Catatan:</b> Nomer Kartu kredit ini akan mengembalikan menurun dalam mode live, dan Persetujuan dalam mode test.  Beberapa fitur tanggal dapat digunakan untuk tanggal kadaluarsa dan 3 atau 4 (AMEX) nomer digital dapat digunakan untuk kode CVV.<br /><br /><b>Nomer Kartu Kredit Otomatis Menurun:</b><br /><br />Card #: 4222222222222<br /><br />Nomer kartu kredit ini dapat digunakan untuk menerima/melihat penurunan untuk penggunaan testing/pengujian.' : '') . '<br /><br /><strong>SETTINGS</strong><br />"Response" dan "receipt" dan "relay" URL settings berada pada Kebijakan Authorize.net Merchant Profile anda, dapat dibiarkan KOSONG, atau jika diperlukan anda dapat mengatur "URL relay" ke titik ke https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>Jika anda memiliki masalah dengan ini, lihat <a href="https://www.zen-cart.com/content.php?303-how-to-set-up-the-authorizenet-sim-payment-module" rel="noreferrer noopener" target="_blank">Artikel Tanya Jawab Pengaturan SIM</a> untuk instruksi pengaturan secara detail.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Klik disini untuk daftar Akun</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Klik untuk Login ke Area Perdagangan Authorize.net</a><br /><br /><strong>Kebutuhan:</strong><br /><hr />*<strong>Akun Authorize.net</strong> (lihat tautan diatas untuk mendaftar)<br />*<strong>Nama pengguna dan kunci transaksi Authorize.net</strong> tersedia dari area Pedagang anda<br><br>Lihat <a href="http://www.zen-cart.com/content.php?303-how-to-set-up-the-authorizenet-sim-payment-module" target="_blank">Artikel Tanya Jawab Pengaturan SIM</a> untuk instruksi pengaturan secara detail.');
  }

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Tipe:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Pemegang Kartu Kredit:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Nomor Kartu Kredit:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Tanggal Kadaluarsa Kartu Kredit:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'Nomor CVV:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Apa ini?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Nama pemegang kartu kredit harus paling sedikit ' . CC_OWNER_MIN_LENGTH . ' karakter.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Nomor kartu kredit harus paling sedikit ' . CC_NUMBER_MIN_LENGTH . ' karakter.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* The 3 or 4 digit CVV number must be entered from the back of the credit card.\n');  
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Ada kesalahan disaat sedang memproses kartu kredit Anda. Silakan coba sekali lagi.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Kartu kredit Anda ditolak. Silakan coba kartu lain atau hubungi bank Anda untuk informasi selanjutnya.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Kartu Kredit Error!');
