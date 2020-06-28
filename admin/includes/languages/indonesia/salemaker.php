<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: salemaker.php 6369 2007-05-25 03:03:42Z ajeh $
//

define('HEADING_TITLE', 'Pembuat Obral');
define('TABLE_HEADING_SALE_NAME', 'Nama Obral');
define('TABLE_HEADING_SALE_DEDUCTION', 'Pemotongan');
define('TABLE_HEADING_SALE_DATE_START', 'Tanggal Mulai');
define('TABLE_HEADING_SALE_DATE_END', 'Tanggal Akhir');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TEXT_SALEMAKER_NAME', 'Nama Obral:');
define('TEXT_SALEMAKER_DEDUCTION', 'Pemotongan:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipe:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Rentang Harga Produk:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sampai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Jika Produk Spesial:');
define('TEXT_SALEMAKER_DATE_START', 'Tanggal Mulai:');
define('TEXT_SALEMAKER_DATE_END', 'Tanggal Akhir:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Atau</b> beri tanda centang pada kategori-kategori yang mana obral ini akan dikenakan:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Klik disini untuk Tips Pemakaian Salemaker.</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Segera');
define('TEXT_SALEMAKER_NEVER', 'Tidak Pernah');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Centang kotak ini jika Anda ingin penjualan diterapkan ke <b> semua produk</b>:');
define('TEXT_SALEMAKER_TOP', 'Seluruh katalog');
define('TEXT_INFO_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_INFO_DATE_MODIFIED', 'Terakhir Dimodifikasi:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Perubahan Status Terakhir:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Persyaratan Spesial:');
define('TEXT_INFO_DEDUCTION', 'Pemotongan:');
define('TEXT_INFO_PRICERANGE_FROM', 'Rentang Harga:');
define('TEXT_INFO_PRICERANGE_TO', ' sampai ');
define('TEXT_INFO_DATE_START', 'Mulai:');
define('TEXT_INFO_DATE_END', 'Kadaluarsa:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Abaikan Harga Spesial - Kenakan ke Harga Produk dan Gantikan Spesial');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Abaikan Ketentuan Obral - Tidak Ada Obral yang Dikenakan Jika Harga Spesial Ada');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Terapkan SaleDeduction untuk Harga Spesial - Jika Tidak, Terapkan ke Harga');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Jumlah dikurangi');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Persen');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Harga Baru');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Salin Obral');
define('TEXT_INFO_COPY_INTRO', 'Ketikkan nama yang baru untuk salinan dari<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Hapus Obral');
define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus obral ini secara permanen?');
define('TEXT_MORE_INFO', '(Info Lebih Lanjut)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Peringatan : %s obral telah menyertakan kategori ini');
