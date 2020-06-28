<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
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
//  $Id: media_manager.php 4873 2006-11-02 09:12:46Z drbyte $
//

define('HEADING_TITLE_MEDIA_MANAGER', 'Manajer Media');

define('TABLE_HEADING_MEDIA', 'Nama Koleksi');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TEXT_HEADING_NEW_MEDIA_COLLECTION', 'Koleksi Media Baru');
define('TEXT_NEW_INTRO', 'Silakan ketikkan detail dari koleksi media di bawah');
define('TEXT_MEDIA_COLLECTION_NAME', 'Nama Koleksi Media');
define('TEXT_MEDIA_EDIT_INSTRUCTIONS', 'Gunakan bagian di atas untuk mengubah Nama Koleksi Media, kemudian klik pada tombol simpan.<br /><br />
                                        Gunakan pilihan dibawah untuk menambahkan atau menghapus klip media dari koleksi media.');
define('TEXT_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_LAST_MODIFIED', 'Terakhir Dimodifikasi:');
define('TEXT_PRODUCTS', 'Produk Tertaut:');
define('TEXT_CLIPS', 'Klip Tertaut:');
define('TEXT_NO_PRODUCTS', 'Tidak ada Produk dalam kategori ini');
define('TEXT_HEADING_EDIT_MEDIA_COLLECTION', 'Edit Koleksi Media');
define('TEXT_EDIT_INTRO', 'Silakan ubah detail dari koleksi media yang baru di bawah');
define('TEXT_HEADING_DELETE_MEDIA_COLLECTION', 'Hapus Koleksi Media');
define('TEXT_DELETE_INTRO', 'Apakah Anda ingin menghapus koleksi media ini?');
  define('TEXT_DISPLAY_NUMBER_OF_MEDIA', 'Menampilkan koleksi media <strong>%d</strong> sampai <strong>%d</strong> (dari <strong>%d</strong> Koleksi Media)');
define('TEXT_ADD_MEDIA_CLIP', 'Tambahkan Klip Media');
define('TEXT_MEDIA_CLIP_DIR', 'Upload ke Direktori Media');
define('TEXT_MEDIA_CLIP_TYPE', 'Tipe Klip Media');
define('TEXT_HEADING_ASSIGN_MEDIA_COLLECTION', 'Tetapkan Koleksi Media ke Produk');
define('TEXT_PRODUCTS_INTRO', 'Anda dapat menetapkan dan menghapus Koleksi Media ini untuk produk-produk menggunakan formulir dibawah.');
define('IMAGE_PRODUCTS', 'Tetapkan ke Produk');
define('TEXT_DELETE_PRODUCTS', 'Hapus Koleksi Media ini dan semua  yang tertaut kepadanya?');
define('TEXT_DELETE_WARNING_PRODUCTS', '<strong>PERINGATAN:</strong> Terdapat %s barang yang masih tertaut ke Koleksi Media ini!');
define('TEXT_WARNING_FOLDER_UNWRITABLE', 'CATATAN: Direktori media ' . DIR_FS_CATALOG_MEDIA . ' tidak dapat ditulisi. Tidak dapat upload berkas.');

define('ERROR_UNKNOWN_DATA', 'KESALAHAN: Data yang diberikan tidak diketahui ... operasi dibatalkan');
define('TEXT_ADD','Tambah');


?>