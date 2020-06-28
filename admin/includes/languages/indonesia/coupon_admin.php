<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 30 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Kupon Diskon');
define('HEADING_TITLE_STATUS', 'Status : ');

define('TEXT_COUPON', 'Nama Kupon:');
define('TEXT_COUPON_ALL', 'Semua Kupon');
define('TEXT_COUPON_ACTIVE', 'Kupon yang Aktif');
define('TEXT_COUPON_INACTIVE', 'Kupon yang Tidak Aktif');
define('TEXT_SUBJECT', 'Judul:');
define('TEXT_UNLIMITED', 'Tidak Terbatas');
define('TEXT_FROM', 'Dari:');
define('TEXT_FREE_SHIPPING', 'Pengiriman Gratis');
define('TEXT_MESSAGE', 'Pesan:');
define('TEXT_RICH_TEXT_MESSAGE','Pesan Teks-Kaya:');
define('TEXT_CONFIRM_DELETE', 'Anda yakin ingin menghapus kupon ini?');
define('TEXT_SEE_RESTRICT', 'Berlaku Pembatasan');

define('TEXT_COUPON_ANNOUNCE','Kami dengan senang hati menawarkan kepada Anda sebuah Kupon Toko');

define('TEXT_TO_REDEEM', 'Anda dapat menebus kupon ini selama selesai berbelanja. Ketikkan saja kodenya ke dalam kotak input yang disediakan, dan klik pada tombol tebus.');
define('TEXT_VOUCHER_IS', 'Kode kupon adalah ');
define('TEXT_REMEMBER', 'Jangan sampai kode kupon ini hilang, simpan kode kupon ini di tempat yang aman jadi Anda dapat menikmati keuntungan dari penawaran spesial ini.');
define('TEXT_VISIT', 'Kunjungi kami di %s');
define('TEXT_COUPON_HELP_DATE', '<p><p>Kupon berlaku antara tanggal %s dan %s</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>Kupon berlaku antara tanggal %s dan %s</p></p>');

define('TABLE_HEADING_ACTION', 'Tindakan');

define('CUSTOMER_ID', 'ID Pelanggan');
define('CUSTOMER_NAME', 'Nama Pelanggan');
define('REDEEM_DATE', 'Tanggal Ditebus');
define('IP_ADDRESS', 'Alamat IP');

define('TEXT_REDEMPTIONS', 'Penebusan');
define('TEXT_REDEMPTIONS_TOTAL', 'Dalam Total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Untuk Pelanggan Ini');
define('TEXT_NO_FREE_SHIPPING', 'Tanpa Pengiriman Gratis');

define('NOTICE_EMAIL_SENT_TO', 'Pemberitahuan: E-mail dikirimkan ke: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Kesalahan: Tidak ada pelanggan yang dipilih.');
define('ERROR_NO_SUBJECT', 'Kesalahan: Tidak ada judul yang diketikkan.');

define('COUPON_NAME', 'Nama Kupon');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'Jumlah Kupon');

define('TEXT_COUPON_PRODUCT_COUNT_PER_ORDER', 'Per Order');
define('TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT', 'Per Kualifikasi Item');
define('COUPON_CODE', 'Kode Kupon');
define('COUPON_STARTDATE', 'Tanggal Mulai');
define('COUPON_FINISHDATE', 'Tanggal Berakhir');
define('COUPON_FREE_SHIP', 'Pengiriman Gratis');
define('COUPON_DESC', 'Deskripsi Kupon <br />(Dapat dilihat oleh pelanggan)');
define('COUPON_MIN_ORDER', 'Kupon Pesanan Minimal');

define('COUPON_TOTAL', 'Kupon Minimal dihitung dari: ');
define('TEXT_COUPON_TOTAL_PRODUCTS', 'Produk diperbolehkan');
define('TEXT_COUPON_TOTAL_PRODUCTS_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Berdasarkan pada Total dari Produk yang Dibolehkan sesuai aturan pembatasan)');
define('TEXT_COUPON_TOTAL_ORDER', 'Semua Produk');
define('TEXT_COUPON_TOTAL_ORDER_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Berdasarkan pada Total Pesanan Penuh dari Semua produk bagaimanapun juga aturan kualifikasi kupon)');

