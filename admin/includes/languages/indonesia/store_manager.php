<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

  define('HEADING_TITLE', 'Manajer toko');
  define('TABLE_CONFIGURATION_TABLE', 'Cari Definisi KONSTANTA');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>Berhasil</strong> memperbarui urutan Atribut');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Berhasil</strong> memperbarui Nilai Pengurutan Harga Produk');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>Berhasil</strong> me-reset Produk Dilihat menjadi 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Berhasil</strong> me-reset produk Dipesan menjadi 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>Berhasil</strong> me-reset semua Kategori Utama untuk Produk Tertaut');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Berhasil</strong> Penghitung Diperbarui menjadi: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Kesalahan:</strong> Tidak ada Configuration Key yang cocok yang ditemukan ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Kesalahan:</strong> Tidak ada Configuration Key atau Teks yang diketikkan untuk dicari... Pencarian dihentikan');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Perbarui Penghitung</strong><br />ke sebuah nilai baru: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Perbarui SEMUA Pengurut Harga Produk</strong><br />untuk dapat disortit oleh harga yang ditampilkan: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Reset SEMUA Produk Dilihat</strong><br />Reset Hitungan Produk Dilihat menjadi 0: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Reset SEMUA produk Dipesan</strong><br />Reset Hitungan Produk Dipesan menjadi 0: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Reset SEMUA ID Kategori Utama Produk</strong><br />untuk digunakan untuk Produk Tertaut dan Penentuan Harga: ');

  define('TEXT_NEW_ORDERS_ID', 'ID Pesanan Baru');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Set nomor pesanan berikutnya</strong><br />CATATAN: Anda tidak dapat mengeset nomor pesanan ke nilai dibawah dari pesanan yang telah ada dalam database.');
  define('TEXT_MSG_NEXT_ORDER', 'Nomor pesanan berikutnya telah di-set ke %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Karena data pesanan yang ada, nomor pesanan berikutnya saat ini: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'Karena batasan database, anda tidak dapat mengatur nomor pesanan lebih besar dari 2000000000. Silakan pilih nilai dibawahnya.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Cari KONSTANTA atau Berkas Bahasa yang ditentukan</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Kunci atau Nama:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>CATATAN:</strong> KONSTANTA ditulis dalam HURUF BESAR.<br />Pencarian berkas bahasa dapat menjadi sebuah pencarian alternatif jika pencarian dalam tabel pada database tidak membuahkan hasil.');

  define('TABLE_TITLE_KEY', '<strong>Kunci:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Judul:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Deskripsi:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Kelompok:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Nilai:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Pencarian File Bahasa:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Semua File Bahasa untuk ' . strtoupper($_SESSION['language']) . ' - Katalog / Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Semua file Bahasa Utama - Katalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Semua File Bahasa yang Dipilih Saat Ini - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'All Main Language files - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Semua File Bahasa yang Dipilih Saat Ini - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Semua file Bahasa Pilihan Saat Ini - Katalog / Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Tidak ada pengedian yang tersedia');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' atau, DISEMBUNYIKAN');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimisasikan Database</strong> untuk menghapus ruangan yang terbuang dari data-data yang dihapus.<br />Dapat dijalankan bulanan atau mingguan pada database yang sibuk.<br />(Sebaiknya dijalankan selama waktu-waktu tidak sibuk).');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Optimalisasi tabel Database sedang berlangsung. Ini mungkin memerlukan beberapa menit. Silakan tunggu. Menu sebelumnya akan dimunculkan setelah selesai ... ');
  define('SUCCESS_DB_OPTIMIZE', 'Optimisasi Database - Tabel-tabel Diproses: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Bersihkan File Log Debug</strong><br /><strong>PERHATIAN: </strong>pesan kesalahan record PHP Zen Cart untuk kegunaan debug, dan banyak modul pembayaran dapat diset untuk log data debug untuk diagnosis masalah komunikasi. <br />Klik pilihan bersihkan akan *secara permanen* menghapus *SEMUA* log debug terkait dengan error PHP dan modul pembayaran dari /cache/ folder.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'File Log Debug telah dibersihkan');
