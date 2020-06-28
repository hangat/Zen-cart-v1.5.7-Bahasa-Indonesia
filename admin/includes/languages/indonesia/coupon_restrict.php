<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2019 Aug 10 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Pembatasan Kupon Diskon Produk/Kategori');
define('HEADING_TITLE_CATEGORY', 'Pembatasan Kategori');
define('HEADING_TITLE_PRODUCT', 'Pembatasan Produk');

define('SUB_HEADING_COUPON_NAME', 'Restrictions for the coupon named &quot;%1$s&quot; [%2$u].');  //-%1$s = coupon-name, %2$u = coupon_id

define('TABLE_HEADING_CATEGORY_ID', 'ID Kategori');
define('TABLE_HEADING_CATEGORY_NAME', 'Nama Kategori');
define('TABLE_HEADING_PRODUCT_NAME', 'Nama Produk');
define('TABLE_HEADING_PRODUCT_ID', 'ID Produk');
define('TABLE_HEADING_RESTRICT', 'Perizinkan');
define('TABLE_HEADING_RESTRICT_REMOVE', 'Hapus');
define('IMAGE_REMOVE', 'Hapus');
define('TEXT_ALL_CATEGORIES', 'Semua Kategori');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Tambah Semua Kategori Produk');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Hapus Semua Kategori Produk');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Untuk Semua Kategori Produk, hanya produk belum diset pembatasan akan ditambahkan.<br />
                    Untuk Hapus Semua Kategori Produk, hanya produk yang diset Deny atau Allow akan dihapus.</strong>');

define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Kategori Tidak Lengkap');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Produk Tidak Lengkap');

define('HEADER_MANUFACTURER_NAME', '<br> -- ATAU -- <br>' . 'Pabrikan: ');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Tambah Semua Produk Pabrikan');
define('TEXT_ALL_MANUFACTURERS_REMOVE', 'Cabut Semua Produk Pabrikan');

define('TABLE_HEADING_STATUS', 'Status');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Atur ulang Filter Kategori dan Pabrikan. Gunakan Filter secara individu.');

define('TEXT_PULLDOWN_ALLOW', 'Izinkan');
define('TEXT_PULLDOWN_DENY', 'Tolak');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Tambah');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Perbarui');
define('TEXT_STATUS_TOGGLE', 'Toggle');
define('TEXT_STATUS_TOGGLE_TITLE', 'Klik disini untuk toggle status perizinan');
define('TEXT_ALLOWED', 'Produk atau kategori di-izin-kan');
define('TEXT_DENIED', 'Produk atau kategori tidak di-izin-kan');

define('TEXT_NO_CATEGORY_RESTRICTIONS', 'Tidak ada perizinan kategori saat ini');
define('TEXT_NO_PRODUCT_RESTRICTIONS', 'Tidak ada perizinan produk saat ini');
