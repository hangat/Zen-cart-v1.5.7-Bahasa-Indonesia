<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Manajer Harga Produk');
define('HEADING_TITLE_PRODUCT_SELECT','Silakan pilih Kategori dengan Produk untuk menampilkan Informasi Harga ...');

define('TABLE_HEADING_PRODUCTS', 'Produk');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Harga Produk / Khusus / Penjualan');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Persentase');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tersedia');
define('TABLE_HEADING_EXPIRES_DATE','Kedaluwarsa');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_PRODUCT_INFO', 'Info Produk:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Info Harga Product:');
define('TEXT_PRICE', 'Harga');
define('TEXT_PRICE_NET', 'Harga (Net)');
define('TEXT_PRICE_GROSS', 'Harga (Kotor)');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Tanggal Tersedia:');
define('TEXT_PRODUCTS_STATUS', 'Status Produk:');
define('TEXT_PRODUCT_AVAILABLE', 'Aktif');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Tidak Aktif');


define('TEXT_PRODUCT_INFO_NONE', 'Silakan pilih Produk dari atas ...');
  define('TEXT_PRODUCT_IS_FREE','Produk Gratis:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />* Produk ditandai GRATIS');
  define('TEXT_PRODUCT_IS_CALL','Hubungi untuk mengetahui harga:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />* Produk ditandai PANGGILAN UNTUK HARGA');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Harga berdasarkan Atribut:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ya');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Tidak');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />* Harga tampilan akan termasuk harga atribut grup terendah plus harga');
  define('TEXT_PRODUCTS_MIXED','Qty Min / Unit Campuran:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'Diskon Qty Berlaku untuk Atribut Campuran');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Qty Min:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Jumlah Unit:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Qty Max:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= Tak terbatas<br />1= Tidak Ada Kuantitas Kotak / Nilai Maks');

define('TEXT_FEATURED_PRODUCT_INFO', 'Info Produk Unggulan:');
define('TEXT_FEATURED_PRODUCT', 'Produk:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Tanggal Kedaluwarsa:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Tanggal Tersedia:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Status Unggulan:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Aktif');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Tidak Aktif');
define('TEXT_FEATURED_DISABLED', '<strong>CATATAN: Info Produk Pilihan saat ini dinonaktifkan, kedaluwarsa, atau belum aktif</strong>');
define('TEXT_FEATURED_CONFIRM_DELETE', 'Harap konfirmasi bahwa Anda ingin menghapus status Unggulan yang terkait dengan produk ini');

define('TEXT_SPECIALS_PRODUCT', 'Produk:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Harga spesial:');
define('TEXT_SPECIALS_SPECIAL_PRICE_NET', 'Harga spesial: (Bersih)');
define('TEXT_SPECIALS_SPECIAL_PRICE_GROSS', 'Harga spesial: (Kotor)');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Tanggal Kedaluwarsa:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Tanggal Tersedia:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Catatan Spesial:</b><ul><li>Anda dapat memasukkan persentase untuk dikurangkan di bidang Harga Spesial, misalnya: <b>20%</b></li><li>Jika Anda memasukkan harga baru, pemisah desimal harus \'.\' (titik desimal), contoh: <b>49.99</b></li><li>Biarkan tanggal kedaluwarsa kosong tanpa kedaluwarsa</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Info Harga Spesial:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Status Spesial:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Aktif');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Tidak Aktif');
define('TEXT_SPECIALS_NO_GIFTS','Tidak ada Spesial di Kupon Hadiah');
define('TEXT_SPECIAL_DISABLED', '<strong>CATATAN: Info Produk Khusus saat ini dinonaktifkan, kedaluwarsa, atau belum aktif</strong>');
define('TEXT_SPECIALS_CONFIRM_DELETE', 'Harap konfirmasi bahwa Anda ingin menghapus Special yang terkait dengan produk ini');

define('TEXT_INFO_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_INFO_LAST_MODIFIED', 'Terakhir diubah:');
define('TEXT_INFO_NEW_PRICE', 'Harga Baru:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Harga asli:');
define('TEXT_INFO_STATUS_CHANGE', 'Perubahan Status:');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Hapus Unggulan');
define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus produk unggulan?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Tetapkan Pengaturan Atribut lalu tekan Sisipkan untuk menerapkan</strong>');
  define('TEXT_PRODUCTS_PRICE', 'Harga produk: ');
  define('TEXT_FREE', 'GRATIS');
  define('TEXT_CALL_FOR_PRICE', 'Hubungi untuk mengetahui harga');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Menambahkan ' . DISCOUNT_QTY_ADD . ' Diskon Qty Kosong:');
define('TEXT_BLANKS_INFO','Semua 0 Diskon Jumlah akan dihapus ketika Diperbarui');
define('TEXT_INFO_NO_DISCOUNTS', 'Tidak ada Diskon Jumlah yang telah ditentukan');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Tingkat Diskon');
define('TEXT_PRODUCTS_DISCOUNT','Diskon');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Jumlah minimum');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Nilai Diskon');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Hitung Harga:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Harga tambahan:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Hitung <br />Harga: &nbsp; Pajak:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Harga<br />tambahan: &nbsp; Pajak:');

define('TEXT_DISCOUNT_TYPE_INFO', 'Info Diskon Produk');
define('TEXT_DISCOUNT_TYPE','Jenis diskon:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Diskon Harga dari:');

define('DISCOUNT_TYPE_DROPDOWN_0','Tidak ada');
define('DISCOUNT_TYPE_DROPDOWN_1','Persentase');
define('DISCOUNT_TYPE_DROPDOWN_2','Harga sebenarnya');
define('DISCOUNT_TYPE_DROPDOWN_3','Jumlah off');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Harga');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Spesial');

define('TEXT_UPDATE_COMMIT','Perbarui dan Lakukan semua perubahan dari tampilan layar saat ini');

define('TEXT_PRODUCTS_TAX_CLASS', 'Kelas Pajak:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Peringatan:</strong> ID# Kategori Master Produk %s tidak cocok dengan ID# Kategori Saat Ini %s dan Produk Tidak Tertaut!');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Perbarui ID# Kategori Induk %s untuk mencocokkan ID# Kategori Saat Ini %s');

define('PRODUCT_WARNING_UPDATE', 'Harap buat perubahan apa pun lalu tekan Perbarui untuk menyimpan');
define('PRODUCT_UPDATE_SUCCESS', 'Pembaruan Perubahan Produk yang Berhasil!');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Perubahan dibatalkan dan tidak disimpan ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Klik untuk mulai Mengedit ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Hanya Pratinjau ... Status Harga Saat Ini ... Hanya Pratinjau');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Edit Informasi Produk kemudian Perbarui untuk menyimpan</strong>');
define('BUTTON_ADDITIONAL_ACTIONS', 'Tindakan tambahan');