define('COUPON_USES_COUPON', 'Penggunaan per Kupon');
define('COUPON_USES_USER', 'Penggunaan per Pelanggan');
define('COUPON_PRODUCTS', 'Daftar Produk Valid');
define('COUPON_CATEGORIES', 'Daftar Kategori Valid');
define('DATE_CREATED', 'Tanggal Dibuat');
define('DATE_MODIFIED', 'Tanggal Dimodifikasi');
define('TEXT_HEADING_NEW_COUPON', 'Buat Kupon Baru');
define('TEXT_NEW_INTRO', 'Silakan ketikkan informasi untuk kupon yang baru.<br />');
define('COUPON_ZONE_RESTRICTION', 'Pembatasan Zona Kupon: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Pembatasan Zona Kupon bersifat opsional.');
define('COUPON_ORDER_LIMIT', 'Pesanan Pelanggan sebelumnya kurang dari: ');
define('COUPON_ORDER_LIMIT_HELP', 'Pelanggan mesti memiliki pesanan sebelumnya kurang dari, biarkan kosong untuk tanpa batasan');

define('COUPON_IS_VALID_FOR_SALES', 'Kupon valid untuk penjualan:');
define('TEXT_COUPON_IS_VALID_FOR_SALES', 'Kupon dibolehkan untuk produk pada Penjualan');
define('TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Kupon dibolehkan untuk produk pada Penjualan atau Spesial');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES', 'Kupon tidak dibolehkan untuk  Produk pada Penjualan atau Spesial');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Kupon tidak valid untuk produk pada Penjualan atau Spesial');


define('ERROR_NO_COUPON_AMOUNT', 'Tidak ada jumlah kupon yang di isi');
define('ERROR_NO_COUPON_NAME', 'Tidak ada nama kupon yang diisid ');
define('ERROR_COUPON_EXISTS', 'Kupon dengan kode tersebut telah ada');


define('COUPON_NAME_HELP', 'Nama singkat untuk kupon');
define('COUPON_AMOUNT_HELP', 'Nilai diskon untuk kupon, bisa merupakan nilai tetap atau tambahkan sebuah tanda % pada bagian akhir untuk menentukan diskon persentase.');
define('COUPON_CODE_HELP', 'Anda dapat mengetikkan kode Anda disini, atau biarkan kosong untuk menggunakan kode yang dibuat secara otomatis.');
define('COUPON_STARTDATE_HELP', 'Tanggal kupon akan mulai berlaku');
define('COUPON_FINISHDATE_HELP', 'Tanggal kadaluarsa kupon');
define('COUPON_FREE_SHIP_HELP', 'Kupon akan memberikan pengiriman gratis pada sebuah pesanan. Harap dicatat. Ini akan mengabaikan angka coupon_amount akan tetapi tetap mematuhi nilai pesanan minimal');
define('COUPON_DESC_HELP', 'Deskripsi kupon untuk pelanggan');
define('COUPON_MIN_ORDER_HELP', 'Nilai jumlah pesanan minimal sebelum kupon ini berlaku');
define('COUPON_TOTAL_HELP', 'Jika anda menentukan pesanan minimal kupon untuk Kupon Diskon ini, anda ingin jumlah Minimal untuk menjadi dasar Produk Dibolehkan untuk pembatasan aturan Kupon atau Total Pesanan Penuh, saat menentukan jika Kupon Pesanan Minimal telah dicapai?<br />CATATAN: Total Pesanan Penuh maksudnya setidaknya 1 dari Pembatasan Kualifikasi Produk harus dalam troli untuk Kupon Diskon bekerja.');
define('COUPON_SALE_HELP', 'Jika anda memilih <i>TIDAK Mengijinkan</i>, produk pada penjualan atau spesial akan tidak di diskon atau kupon pesanan minimal diperhitungkan.');
define('COUPON_USES_COUPON_HELP', 'Jumlah maksimal kupon dapat digunakan, biarkan kosong untuk tidak ada batasan.');
define('COUPON_USES_USER_HELP', 'Jumlah penggunaan kupon yang dapat dilakukan oleh pelanggan, biarkan kosong jika Anda tidak menginginkan batasan.');
define('COUPON_PRODUCTS_HELP', 'Daftar yang dipisahkan oleh koma dari product_id yang mana kupon ini dapat digunakan dengannya. Biarkan kosong jika Anda tidak menginginkan batasan.');
define('COUPON_CATEGORIES_HELP', 'Daftar yang dipisahkan oleh koma dari cpaths yang mana kupon ini dapat digunakan dengannya. Biarkan kosong jika Anda tidak menginginkan batasan.');

