<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Pelanggan');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Nama Depan');
define('TABLE_HEADING_LASTNAME', 'Nama Belakang');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Akun Dibuat');
define('TABLE_HEADING_LOGIN', 'Login Terakhir');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TABLE_HEADING_PRICING_GROUP', 'Kelompok Harga');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Terotorisasi');
define('TABLE_HEADING_GV_AMOUNT', 'Neraca Kupon Hadiah');

define('TEXT_DATE_ACCOUNT_CREATED', 'Akun Dibuat:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Terakhir Dimodifikasi:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Login Terakhir:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Jumlah Login:');
define('TEXT_INFO_COUNTRY', 'Negara:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Jumlah Ulasan:');
define('TEXT_DELETE_INTRO', 'Anda yakin ingin menghapus pelanggan ini?');
define('TEXT_DELETE_REVIEWS', 'Menghapus %s ulasan');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Menghapus Pelanggan');
define('TYPE_BELOW', 'Ketikkan dibawah');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Jumlah Pesanan:');
define('TEXT_INFO_LIFETIME_VALUE', 'Nilai Seumur Hidup Pelanggan:');
define('TEXT_INFO_LAST_ORDER','Pesanan Terakhir:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Rujukan Pelanggan<br />Kupon Diskon ke-1');
define('TEXT_INFO_GV_AMOUNT', 'Neraca Kupon Hadiah');

define('ENTRY_NONE', 'Tanpa');

define('TABLE_HEADING_COMPANY','Perusahaan');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Atur Ulang Kata Sandi Pelanggan');
define('TEXT_PWDRESET_INTRO', 'Untuk mengatur ulang kata sandi pelanggan ini, isi kata sandi baru, dan konfirmasi, dibawah. Kata sandi baru harus terkonfirmasi pada aturan yang dikenakan pada pelanggan.');
define('TEXT_CUST_NEW_PASSWORD', 'Kata Sandi Baru:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Konfirmasi Kata Sandi:');
define('ERROR_PWD_TOO_SHORT', 'Kesalahan: kata sandi lebih pendek dari jumlah karakter yang di atur untuk toko ini.');
define('SUCCESS_PASSWORD_UPDATED', 'Kata sandi diperbarui.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Kata sandi anda telah diubah oleh administrator toko. Kata sandi baru anda adalah: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Kata sandi akun diatur ulang');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Anda telah mengatur ulang kata sandi untuk pelanggan: ' . "\n" . '%s' . "\n\n" . 'ID Administrator: %s');

define('CUSTOMERS_AUTHORIZATION', 'Status Otorisasi Pelanggan');
define('CUSTOMERS_AUTHORIZATION_0', 'Disetujui');
define('CUSTOMERS_AUTHORIZATION_1', 'Penundaan Persetujuan - Untuk Merambah Harus Diotorisasi');
define('CUSTOMERS_AUTHORIZATION_2', 'Penundaan Persetujuan - Dapat Merambah Tanpa Diperlihatkan Harga');
define('CUSTOMERS_AUTHORIZATION_3', 'Penundaan Persetujuan - Dapat Merambah dengan Diperlihatkan Harga Tetapi Tidak Dapat Membeli');
define('CUSTOMERS_AUTHORIZATION_4', 'Dicekal - Tidak diizinkan untuk masuk atau berbelanja');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Peringatan: Toko Anda telah disetel untuk Persetujuan dengan Dilarang Merambah. Pelanggan telah disetel ke Penundaan Persetujuan - Dilarang Melihat');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Peringatan: Toko Anda telah disetel untuk Persetujuan dengan Merambah Tanpa Diperlihatkan HArga. Pelanggan telah disetel ke Penundaan Persetujuan - Melihat Tanpa Harga');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Status pelanggan Anda telah diperbarui. Terima kasih telah berbelanja bersama kami. Kami menantikan kunjungan Anda berikutnya.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Status Pelanggan Diperbarui');

define('ADDRESS_BOOK_TITLE', 'Isian Buku Alamat');
define('PRIMARY_ADDRESS', '(alamat utama)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>CATATAN:</strong></span> Maksimum  %s jumlah isian buku alamat yang diperbolehkan.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | <a href="%s">%s Isian</a>');
define('TEXT_INFO_ADDRESS_BOOK_COUNT_SINGLE', '');

define('EMP_BUTTON_PLACEORDER_ALT', 'Letatkkan pesanan untuk pelanggan ini');
define('EMP_BUTTON_PLACEORDER', 'Letakkan Pesanan');
