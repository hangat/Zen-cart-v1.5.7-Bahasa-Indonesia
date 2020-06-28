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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', 'Halaman EZ (Berita)');
define('TABLE_HEADING_PAGES', 'Judul Halaman');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TABLE_HEADING_VSORT_ORDER', 'Urutan Kotak Sisi (Sidebox)');
define('TABLE_HEADING_HSORT_ORDER', 'Urutan Bagian Bawah (Footer)');
define('TEXT_PAGES_TITLE', 'Judul Halaman:');
define('TEXT_PAGES_HTML_TEXT', 'Isi HTML:');
define('TABLE_HEADING_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_PAGES_STATUS_CHANGE', 'Perubahan Status: %s');
define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus halaman ini?');
define('SUCCESS_PAGE_INSERTED', 'Berhasil: Halaman telah ditambahkan.');
define('SUCCESS_PAGE_UPDATED', 'Berhasil: Halaman telah diperbarui.');
define('SUCCESS_PAGE_REMOVED', 'Berhasil: Halaman telah dihapus.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Berhasil: Status halaman telah diperbarui.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Kesalahan: Judul halaman dibutuhkan.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Kesalahan: Penanda status tidak diketahui.');
define('ERROR_MULTIPLE_HTML_URL', 'Kesalahan: Anda telah menentukan bermacam-macam pengaturan pada saat hanya satu yang dapat ditentukan per Tautan ...<br />Tentukan hanya salah satu dari berikut ini: Isi HTML -atau- URL Tautan Internal -atau- URL Tautan Eksternal');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Bagian Atas (Header):');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Kotak Sisi (Sidebox):');
define('TABLE_HEADING_STATUS_FOOTER', 'Bagian Bawah (Footer):');
define('TABLE_HEADING_STATUS_TOC', 'Daftar Isi:');
define('TABLE_HEADING_CHAPTER', 'Bab:');
define('TABLE_HEADING_VISIBLE', 'Terlihat:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Buka Jendela Baru:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Ini halaman SSL:');
define('TABLE_HEADING_PAGE_IS_VISIBLE', 'Halaman Terlihat:');
define('TABLE_HEADING_PAGE_IS_VISIBLE_EXPLANATION', ' Halaman ditampilakan meskipun jika tidak di header, footer atau sidebox<br>
(Jika semua pengaturan untuk Terlihat dan Header dan Footer dan Sidebox semuanya OFF kemudian pengunjung berusaha untuk melihat halaman akan mendapat respon Halaman-Tidak-Ditemukan.)');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Menampilkan <b>%d</b> ke <b>%d</b> (dari <b>%d</b> halaman)');
define('IMAGE_NEW_PAGE', 'Halaman Baru');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Pilih halaman ...');

define('TEXT_HEADER_SORT_ORDER', 'Urutan:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Urutan:');
define('TEXT_FOOTER_SORT_ORDER', 'Urutan:');
define('TEXT_TOC_SORT_ORDER', 'Urutan:');
define('TEXT_CHAPTER', 'Sebelumnya / Bab Berikutnya:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Bab:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Urutan Bagian Atas (Header) digunakan ketika membuat halaman di dalam satu baris untuk bagian atas(header); Urutan harus lebih besar dari nol untuk mengaktifkan halaman ini dalam daftar bentuk baris');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Urutan Kotak Sisi (Sidebox) digunakan ketika halaman didaftarkan dalam tautan-tautan vertikal; Urutan harus lebih besar dari nol untuk mengaktifkannya dalam daftar vertikal, jika tidak maka ia akan dianggap sebagai teks HTML untuk tujuan khusus');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Urutan Bagian Bawah (Footer) digunakan ketika membuat halaman dalam satu baris bagian bawah (footer); Urutan harus lebih besar dari nol untuk mengaktifkan halaman ini dalam daftar bentuk baris');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'Urutan Daftar Isi digunakan ketika membuat halaman yang dikustomisasikan sebagai sebuah baris (header/footer, dsb) atau secara vertikal, berdasarkan kepada kebutuhan masing-masing; Urutan harus lebih besar dari nol untuk mengaktifkan halaman ini dalam daftar');
define('TEXT_CHAPTER_EXPLAIN', 'Bab-bab digunakan dengan Urutan Daftar Isi untuk ditampilkan pada Sebelumnya/Berikutnya. Tautan-tautan dalam Daftar Isi akan terdiri dari halamn-halaman yang sesuai dengan nomor bab ini, dan akan ditampilkan dalam Urutan Daftar isi');

define('TEXT_ALT_URL', 'URL Tautan Internal:');
define('TEXT_ALT_URL_EXPLAIN', 'Jika ditentukan, isi halaman akan diabaikan dan URL alternatif INTERNAL ini akan digunakan untuk membuat tautan<br />Contoh untuk Ulasan: index.php?main_page=reviews<br />Contoh untuk Akun Saya: index.php?main_page=account dan tandai sebagai SSL');

define('TEXT_ALT_URL_EXTERNAL', 'URL Tautan Eksternal:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Jika ditentukan, isi halaman akan diabaikan dan URL alternatif EKSTERNAL akan digunakan untuk membuat tautan<br />Contoh untuk tautan eksternal: http://www.sashbox.net');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Urutan: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Bab/Daftar Isi');
define('TEXT_SORT_HEADER_TITLE', 'Bagian Atas (Header)');
define('TEXT_SORT_SIDEBOX_TITLE', 'Kotak Sisi (Sidebox)');
define('TEXT_SORT_FOOTER_TITLE', 'Bagian Bawah (Footer)');
define('TEXT_SORT_PAGE_TITLE', 'Judul Halaman');
define('TEXT_SORT_PAGE_ID_TITLE', 'ID Halaman, Judul');

define('TEXT_PAGE_TITLE', 'Judul:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>PERINGATAN: Pendefinisian Banyak Tautan</strong>');
