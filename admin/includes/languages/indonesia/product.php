<?php

/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Mar 30 Modified in v1.5.7 $
 */


define('TEXT_PRODUCTS_STATUS', 'Status Produk:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produk adalah Virtual:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Selalu Pengiriman Gratis:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Kotak Kuantitas Produk Menunjukkan:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Tanggal tersedia:');
define('TEXT_PRODUCT_AVAILABLE', 'Diaktifkan');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Dinonaktifkan');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ya, Abaikan Alamat Pengiriman');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Tidak, Diperlukan Alamat Pengiriman');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ya, Selalu Pengiriman Gratis');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Tidak, Aturan Pengiriman Normal');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Spesial, Product / Download Combo Membutuhkan Alamat Pengiriman');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ya, Tampilkan Kotak Kuantitas');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Tidak, Jangan tampilkan Kotak Kuantitas');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT', 'Peringatan: Tidak menampilkan Kotak Kuantitas, Default ke Qty 1');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW', 'Peringatan: Tidak menampilkan Kotak Kuantitas, Default ke Qty 1');

define('TEXT_PRODUCTS_MANUFACTURER', 'Produsen produk:');
define('TEXT_PRODUCTS_NAME', 'Nama produk:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Deskripsi produk:');
define('TEXT_PRODUCTS_QUANTITY', 'Kuantitas produk:');
define('TEXT_PRODUCTS_IMAGE', 'Gambar produk:');
define('TEXT_EDIT_PRODUCTS_IMAGE', 'Edit Gambar Produk:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Unggah ke direktori:');
define('TEXT_PRODUCTS_URL', 'URL produk:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(tanpa http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Harga Produk (Net):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Harga Produk (Kotor):');
define('TEXT_PRODUCTS_WEIGHT', 'Berat Pengiriman produk:');

define('TEXT_PRODUCT_IS_FREE', 'Produk Gratis:');
define('TEXT_PRODUCTS_IS_FREE_PREVIEW', '* Produk ditandai sebagai GRATIS');
define('TEXT_PRODUCTS_IS_FREE_EDIT', '* Produk ditandai sebagai GRATIS');

define('TEXT_PRODUCT_IS_CALL', 'Produk adalah Panggilan untuk Harga:');
define('TEXT_PRODUCTS_IS_CALL_PREVIEW', '* Produk ditandai sebagai PANGGILAN UNTUK HARGA');
define('TEXT_PRODUCTS_IS_CALL_EDIT', '*Product is marked as CALL FOR PRICE');

define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES', 'Harga Produk berdasarkan Atribut:');
define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE', 'Ya');
define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE', 'Tidak');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW', '* Harga tampilan akan termasuk harga atribut grup terendah plus harga');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT', '* Harga tampilan akan termasuk harga atribut grup terendah plus harga');

define('TEXT_PRODUCTS_TAX_CLASS', 'Kelas Pajak:');

define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL', 'Jumlah Produk Minimum:');
define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL', 'Unit Jumlah Produk:');
define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL', 'Jumlah Produk Maksimum:');
define('TEXT_PRODUCTS_QTY_MIN_UNITS_PREVIEW', 'Peringatan: Minimum kurang dari Satuan');
define('TEXT_PRODUCTS_QTY_MIN_UNITS_MISMATCH_PREVIEW', 'Peringatan: Minimum bukan kelipatan dari Satuan');

define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT', '0 = Tak terbatas, 1 = Tidak Ada Kotak Jumlah');

define('TEXT_PRODUCTS_MIXED', 'Jumlah Produk / Campuran Unit:');

define('TEXT_PRODUCTS_SORT_ORDER', 'Urutan:');

define('TEXT_PRODUCT_MORE_INFORMATION', 'Untuk informasi lebih lanjut, silakan kunjungi produk ini <a href="http://%s" target="blank">halaman web</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Produk ini ditambahkan ke katalog kami di %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Produk ini akan tersedia %s.');

// meta tags
define('TEXT_META_TAG_TITLE_INCLUDES', '<strong>Tandai Apa Yang Harus Dimiliki Judul Tag Meta Produk:</strong><br><span class="alert">CATATAN: Sakelar ini tidak berpengaruh jika tidak ada Kata Kunci atau teks deskripsi yang dimasukkan di bawah ini.</span>');
define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS', '<strong>Nama Produk:</strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS', '<strong>Judul:</strong>');
define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS', '<strong>Model:</strong>');
define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS', '<strong>Harga:</strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS', '<strong>Judul/Tagline:</strong>');
define('TEXT_META_TAGS_TITLE', '<strong>Meta Tag Judul:</strong><br><span class="alert">CATATAN: Judul Metatags tidak berpengaruh jika tidak ada Kata Kunci atau teks deskripsi yang dimasukkan di bawah ini.</span>');
define('TEXT_META_TAGS_KEYWORDS', '<strong>Kata Kunci Meta Tag:</strong>');
define('TEXT_META_TAGS_DESCRIPTION', '<strong>Deskripsi Meta Tag:</strong>');
define('TEXT_META_EXCLUDED', '<span class="alert">TERKECUALI</span>');
define('TEXT_TITLE_PLUS_TAGLINE', 'Judul + Tagline Toko'); // this refers to whatever rules the storeowner has built into customizing their catalog /includes/modules/meta_tags.php and its lang file.

define('TEXT_PRODUCTS_PRICE_INFO', 'Harga:');
