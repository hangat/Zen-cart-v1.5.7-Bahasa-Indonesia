<?php
/**
 * Square payment module language defines
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Jun 21 Modified in v1.5.7 $
 */

define('MODULE_PAYMENT_SQUARE_TEXT_DESCRIPTION', 'Terima kartu kredit dalam waktu kurang dari 5 menit.<br>Tidak ada biaya bulanan dan tidak ada biaya setup.<br>Sesuai PCI. Pelanggan tidak pernah meninggalkan toko Anda!<br>Tarif standar adalah 2.9% + $0.30 per transaksi.<br>Dana disimpan di rekening bank Anda dalam 1-2 hari kerja.<br><br>
       <a href="https://www.zen-cart.com/partners/square" target="_blank">Dapatkan informasi lebih lanjut, atau Daftar untuk akun</a><br><br>
       <a href="https://squareup.com/login" target="_blank">Masuk ke Akun Square Anda</a>');

define('MODULE_PAYMENT_SQUARE_TEXT_ADMIN_TITLE', 'Square'); // Payment option title as displayed in the admin
define('MODULE_PAYMENT_SQUARE_TEXT_CATALOG_TITLE', 'Kartu Kredit');  // Payment option title as displayed to the customer

define('MODULE_PAYMENT_SQUARE_TEXT_NOTICES_TO_CUSTOMER', '');  // Payment option sub-text displayed to the customer, above the cc input fields

define('MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_POSTCODE', 'Kode Pos:');
define('MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_NUMBER', 'Nomer Kartu:');
define('MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_EXPIRES', 'Tanggal Kadaluarsa:');
define('MODULE_PAYMENT_SQUARE_TEXT_CVV', 'Nomer CVV:');
define('MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_TYPE', 'Tipe Kartu Kredit:');

define('MODULE_PAYMENT_SQUARE_TEXT_ERROR', '(SQ-ERR) Transaksi Anda tidak dapat diselesaikan karena kesalahan: ');
define('MODULE_PAYMENT_SQUARE_TEXT_MISCONFIGURATION', 'Transaksi Anda tidak dapat diselesaikan karena kesalahan konfigurasi di toko kami. Silakan laporkan kesalahan ini kepada Pemilik Toko: SQ-MISCONF');
define('MODULE_PAYMENT_SQUARE_TEXT_COMM_ERROR', 'Tidak dapat memproses pembayaran karena kesalahan komunikasi. Anda dapat mencoba lagi atau menghubungi kami untuk bantuan.');
define('MODULE_PAYMENT_SQUARE_ERROR_INVALID_CARD_DATA',
    'Kami tidak dapat melakukan transaksi Anda karena masalah dengan data kartu yang Anda masukkan. Harap perbaiki data kartu, atau laporkan kesalahan ini kepada Pemilik Toko: SQ-NONCE-FAILURE');
define('MODULE_PAYMENT_SQUARE_ERROR_DECLINED', 'Maaf, pembayaran Anda tidak dapat diotorisasi. Silakan pilih metode pembayaran alternatif.');

if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_SQUARE_TEXT_NEED_ACCESS_TOKEN',
        '<span class="text-danger"><strong>WASPADA: Token Akses tidak disetel:</strong></span> <br>
    1. Pastikan URL Pengalihan OAuth di "aplikasi" Akun Square Anda diatur ke <u><nobr><pre>' . str_replace(array('index.php?main_page=index', 'http://'), array('square_handler.php', 'https://'), zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></u><br>
    2. Lalu <a href="%s" rel="noopener" target="_blank" class="onClickStartCheck"><button class="btn btn-xs btn-success">Klik di sini untuk masuk dan Otorisasi akun Anda</button></a>');
}


define('MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_SUMMARY', '<strong>Ringkasan Transaksi</strong>');
define('MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_ACTIONS', '<strong>Tindakan</strong>');
define('MODULE_PAYMENT_SQUARE_TEXT_UPDATE_FAILED', 'Maaf, pembaruan transaksi yang dicoba gagal secara tak terduga. Lihat log untuk detailnya.');

define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TITLE', '<strong>Transaksi Pengembalian Uang</strong>');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND', 'Anda dapat mengembalikan uang kepada pelanggan di sini:');
define('MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_CHECK', 'Centang kotak ini untuk mengonfirmasi maksud Anda: ');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_AMOUNT_TEXT', 'Masukkan jumlah yang ingin Anda kembalikan');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TEXT_COMMENTS', 'Catatan (akan ditampilkan di Riwayat Pesanan):');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_DEFAULT_MESSAGE', 'Pengembalian Dana Diterbitkan');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_SUFFIX', 'Anda dapat mengembalikan pesanan dalam 120 hari, hingga jumlah yang ditenderkan sebelumnya. Anda harus memberikan ID transaksi asli dan ID tender<br>Lihat situs Square untuk lebih lanjut <a href="https://squareup.com/help/us/en/article/5060" rel="noopener" target="_blank">informasi tentang pengembalian Square</a>.');
define('MODULE_PAYMENT_SQUARE_ENTRY_REFUND_BUTTON_TEXT', 'Lakukan Pengembalian Uang');
define('MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_ERROR', 'Kesalahan: Anda diminta melakukan pengembalian dana tetapi tidak mencentang kotak Konfirmasi.');
define('MODULE_PAYMENT_SQUARE_TEXT_INVALID_REFUND_AMOUNT', 'Kesalahan: Anda meminta pengembalian dana tetapi memasukkan jumlah yang tidak valid.');
define('MODULE_PAYMENT_SQUARE_TEXT_REFUND_INITIATED', 'Dikembalikan ');

define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TITLE', '<strong>Transaksi Capture</strong>');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE', 'Anda dapat mengambil dana yang sebelumnya diotorisasi di sini:');
define('MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_CHECK', 'Centang kotak ini untuk mengonfirmasi maksud Anda: ');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TEXT_COMMENTS', 'Catatan (akan ditampilkan di Riwayat Pesanan):');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_DEFAULT_MESSAGE', '');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_SUFFIX', 'Pengambilan harus dilakukan dalam 6 hari dari otorisasi asli. Anda hanya dapat menangkap pesanan SEKALI.');
define('MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_ERROR', 'Kesalahan: Anda diminta untuk melakukan penangkapan tetapi tidak mencentang kotak Konfirmasi.');
define('MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_BUTTON_TEXT', 'Lakukan Capture');
define('MODULE_PAYMENT_SQUARE_TEXT_TRANS_ID_REQUIRED_ERROR', 'Kesalahan: Anda harus menentukan ID Transaksi.');
define('MODULE_PAYMENT_SQUARE_TEXT_CAPT_INITIATED', 'Pengambilan Dana dimulai. ID transaksi: %s');

define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_TITLE', '<strong>Membatalkan Transaksi</strong>');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID', 'Anda dapat membatalkan otorisasi yang belum ditangkap.');
define('MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_CHECK', 'Centang kotak ini untuk mengonfirmasi maksud Anda:');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_TEXT_COMMENTS', 'Catatan (akan ditampilkan di Riwayat Pesanan):');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaksi Dibatalkan');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_SUFFIX', '');
define('MODULE_PAYMENT_SQUARE_ENTRY_VOID_BUTTON_TEXT', 'Batal');
define('MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_ERROR', 'Kesalahan: Anda meminta Void tetapi tidak mencentang kotak Konfirmasi.');
define('MODULE_PAYMENT_SQUARE_TEXT_VOID_INITIATED', 'Void diinisiasi. ID transaksi: %s');
