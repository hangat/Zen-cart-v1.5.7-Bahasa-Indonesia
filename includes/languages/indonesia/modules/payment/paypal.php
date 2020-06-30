<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'Standar Pembayaran PayPal');
  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA', 'Website Standar Pembayaran PayPal');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
  define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>Standar Pembayaran PayPal</strong> (Layanan PayPal yang lama, kurang dapat diandalkan daripada Express Checkout)<br /><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Kelola akun PayPal Anda.</a><br /><br /><font color="green">Petunjuk Konfigurasi:</font><br />1. <a href="http://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">Daftar akun PayPal Anda - klik di sini.</a><br />2. Di akun PayPal Anda, di bawah "Profil",<ul><li>atur <strong>Preferensi Pemberitahuan Pembayaran Instan Anda</strong> URL ke:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr><br />(Jika URL lain yang valid sudah dimasukkan, Anda dapat membiarkannya sendiri.)<br /><span class="alert">Pastikan bahwa Kotak untuk mengaktifkan IPN dicentang!</span><br /><br /></li><li>dalam <strong>Preferensi Pembayaran Situs Web</strong> atur <strong>URL Pengembalian Otomatis Anda</strong> ke:<br /><nobr><pre>'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</pre></nobr></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... dan klik "instal" di atas untuk mengaktifkan dukungan Standar PayPal ... dan "edit" untuk memberi tahu Zen Cart pengaturan PayPal Anda.</li>') . '</ul><font color="green"><hr /><strong>Persyaratan:</strong></font><br /><hr />*<strong>Akun PayPal</strong> (<a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">klik untuk mengatur/mengkonfigurasi</a>)<br />*<strong>CURL dengan SSL</strong> sangat disarankan<br />*<strong>Port 80 (dan port 443 jika SSL di enable)</strong> digunakan untuk <strong>*komunikasi dua arah*</strong> dengan gateway, jadi harus terbuka di router/firewall host Anda.<br />*<strong>Pengaturan</strong> dalam akun PayPal Anda harus dikonfigurasi seperti dijelaskan di atas.' );
 } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
  // You should only use choices listed on this page: https://ppmts.custhelp.com/app/answers/detail/a_id/632
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG', 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT', 'Checkout dengan PayPal');
  define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', 'Menghemat waktu. Periksa dengan aman. <br />Bayar tanpa membagikan informasi keuangan Anda.');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT . '" /> &nbsp;' .
                                                    '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Nama Depan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nama Belakang:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Nama Bisnis:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Nama Alamat:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Alamat Jalan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Alamat Kota:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Alamat Kecamatan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Alamat Zip:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Alamat Negara:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'ID Ebay:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Status Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Status Alamat:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Tipe pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Status pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Alasan Tertunda:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Faktur:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Tanggal pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Mata uang:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Jumlah bruto:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Biaya Pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Kurs:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Item Troli:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Tipe Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Induk ID. Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Komentar Sistem: ');


  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE', 'Semua barang di Troli Anda (lihat detail di toko dan di tanda terima toko Anda).');
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', STORE_NAME . ' Membeli');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Biaya Satu Kali yang terkait dengan ');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT', 'Biaya tambahan');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG', 'Menangani biaya dan biaya lain yang berlaku');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Diskon');
  define('MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG', 'Kredit yang diterapkan, termasuk kupon diskon, sertifikat hadiah, dll');
