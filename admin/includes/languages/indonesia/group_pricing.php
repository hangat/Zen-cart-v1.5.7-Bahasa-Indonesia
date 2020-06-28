<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//

define('HEADING_TITLE', 'Kelompok Harga');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Nama Kelompok');
define('TABLE_HEADING_GROUP_AMOUNT', '% Diskon');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Kelompok Harga Baru');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Edit Kelompok Harga');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Hapus Kelompok Harga');

define('TEXT_NEW_INTRO', 'Silakan ketikkan informasi untuk kelompok yang baru');
define('TEXT_EDIT_INTRO', 'Silakan lakukan perubahan yang diinginkan');
define('TEXT_DELETE_INTRO', 'Anda yakin ingin menghapus kelompok ini?');
define('TEXT_DELETE_PRICING_GROUP', 'Hapus Kelompok Harga');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>PERINGATAN:</b> Terdapat %s pelanggan yang masih tertaut kepada kategori ini!');

define('TEXT_GROUP_PRICING_NAME', 'Nama Kelompok: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Persentase Diskon: ');
define('TEXT_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_LAST_MODIFIED', 'Tanggal Dimodifikasi:');
define('TEXT_CUSTOMERS', 'Pelanggan dalam Kelompok:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','KESALAHAN: Terdapat pelanggan dalam kelompok tersebut. Silakan konfirmasi bahwa Anda ingin untuk menghapus semua anggota dari kelompok tersebut dan menghapusnya.');
define('ERROR_MODULE_NOT_CONFIGURED','CATATAN: Anda memiliki definisi-definisi kelompok harga, tetapi Anda tidak mengaktifkan modul kelompok-harga Total Pesanan.<br />Silakan pergi ke Admin->Modul->Total Pesanan->Diskon Anggota (ot_group_pricing) dan pasang/konfigurasikan modulnya.');

?>