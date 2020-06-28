<?php

/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
define('HEADING_TITLE', 'Kategori / Produk');
define('HEADING_TITLE_GOTO', 'Pergi Ke:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategori / Produk');

define('TABLE_HEADING_PRICE', 'Harga/Spesial/Obral');
define('TABLE_HEADING_QUANTITY', 'Jumlah');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Urut');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' dari ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' Aktif ');
define('TEXT_CATEGORIES', 'Kategori:');
define('TEXT_PRODUCTS', 'Produk:');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Hapus Kategori');
define('TEXT_DELETE_CATEGORY_INTRO', 'Anda yakin ingin menghapus kategori ini?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Peringatan:</strong> Produk terkait yang Kategori Induk  terhapus tidak akan memiliki harga yang sesuai. Anda seharusnya menyakinkan bahwa ketika menghapus Kategori yang berisi Produk terkait yang anda atur ulang ID Produk Kategori Induk ke kategori lain sebelum menghapus Kategori');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Pindah Kategori');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Silahkan pilih kategori mana yang anda inginkan <b>%s</b> untuk di huni');
define('TEXT_MOVE_PRODUCT', 'Pindah produk<br><strong>ID#%1$u %2$s</strong><br>dari kategori saat ini<br><strong>ID#%3$u %4$s</strong><br>ke:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Hapus Produk');
define('TEXT_DELETE_PRODUCT_INTRO', 'Anda yakin ingin menghapus permanen produk ini?<br /><br /><strong>Peringatan:</strong> Pada Produk Terkait<br />1 Yakinkan Kategori Induk telah berubah jika anda menghapus Produk dari Induk Kategori<br />2 Centang checkbox untuk Kategori pada asal Produk Hapus');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Pindah Produk');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Sillahkan Pilih kategori yang anda inginkan <b>%s</b> untuk di huni');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Katagori Saat ini: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Salin Ke');
define('TEXT_INFO_CURRENT_PRODUCT', 'Produk Saat ini: ');
define('TEXT_HOW_TO_COPY', 'Metode Salin:');
define('TEXT_COPY_AS_LINK','Produk terkait');
define('TEXT_COPY_AS_DUPLICATE','Duplikat produk');
define('TEXT_COPY_METATAGS','Salin Metatag untuk Duplikat?');
define('TEXT_COPY_LINKED_CATEGORIES','Saling Kategori Terkait ke Duplikat?');
define('TEXT_COPY_EDIT_DUPLICATE', 'Buka Produk Duplikat untuk di edit');

//used in copy_product_confirm
define('TEXT_COPY_AS_DUPLICATE_ATTRIBUTES', 'Atribut di copy dari Produk ID#%u ke Duplikat Produk ID#%u');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Metatag untuk Bahasa ID#%u disalin dari produk ID#%u untuk duplikat Produk ID#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'Kategori Terkait ID#%u disalin dari Produk ID#%u untuk duplikat Produk ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'Diskon disalin dari Produk ID#%u ke duplikat Produk ID#%u');
define('TEXT_DUPLICATE_IDENTIFIER', '[DUPLICATE]');

define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Perubahan atribut untuk ID# Produk ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Atribut fitur Untuk:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Download: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Hapus <strong>SEMUA</strong> Produk Atribut untuk:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Salin Atribut ke <strong>product</strong> yang lain dari:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Salin Atribut <strong>Kategori</strong> yang lain dari:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>Bagaimana seharusnya atribut produk tersedia ditangani?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', 'Pertama <strong>Hapus</strong>, kemudian salin atribut baru');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Perbarui</strong> dengan pengaturan/harga baru, kemudian tambah lainnya');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Abaikan</strong> dan hanya tambah atribut baru');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES', 'Salin Atribut Produk untuk Duplikat?');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'Hanya digunakan untuk duplikat produk dengan Kuantiti Diskon ...');
define('TEXT_COPY_DISCOUNTS', 'Salin Produk Kuantiti Diskon ke Duplikat?');

// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Ubah Status Kategori untuk:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Ubah status <strong>Kategori ini</strong> ke: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'Tidak Aktif');
define('TEXT_CATEGORIES_STATUS_ON', 'Aktif');
define('TEXT_PRODUCTS_STATUS_INFO', 'Ubah SELURUH status produk yang termasuk ke:');
define('TEXT_PRODUCTS_STATUS_OFF', 'Tidak Aktif');
define('TEXT_PRODUCTS_STATUS_ON', 'Aktif');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Tidak Berubah');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>PERINGATAN ...</strong><br />Catatan: Dengan menon-aktifkan sebuah kategori maka juga akan menon-aktifkan SEMUA produk dalam kategori ini. Produk tertaut yang terletak dalam kategori ini yang juga termasuk dalam kategori lain juga akan dinon-aktifkan.');
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Ubah SEMUA status sub kategori ke:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Tidak Aktif');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Aktif');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Tidak Berubah');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'PERINGATAN: Anda telah memiliki produk dalam Tingkat Kategori Teratas. Ini akan menyebabkan harga tidak bekerja semestinya dalam Katalog. Produk yang ada: ');

define('TEXT_COPY_MEDIA_MANAGER', 'Salin media?');
