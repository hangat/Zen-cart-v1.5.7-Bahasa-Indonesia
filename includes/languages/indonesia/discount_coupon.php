<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Kupon Diskon');
define('HEADING_TITLE', 'Kupon Diskon');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> bukanlah sebuah Kode Penebusan Kupon yang valid. Silakan Anda coba mengetikkannya sekali lagi.');

define('TEXT_CLOSE_WINDOW', 'Tutup Jendela [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Kode Penebusan Kupon Diskon yang telah Anda berikan adalah untuk ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Anda perlu menyiapkan %s untuk menggunakan kupon ini, pada kualifikasi produk.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Penawaran Diskon:</span> %s</p><p class="smallText">Sejumlah pembatasan-pembatasan lain yang tertentu mungkin berlaku. Silakan lihat dibawah ini untuk detail lainnya.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Kupon ini berlaku antara tanggal %s sampai tanggal %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Pembatasan-pembatasan Kupon Diskon</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Pembatasan-pembatasan Kategori:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Pembatasan-pembatasan Produk:</p>');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Kupon ini memiliki Pembatasan Produk tertentu.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Kupon ini valid untuk semua kategori.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Kupon ini valid untuk semua produk.</p>');
define('TEXT_NO_PROD_SALES', '<p>Kupon ini valid untuk produk Obral.</p>');
define('TEXT_CAT_ALLOWED', ' (Valid untuk kategori ini)');
define('TEXT_CAT_DENIED', ' (Tidak diizinkan pada kategori ini)');
define('TEXT_PROD_ALLOWED', ' (Valid untuk produk ini)');
define('TEXT_PROD_DENIED', ' (Tidak dizinkan pada produk ini)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Kupon Diskon tidak dapat digunakan untuk membeli ' . TEXT_GV_NAMES . '. Anda hanya dapat menggunakan 1 kupon untuk tiap pesanan.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Lihat Kupon Diskon ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Kode Anda: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Berlaku Pembatasan-pembatasan Alamat Penagihan.');
