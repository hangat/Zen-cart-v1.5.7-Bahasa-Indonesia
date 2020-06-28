<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Apr 30 Modified in v1.5.7 $
 */
define('HEADING_TITLE', 'Manajer Nama Opsi');
define('TEXT_ATTRIBUTES_CONTROLLER', 'Pengontrol Atribut');

define('TEXT_WARNING_TEXT_OPTION_NAME_RESTORED', 'Peringatan: Nilai Opsi ID#0 TEKS  ditemukan hilang dari tabel database "' . TABLE_PRODUCTS_OPTIONS_VALUES . '". Ini mungkin karena plugin yang salah kode. <br> Nilai telah dipulihkan dengan benar.');
define('TABLE_HEADING_PRODUCT', 'Nama Produk');
define('TABLE_HEADING_OPTION_NAME', 'Nama Opsi');
define('TABLE_HEADING_OPTION_VALUE', 'Nilai Opsi');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Catatan: Edit Nama Opsi untuk pengaturan tambahan</strong>');

define('TEXT_WARNING_OF_DELETE', 'Nama Opsi ini digunakan oleh produk yang tercantum di bawah ini: tidak dapat dihapus sampai semua Nilai Opsi (atribut) yang terkait dengan Nama Opsi ini telah dihapus dari produk ini (ini dapat dilakukan dengan menggunakan Alat Global di bawah)');
define('TEXT_OK_TO_DELETE', 'Nama Opsi ini tidak digunakan oleh produk apa pun - aman untuk menghapusnya.<br><strong>Peringatan:</strong> ini akan menghapus Nama Opsi DAN semua Nilai Opsi yang terkait dengan Nama Opsi itu.');

define('TEXT_OPTION_ID', 'ID Opsi');
define('TEXT_OPTION_NAME', 'Nama Opsi');

define('TEXT_WARNING_DUPLICATE_OPTION_NAME','Opsi ID#%1$u: Nama Opsi Ganda Ditambahkan: "%2$s" (%3$s)');

define('TEXT_ORDER_BY','Dipesan oleh');
define('TEXT_SORT_ORDER','Sortir Pesanan');

define('TABLE_HEADING_OPTION_TYPE', 'Jenis Opsi');
define('TABLE_HEADING_OPTION_NAME_SIZE','Ukuran');
define('TABLE_HEADING_OPTION_NAME_MAX','Max');

define('TEXT_OPTION_NAME_COMMENTS','Komentar (ditampilkan di sebelah Nama Opsi)');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Atribut Gambar per Baris');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Gaya Tata Letak Gambar Atribut (hanya untuk Kotak centang / Tombol Radio)');
define('TEXT_OPTION_ATTRIBUTE_LAYOUTS_EXAMPLE', 'Lihat Contoh');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0 - Pilihan + teks, Gambar di bawah Opsi');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1 - Pilih + Gambar + Opsi sebaris');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2 - Pilih + Opsi + Gambar yang dibungkus');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3 - Pilih + Gambar + Opsi dibungkus');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4 - Gambar + Opsi + Pilih sebagai kolom');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5 - Pilih + Gambar + Opsi sebagai kolom');
//text attributes only
define('TEXT_OPTION_NAME_ROWS', 'Baris');
define('TEXT_OPTION_NAME_SIZE','Ukuran layar');
define('TEXT_OPTION_NAME_MAX','Panjang maksimum');
define('TEXT_OPTION_TYPE_TEXT_ATTRIBUTE_INFO', 'Catatan: ' . TEXT_OPTION_NAME_ROWS . ', ' . TEXT_OPTION_NAME_SIZE . ' dan ' . TEXT_OPTION_NAME_MAX . ' hanya untuk Tipe Nama Opsi "Teks".');
define('TEXT_INSERT_NEW_OPTION_NAME', 'Tambahkan Nama Opsi baru');

// Global Tools
define('TEXT_GLOBAL_TOOLS', 'Alat Global');
define('TEXT_CLICK_TO_SHOW_HIDE', 'klik untuk menampilkan / menyembunyikan');
define('TEXT_WARNING_BACKUP', 'Penting: Selalu buat cadangan database Anda yang terverifikasi sebelum membuat perubahan global / menggunakan Alat Global');
define('TEXT_SELECT_OPTION_TYPES_ALLOWED', 'Perhatikan bahwa Alat Global tidak dapat digunakan dengan jenis nama opsi "Teks" atau "File".');
define('TEXT_SELECT_PRODUCT', 'Pilih produk');
define('TEXT_SELECT_CATEGORY', 'Pilih Kategori');
define('TEXT_SELECT_OPTION', 'Pilih Nama Opsi');
define('TEXT_NAME', 'Nama');

// Add
define('TEXT_INFO_OPTION_VALUES_ADD', '<strong>Catatan:</strong> untuk produk yang diperbarui (menerima Nilai Opsi tambahan) menggunakan alat <b>Tambah</b>, urutan pengurutan untuk Nilai Opsi (atribut) akan diatur ulang ke urutan pengurutan <strong>default</strong> untuk nama Opsi itu.');

