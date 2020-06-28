<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 07 Modified in v1.5.7 $
 */

define('HEADING_TITLE_OPT', 'Opsi Produk');
define('HEADING_TITLE_VAL', 'Nilai Opsi');
define('HEADING_TITLE_ATRIB', 'Atribut Produk');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nama Produk');
define('TABLE_HEADING_OPT_NAME', 'Nama Opsi');
define('TABLE_HEADING_OPT_VALUE', 'Nilai Opsi');
define('TABLE_HEADING_OPT_PRICE', 'Harga');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Awalan');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TABLE_HEADING_DOWNLOAD', 'Produk yang dapat diunduh:');
define('TABLE_TEXT_FILENAME', 'Nama berkas:');
define('TABLE_TEXT_MAX_DAYS', 'Jumlah hari kadaluarsa:');
define('TABLE_TEXT_MAX_COUNT', 'Jumlah maksimal pengunduhan:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Opsi ini memiliki produk dan nilai yang tertaut kepadanya - Anda tidak aman untuk menghapusnya.<br />CATATAN: Berkas pengunduhan yang terhubung untuk Nilai Opsi ini tidak akan dihapus dari server.</span>');
define('TEXT_OK_TO_DELETE', 'Opsi ini tidak memiliki produk dan nilai yang tertaut kepadanya - Anda aman untuk menghapusnya.');
define('TEXT_OPTION_ID', 'ID Opsi');
define('TEXT_OPTION_NAME', 'Nama Opsi');

define('ATTRIBUTE_WARNING_DUPLICATE','Duplikat Atribut - Atribut tidak ditambahkan'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Duplikat Atribut - Atribut tidak diubah'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Opsi Atribut dan Nilai Opsi TIDAK Sama - Atribut tidak ditambahkan'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Opsi Atribut dan Nilai Opsi TIDAK Sama - Atribut tidak diubah'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Mungkin Duplikat Nama Opsi Ditambahkan'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Mungkin Duplikat Nilai Opsi Ditambahkan'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','MENGEDIT'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','MENGHAPUS'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','MENAMBAHKAN ATRIBUT BARU'); // title
define('TEXT_DOWNLOADS_DISABLED','CATATAN: Pengunduhan dinon-aktifkan');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Hari:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Maks:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Urutan');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Urutan Standar');
  define('TEXT_SORT',' Urutan: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Awalan');
  define('TABLE_HEADING_OPT_WEIGHT','Berat');
  define('TABLE_HEADING_OPT_SORT_ORDER','Awalan');

  define('TABLE_HEADING_YES','Ya');
  define('TABLE_HEADING_NO','Tidak');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Max');

  define('TEXT_OPTION_VALUE_COMMENTS','Komentar: ');
  define('TEXT_OPTION_VALUE_SIZE','Ukuran Tampilan: ');
  define('TEXT_OPTION_VALUE_MAX','Panjang maksimal: ');

  define('TEXT_ATTRIBUTES_IMAGE','Contoh Gambar Atribut:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Direktori Gambar Atribut:');

  define('TEXT_ATTRIBUTES_FLAGS','Bendera<br />Atribut:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Digunakan Untuk<br />Tujuan Penampilan Saja:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Atribut Gratis<br />Jika Produk Gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atribut Standar<br />Ditandai Dipilih:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Gunakan Diskon yang Sama<br />Digunakan oleh Produk:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Sertakan dalam Harga Dasar<br />Jika Harga Berdasarkan Atribut');

  define('TEXT_PRODUCT_OPTIONS_INFO','Edit Opsi produk untuk pengaturan tambahan');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Salin ke SEMUA Produk dimana Nama dan Nilai Opsi ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Pilih sebuah Nama dan Nilai Opsi yang saat ini sudah ada pada produk yang Anda kemudian ingin untuk menyalin Nama dan Nilai Opsi lain ke semua produk dengan Nama dan Nilai Opsi yang sudah ada ini');
  define('TEXT_SELECT_OPTION_FROM', 'Nama Opsi untuk dicocokkan:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Nilai Opsi untuk dicocokkan:');
  define('TEXT_SELECT_OPTION_TO', 'Nama Opsi untuk ditambahkan:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Nilai Opsi untuk ditambahkan:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Biarkan kosong untuk SEMUA Produk atau<br />ketikkan sebuah ID Kategori untuk Produk untuk diperbarui');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Salin Nama/Nilai Opsi ke produk dengan Nama Opsi yang sudah ada ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Pilih sebuah Nama dan Nilai Opsi yang saat ini sudah ada pada produk untuk ditambahkan ke semua produk atau hanya ke produk-produk dalam kategori yang dipilih yang memiliki Nama Opsi yang dipilih.
                                                   <br /><strong>Contoh:</strong> Tambahkan Nama Opsi: Nilai Opsi Warna: Merah ke semua Produk dengan Nama Opsi: Ukuran
                                                   <br /><strong>Contoh:</strong> Tambahkan Nama Opsi: Nilai Opsi Warna: Hijau dengan nilai standar dari ID Produk: 34 ke semua Produk dengan Nama Opsi: Ukuran
                                                   <br /><strong>Contoh:</strong> Tambahkan Nama Opsi: Nilai Opsi Warna: Hijau denag nilai standar dari ID Produk: 34 ke semua Produk dengan Nama Opsi: Ukuran untuk ID Kategori: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Nama Opsi untuk ditambahkan ke:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Nama Opsi untuk ditambahkan:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Nilai Opsi untuk ditambahkan:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Nilai Atribut Baru Standar dari ID Produk atau biarkan kosong untuk tanpa nilai standar:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>bagaimana seharusnya atribut produk yang sudah ada ditangani?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Hapus</strong> dahulu, kemudian salin atribut yang baru');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Perbarui</strong> atribut yang sudah ada dengan pengaturan/harga yang baru');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Abaikan</strong> atribut yang sudah ada dan tambahkan hanya atribut yang baru');

  define('TEXT_INFO_FROM', ' dari: ');
  define('TEXT_INFO_TO', ' ke: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Kesalahan: Nama Opsi dan Nilai Opsi Sudah Ada');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Kesalahan: Nama Opsi dan Nilai Opsi yang tidak cocok telah dipilih');
  define('ERROR_OPTION_VALUES_NONE', 'Kesalahan: Tidak ada yang bisa disalin');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Berhasil menyalin! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Kesalahan: Nama/Nilai Opsi Tidak Ada untuk ID Produk');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Hapus Atribut yang Cocok dari SEMUA Produk apabila Nama dan Nilai Opsi ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Pilih sebuah Nama dan Nilai Opsi yang saat ini sudah ada pada produk yang ingin Anda hapus dari SEMUA Produk dalam satu kategori');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Nama Opsi untuk dicocokkan:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Nilai Opsi untuk dicocokkan:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Kesalahan: Nama Opsi dan Nilai Opsi yang tidak cocok telah dipilih');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Berhasil: Menghapus: ');
  define('LABEL_FILTER', 'Pilih Nilai Opsi untuk difilter');
  define('TEXT_DISPLAY_NUMBER_OF_OPTION_VALUES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> Nilai Opsi)');
  define('TEXT_SHOW_ALL', 'Tampilkan semua');
