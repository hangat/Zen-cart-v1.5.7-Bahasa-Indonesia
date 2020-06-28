<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jul 27 Modified in v1.5.7 $
 */

define('TEXT_MAIN','Ini adalah pernyataan define utama untuk halaman untuk bahasa Inggris ketika tidak ada file template yang ditentukan. Terletak di: <strong>/includes/languages/english/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Selamat Datang <span class="greetUser">Tamu!</span> Apakah Anda ingin <a href="%s"> masuk sendiri</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Selamat datang, silakan nikmati showcase online kami.');
}

define('TEXT_GREETING_PERSONAL', 'Apakah Anda ingin melihat <a href="%s"> penambahan terbaru kami</a>?');

define('TEXT_INFORMATION', 'Tentukan salinan halaman Indeks utama Anda di sini.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Produk yang Tersedia');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_PRODUCTS', 'Nama Produk');
  define('TABLE_HEADING_MANUFACTURER', 'Pabrikan');
  define('TABLE_HEADING_PRICE', 'Harga');
  define('TABLE_HEADING_WEIGHT', 'Berat');
  define('TABLE_HEADING_BUY_NOW', 'Beli Sekarang');
  define('TEXT_NO_PRODUCTS', 'Tidak ada produk yang tercantum dalam kategori ini.');
  define('TEXT_NO_PRODUCTS2', 'Tidak ada produk yang tersedia dari produsen ini.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Jumlah produk: ');
  define('TEXT_SHOW', 'Saring Hasil berdasarkan:');
  define('TEXT_BUY', 'Beli 1 ');
  define('TEXT_NOW', ' sekarang');
  define('TEXT_ALL_CATEGORIES', 'Semua Kategori');
  define('TEXT_ALL_MANUFACTURERS', 'Semua Pabrikan');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Selamat! Anda telah berhasil menginstal Zen Cart Anda &reg; Solusi E-Commerce.');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Selamat! Anda telah berhasil menginstal Zen Cart Anda&reg; Solusi E-Commerce.'); 
}
