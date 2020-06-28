<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Mar 08 Modified in v1.5.7 $
 */


define('HEADING_TITLE', 'Spesial');

define('TABLE_HEADING_PRODUCTS', 'Produk');
define('TABLE_HEADING_STOCK', 'Stok');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produk Harga/Spesial/Obral');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tersedia');
define('TABLE_HEADING_EXPIRES_DATE','Kadaluarsa');
define('TABLE_HEADING_STATUS', 'Status Spesial');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TEXT_ADD_SPECIAL_SELECT', 'Tambahkan Khusus dengan Pilihan');
define('TEXT_ADD_SPECIAL_PID', 'Tambahkan Khusus oleh ID Produk');
define('TEXT_SEARCH_SPECIALS', 'Cari Spesial saat ini');
define('TEXT_SPECIAL_ACTIVE', 'Harga Khusus Aktif');
define('TEXT_SPECIAL_INACTIVE', 'Harga Khusus Tidak Aktif');
define('TEXT_SPECIAL_STATUS_BY_DATE', 'Status ditetapkan oleh tanggal');

define('TEXT_SPECIALS_PRODUCT', 'Produk:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Harga Spesial:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Tanggal Tersedia:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Tanggal Kadaluarsa:');

define('TEXT_INFO_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_INFO_LAST_MODIFIED', 'Terakhir Dimdofikasi:');
define('TEXT_INFO_NEW_PRICE', 'Harga Baru:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Harga Awal:');
define('TEXT_INFO_DISPLAY_PRICE', 'Harga yang Ditampilkan:');
define('TEXT_INFO_STATUS_CHANGED', 'Status Berubah:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Hapus Spesial');
define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus Harga Khusus untuk produk ini?');

define('WARNING_SPECIALS_PRE_ADD_PID_EMPTY', 'Peringatan: Tidak ada ID produk yang ditentukan.');
define('WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE', 'Peringatan: ID#%u produk sudah Special.');
define('WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST', 'Peringatan: ID#%u produk tidak ada.');
if (!defined('TEXT_GV_NAME')) {
    require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
}
define('WARNING_SPECIALS_PRE_ADD_PID_GIFT', 'Peringatan: ID#%u produk adalah ' . TEXT_GV_NAME . '.');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Menambahkan Produk Spesial baru secara manual menggunakan ID Produk');
define('TEXT_INFO_PRE_ADD_INTRO', 'Pada database yang besar, Anda dapt secara manual menambahkan sebuah Produk Spesial menggunakan ID Produknya<br /><br />Hal ini sangat baik sekali digunakan apabila halaman membutuhkan waktu terlalu lama untuk ditampilkan dan apabila memilih sebuah Produk menjadi sulit karena terlalu banyak produk yang ada.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Masukkan ID Produk: ');

define('TEXT_SPECIALS_PRICE_NOTES', '<b>Catatan:</b><ul><li>Harga Khusus dapat berupa harga (tidak termasuk pajak). Pemisah desimal harus berupa "." (titik desimal), mis.:<b>49.99</b>.Diskon persentase yang dihitung ditampilkan di sebelah harga baru produk dalam katalog.</li><li>Harga Khusus dapat berupa persentase diskon, mis.:<b>20%</b>.</li><li>Tanggal Mulai / Akhir tidak wajib. Anda dapat membiarkan tanggal kedaluwarsa kosong tanpa kedaluwarsa.</li><li>Ketika tanggal ditetapkan, status Harga Khusus diaktifkan / dinonaktifkan secara otomatis.</li><li>' . TEXT_INFO_PRE_ADD_INTRO . '</li></ul>');
