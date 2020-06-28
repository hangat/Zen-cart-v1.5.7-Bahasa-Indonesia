<?php
/**
 * Authorize.net AIM Payment Module Language definitions
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin

  if (defined('MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS') && MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Login Authorize.net Merchant</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />Testing Info:<br /><b>Nomer Kartu Kredit Persetujuan Otomatis:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Catatan:</b> Nomer kartu kredit ini akan mengembalikan penurunan dalam mode live, dan sebuah persetujuan dalam mode test.  Beberapa fitur tanggal dapat digunakan untuk tanggal kadaluarsa dan beberapa 3 atau 4 nomer digit (AMEX) dapat digunakan untuk kode CVV.<br /><br /><b>Automatic Decline Credit Card Number:</b><br /><br />Card #: 4222222222222<br /><br />Nomer kartu kredit ini dapat digunakan untuk menerima/melihat penurunan untuk penggunaan testing/pengujian.<br /><br />' : '') . '<br><br>Lihat <a href="https://docs.zen-cart.com/user/modules/authorizenet_aim/" rel="noreferrer noopener" target="_blank">Artikel Tanya Jawab Pengaturan AIM</a> untuk detail instruksi pengaturan.');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Klik disini untuk daftar Akun</a><br /><br /><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Area Perdagangan Authorize.net</a><br /><br /><strong>Kebutuhan:</strong><br /><hr />*<strong>Akun Authorize.net</strong> (lihat tautan diatas untuk mendaftar)<br />*<strong>CURL dibutuhkan </strong>dan HARUS dikompilasi dengan dukungan SSL kedalam PHP oleh perusahaan hosting anda<br />*<strong>Nama pengguna dan kunci transaksi Authorize.net</strong> tersedia dari area Pedagang anda<br><br>Lihat <a href="https://docs.zen-cart.com/user/modules/authorizenet_aim/" rel="noreferrer noopener" target="_blank">Artikel Tanya Jawab Pengaturan AIM</a> untuk detail instruksi pengaturan.');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'Fungsi CURL tidak ditemukan - diperlukan untuk modul pembayaran AIM Authorize.net');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Kartu Kredit');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Tipe Kartu Kredit:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Nama Pemegang Kartu:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Nomor Kartu Kredit:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Tanggal Kadaluarsa:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'Nomor CVV:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'Apa ini?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Nama pemegang kartu kredit harus paling sedikit ' . CC_OWNER_MIN_LENGTH . ' karakter.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Nomor kartu kredit harus paling sedikit ' . CC_NUMBER_MIN_LENGTH . ' karakter.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* 3 atau 4 angka CVV harus dimasukkan dari belakang kartu kredit.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Kartu kredit Anda tidak bisa diotorisasi karena alasan ini. Silakan betulkan informasi yang Anda berikan dan coba sekali lagi atau hubungi kami untuk bantuan lebih lanjut.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Kesalahan Kartu Kredit!');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_COMM_ERROR', 'Tidak dapat memproses pembayaran karena kesalahan komunikasi. Anda dapat mencoba lagi atau menghubungi kami untuk bantuan.');

// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Lakukan Pengembalian Dana');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Error: Anda menghendaki pengembalian dana namun tidak memerika kotak Konfirmasi.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Error: Anda menghendaki pengembalian dana namun anda mengisi jumlah yang keliru.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: Anda menghendaki pengembalian dana but namun tidak memasukkan 4 angka nomor Kartu Kredit.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Pengembalian Dana diaktifkan. ID Transaksi: %s - Kode Otorisasi: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: Anda ingin melakukan capture namun tidak memeriksa kotak Konfirmasi.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Lakukan capture');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'Error: Anda menghendaki capture namun perlu memasukkan jumlah.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: Anda perlu menyebutkan Transaksi ID.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Capture pengembalian dana diaktifkan. Jumlah: %s.  Transaksi ID: %s - Kode Otorisasi: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Lakukan Pembatalan');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'Error: Anda menghendaki Pembatalan namun tidak memeriksa kotak Konfirmasi.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Pembatalan diaktifkan. Transaksi ID: %s - Kode Otorisasi: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Transaksi Pengembalian Dana</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'Anda dapat mengembalikan dana dari kartu kredit pelanggan disini:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Centang kotak ini untuk mengkonfirmasi maksud anda: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Masukkan jumlah yang ingin anda kembalikan');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Masukkan 4 angka terakhir dari kartu kredit yang dananya akan dikembalikan.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Masukkan kode asli Transaksi ID:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Catatan (hanya tampil pada Order History):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Pengembalian dana di tetapkan');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'Anda dapat mengembalikan dana pesanan terhadap jumlah yang telah di capture. Anda harus memasukkan 4 angka terakhir dari nomor kartu kredit yang telah digunakan pada pesanan yang dimaksud.<br />Pengembalian dana harus dikeluarkan dalam jangka waktu 120 hari dari tanggal transaksi yang tertera.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Capture Transaksi</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'Anda dapat meng-capture pengembalian dana yang telah diotorisasikan sebelumnya disini.:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Masukkan jumlah untuk di Capture: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Centang kotak ini untuk mengkonfirmasi maksud anda: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Masukkan kode asli Transaksi ID: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Catatan (hanya tampil pada Order History):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Dilunaskan pengembalian dana yang sudah diotorisasikan sebelumnya.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Capture harus dilakukan dalam jangka waktu 30 hari dari otorisasi yang asli. Capture pesana hanya dapat anda lakukan SEKALI. <br />Anda harus memastikan bahwa jumlah yang anda maksud sudah benar.<br />Jika anda tidak memasukkan jumlah, maka jumlah sebelumnyalah yang akan digunakan.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Pembatalan Tansaksi</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'Anda dapat membatalkan transaksi yang belum dilunasi:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Centang kotak ini untuk mengkonfirmasi maksud anda:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Catatan (hanya tampil pada Order History):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaksi Dibatalkan');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Pembatalan harus dilengkapi sebelum transaksi asli terselesaikan di dalam batch harian.');