define('COUPON_ACTIVE', 'Status');
define('COUPON_START_DATE', 'Mulai');
define('COUPON_EXPIRE_DATE', 'Kadaluarsa');

define('TEXT_INFO_DUPLICATE_MANAGEMENT', '<strong>Manajemen Multi Kupon Diskon</strong><br /><br />Klik pada Kupon Diskon untuk merubah dasar pada <br />atau gunakan Kode Dasar Kupon: <strong>%s</strong>');
define('ERROR_DISCOUNT_COUPON_WELCOME', 'Kupon Diskon TIDAK DAPAT dinon-aktifkan. Kupon Diskon ini adalah Kupon Diskon Selamat Datang<br /><br />Ubah Kupon Diskon Selamat Datang sebelum mencoba untuk menghapusnya. Lihat Admin->Konfigurasi->Kupon VH');
define('SUCCESS_COUPON_DISABLED', 'Berhasil! Kupon Diskon telah dibuat menjadi Tidak Aktif ...');
define('TEXT_COUPON_NEW', 'Gunakan Kode Kupon Diskon BARU:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'PERINGATAN! Kupon sudah ada ... Penyalinan dibatalkan untuk Kode Kupon: ');
define('TEXT_CONFIRM_COPY', 'Anda yakin ingin Menyalin Kupon Diskon ini ke Kupon Diskon lain?');
define('SUCCESS_COUPON_DUPLICATE', 'Berhasil! Kupon Diskon telah disalin ...<br /><br />Pastikan Anda memeriksa Nama dan Tanggal Kupon ...');
define('WARNING_COUPON_DUPLICATE', 'Peringatan! Tidak ada Kupon Diskon telah dibuat! Jumlah Kupon Diskon yang dibuat tidak di defenisikan ... ');

define('TEXT_COUPON_COPY_INFO', 'Salin untuk multi duplikat');
define('TEXT_COUPON_COPY_DUPLICATE', 'Buat Kupon Multi dengan Dasar Kode Kupon dari: ');
define('TEXT_COUPON_COPY_DUPLICATE_CNT', 'Berapa banyak duplikat Kupon Diskon yang ingin anda buat? ');

define('TEXT_CONFIRM_DELETE_DUPLICATE', 'Hapus semuat kupon diskon sesuai berdasarkan kode kupon<br />Contoh: <strong>%s</strong> akan menghapus seluruh Kode Kupon Diskon dimulai dengan: <strong>%s</strong>');
define('TEXT_COUPON_DELETE_DUPLICATE', 'Hapus semua Kupon Diskon yang sesuai berdasarkan kode: ');

define('TEXT_DISCOUNT_COUPON_EMAIL', 'Email Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_CONFIRM_DELETE', 'Konfirmasi Hapus Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE', 'Konfirmasi Mengembalikan Kupon Diskon');

define('TEXT_DISCOUNT_COUPON_EDIT', 'Edit Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_DELETE', 'Hapus Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_RESTORE', 'Kembalikan Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_RESTRICT', 'Batasan Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_REPORT', 'Laporan Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_COPY', 'Salin Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_COPY_MULTIPLE', 'Salin ke Multi Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE', 'Hapus Multi Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE', 'Laporan Multi Kupon Diskon');
define('TEXT_DISCOUNT_COUPON_DOWNLOAD', 'Download Kode Multi Kupon');
define('REDEEM_ORDER_ID', 'Pesanan #');
define('SUCCESS_COUPON_REACTIVATE', 'Berhasil Mengaktifkan Kembali');
define('TEXT_CONFIRM_REACTIVATE', 'Anda yakin ingin mengembalikan Kupon ini?<br />CATATAN: Mengembalikan tidak mempengaruhi Tanggal Mulai/Kadaluarsa.<br />Mengembalikakn tidak mempengaruhi batasan penggunaan per kupon/per pelanggan jika telah ditebus.');

define('SUCCESS_COUPON_FOUND', 'Terdapat Kupon Diskon!');
define('ERROR_COUPON_NOT_FOUND', 'Kupon Diskon Tidak Ada!');
define('ERROR_NO_COUPON_CODE', 'Kode Kupon Diskon tidak di isi!');
define('ERROR_NO_COUPONS', 'Tidak ada Kupon'); 