define('TEXT_OPTION_VALUE_ADD_ALL', 'Perbarui (tambahkan) semua Nilai Opsi yang tersisa ke SEMUA produk yang menggunakan Nama Opsi ini');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Untuk SEMUA produk yang menggunakan Nama Opsi yang dipilih (dan karenanya memiliki setidaknya satu Nilai Opsi yang ditetapkan), tambahkan SEMUA Nilai Opsi lainnya yang terkait dengan Nama Opsi.');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', 'Perbarui (tambahkan) semua Nilai Opsi yang tersisa ke SATU produk yang menggunakan Nama Opsi ini');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Untuk produk yang menggunakan Nama Opsi yang dipilih (dan memiliki setidaknya satu Nilai Opsi yang ditetapkan), tambahkan SEMUA Nilai Opsi lainnya yang terkait dengan Nama Opsi.');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', 'Perbarui (tambahkan) semua Nilai Opsi yang tersisa ke SEMUA produk dalam Kategori yang menggunakan Nama Opsi ini');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Untuk produk dalam SATU kategori hanya yang menggunakan Nama Opsi yang dipilih, tambahkan SEMUA Nilai Opsi lainnya yang terkait dengan Nama Opsi.');
define('TEXT_SHOW_CATEGORY_PATH', 'Tampilkan jalur kategori');
define('TEXT_SHOW_CATEGORY_NAME', 'Hanya tampilkan nama kategori');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUE', 'Nama Opsi "%1$s": Nilai Opsi "%2$s" ditambahkan ke produk "%3$s".');
define('SUCCESS_PRODUCT_OPTIONS_VALUES_SORT_ORDER', 'Nama Opsi "%1$s": produk "%2$s" Nilai Opsi diperbarui ke urutan pengurutan default untuk Nama Opsi "%1$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Nama Opsi "%1$s": %2$u produk diperbarui dengan Nilai Opsi tambahan.');

define('ERROR_PRODUCTS_OPTIONS_PRODUCTS', 'Peringatan: Tidak ditemukan produk yang cocok menggunakan Nama Opsi "%s" (tidak ada yang diperbarui).');
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Peringatan: Semua produk yang cocok sudah memiliki semua Nilai Opsi untuk Nama Opsi "%s" (tidak ada yang diperbarui).');

// Delete
define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>CATATAN:</strong> Semua Nilai Opsi akan dihapus dari pencocokan / produk yang dipilih. Ini tidak akan menghapus Nilai Opsi yang ditentukan untuk Nama Opsi itu.');
define('TEXT_OPTION_VALUE_DELETE_ALL', 'Hapus semua Nilai Opsi dari SEMUA produk menggunakan Nama Opsi ini');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Untuk SEMUA produk yang menggunakan Nama Opsi yang dipilih, hapus semua Nilai Opsi / Nama Opsi.');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', 'Hapus semua Nilai Opsi dari SATU produk menggunakan Nama Opsi ini');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Untuk produk yang menggunakan Nama Opsi yang dipilih, hapus SEMUA Nilai Opsi / Nama Opsi.');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', 'Hapus semua Nilai Opsi dari SATU Kategori produk untuk Nama Opsi ini');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Untuk produk dalam SATU kategori hanya yang menggunakan Nama Opsi yang dipilih, hapus semua Nilai Opsi / Nama Opsi.');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUES_DELETED', 'Nama Opsi "%1$s": semua Nilai Opsi dihapus dari produk "%2$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES_DELETED', 'Nama Opsi "%1$s": semua Nilai Opsi dihapus dari %2$u produk.');

// Copy
define('TEXT_OPTION_VALUE_COPY_ALL', 'Salin semua Nilai Opsi ke Nama Opsi lain');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Semua Nilai Opsi dari Nama Opsi yang dipilih akan disalin (ditambahkan) ke Nama Opsi lainnya.');
define('TEXT_SELECT_OPTION_FROM', 'Salin dari Nama Opsi: ');
define('TEXT_SELECT_OPTION_TO', 'Salin ke Nama Opsi: ');

define('SUCCESS_OPTION_VALUE_COPIED', 'Nilai Opsi "%6$s" ID#%5$u disalin dari Nama Opsi "%2$s" ID#%1$u ke Nama Opsi "%4$s" ID#%3$u.');
define('SUCCESS_OPTION_VALUES_COPIED', '%5$u Nilai Opsi disalin dari Nama Opsi "%2$s" ID#%1$u ke Nama Opsi "%4$s" ID#%3$u.');
define('ERROR_OPTION_VALUES_COPIED', 'Kesalahan: Tidak dapat menyalin Nilai Opsi ke Nama Opsi yang sama ("%2$s" ID#%1$u ke "%4$s" ID#%3$u)!');
define('ERROR_OPTION_VALUES_NONE', 'Kesalahan: Nama Opsi "%2$s" ID#%1$u tidak memiliki Nilai Opsi yang ditentukan (tidak ada yang akan disalin)!');
