<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jul 27 Modified in v1.5.7 $
 */

define('TEXT_MAIN','Ini adalah pernyataan penjelasan utama untuk halaman Bahasa Indonesia yang digunakan apabila berkas template yang ditetapkan tidak ada. Halaman ini terletak di: <strong>/includes/languages/indonesia/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Selamat Datang <span class="greetUser">Tamu!</span> Apakah Anda ingin <a href="%s">login</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Selamat Datang, selamat menikmati pameran produk online kami.');
}

define('TEXT_GREETING_PERSONAL', 'Hallo <span class="greetUser">%s</span>! Apakah Anda ingin melihat <a href="%s">produk-produk terbaru kami</a>?');

define('TEXT_INFORMATION', 'Letakkan salinan halaman Indeks utama Anda disini.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Produk yang Tersedia');
  define('TABLE_HEADING_IMAGE', 'Gambar Produk');
  define('TABLE_HEADING_PRODUCTS', 'Nama Produk');
  define('TABLE_HEADING_MANUFACTURER', 'Produsen');
  define('TABLE_HEADING_PRICE', 'Harga');
  define('TABLE_HEADING_WEIGHT', 'Berat');
  define('TABLE_HEADING_BUY_NOW', 'Beli Sekarang');
  define('TEXT_NO_PRODUCTS', 'Tidak ada produk yang termasuk ke dalam kategori ini.');
  define('TEXT_NO_PRODUCTS2', 'Tidak ada produk yang tersedia dari produsen ini.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Jumlah Produk: ');
  define('TEXT_SHOW', 'Saring Hasil Berdasarkan:');
  define('TEXT_BUY', 'Beli 1 \'');
  define('TEXT_NOW', '\' sekarang');
  define('TEXT_ALL_CATEGORIES', 'Semua Kategori');
  define('TEXT_ALL_MANUFACTURERS', 'Semua Produsen');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Selamat! Anda telah berhasil menginstal Zen Cart&trade; E-Commerce Solution Anda.');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Selamat! Anda telah berhasil menginstal Zen Cart&trade; E-Commerce Solution Anda.');
}
