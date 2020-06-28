<?php

/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jul 27 Modified in v1.5.7 $
 */

define('NAVBAR_TITLE_1', 'Pencarian Lanjutan');
define('NAVBAR_TITLE_2', 'Hasil Pencarian');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Hasil Pencarian');

define('HEADING_SEARCH_CRITERIA', 'Kriteria Pencarian');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Cari dalam Deskripsi Produk');
define('ENTRY_CATEGORIES', 'Kategori:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Termasuk Subkategori');
define('ENTRY_MANUFACTURERS', 'Produsen:');
define('ENTRY_PRICE_FROM', 'Mulai Harga:');
define('ENTRY_PRICE_TO', 'Sampai Harga:');
define('ENTRY_DATE_FROM', 'Dari Tanggal:');
define('ENTRY_DATE_TO', 'Sampai Tanggal:');

define('TEXT_SEARCH_HELP_LINK', 'Bantuan Pencarian [?]');

define('TEXT_ALL_CATEGORIES', 'Semua Kategori');
define('TEXT_ALL_MANUFACTURERS', 'Semua Produsen');

define('HEADING_SEARCH_HELP', 'Bantuan Pencarian');
define('TEXT_SEARCH_HELP', 'Kata Kunci dapat dipisahkan dengan kata AND dan/atau OR untuk mendapatkan hasil pencarian yang lebih baik.<br /><br />Misalnya, Microsoft AND mouse akan menghasilkan sebuah hasil pencarian yang berisi kedua kata tersebut. Akan tetapi jika menggunakan OR, misalnya mouse OR keyboard, maka pencarian akan mengembalikan sebuah hasil yang berisi salah satu atau kedua kata tersebut.<br /><br />Untuk mendapatkan hasil pencarian yang sama persis dengan Kata Kunci maka Anda dapat menggunakan Kata Kunci yang diapit oleh tanda petik ganda.<br /><br />Misalnya, "notebook computer" akan menghasilkan sebuah hasil pencarian yang sesuai dengan kata yang sama persis.<br /><br />Tanda kurung dapat digunakan untuk mendapatkan hasil pencarian yang lebih baik.<br /><br />Misalnya, Microsoft dan (keyboard atau mouse atau "visual basic").');
define('TEXT_CLOSE_WINDOW', 'Tutup Jendela [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_PRODUCTS', 'Nama Produk');
define('TABLE_HEADING_MANUFACTURER', 'Produsen');
define('TABLE_HEADING_PRICE', 'Harga');
define('TABLE_HEADING_WEIGHT', 'Berat');
define('TABLE_HEADING_BUY_NOW', 'Beli Sekarang');

define('TEXT_NO_PRODUCTS', 'Tidak ada produk yang sesuai dengan kriteria pencarian.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Setidaknya satu buah kotak input dalam formulir pencarian harus diisi.');
define('ERROR_INVALID_FROM_DATE', 'Dari Tanggal Tidak valid.');
define('ERROR_INVALID_TO_DATE', 'Sampai Tanggal tidak valid.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Sampai Tanggal harus lebih besar atau sama dengan Dari Tanggal.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Mulai Harga harus berupa angka.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Sampai Harga harus berupa angka.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Sampai Harga  harus lebih besar atau sama dengan Mulai Harga.');
define('ERROR_INVALID_KEYWORDS', 'Kata Kunci tidak valid.');
