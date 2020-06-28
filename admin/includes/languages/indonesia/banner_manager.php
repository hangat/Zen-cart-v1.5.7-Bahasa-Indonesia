<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Pengelola Banners / Spanduk');

define('TABLE_HEADING_BANNERS', 'Spanduk');
define('TABLE_HEADING_GROUPS', 'Kelompok');
define('TABLE_HEADING_STATISTICS', 'Ditampilkan / Diklik');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Jendela Baru');
define('TABLE_HEADING_BANNER_ON_SSL', 'Tampilkan SSL');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Urutan');

define('TEXT_BANNERS_TITLE', 'Judul Spanduk:');
define('TEXT_BANNERS_URL', 'URL Spanduk:');
define('TEXT_BANNERS_GROUP', 'Kelompok Spanduk:');
define('TEXT_BANNERS_NEW_GROUP', ', atau isi sebuah kelompok spanduk baru dibawah');
define('TEXT_BANNERS_IMAGE', 'Image:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', atau isi sebuah berkas lokal pada kotak input dibawah');
define('TEXT_BANNERS_IMAGE_TARGET', 'Tujuan Gambar (Simpan Ke):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Lokasi Target Pada Server yang Disarankan untuk Gambar:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>CATATAN: Spanduk HTML tidak mencatat pengklikan pada spanduk</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'Teks HTML:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Urutan - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>CATATAN: Kotak sisi banners_box_all akan menampilkan spanduk dalam urutan mereka sendiri</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Kadaluarsa Pada:');
define('TEXT_BANNERS_OR_AT', ', atau pada');
define('TEXT_BANNERS_IMPRESSIONS', 'tampilan.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Dijadwalkan Pada:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Catatan untuk SpandukSpanduk:</b><ul><li>Gunakan sebuah gambar atau teks HTML untuk banner - jangan keduanya.</li><li>Teks HTML memiliki prioritas di atas gambar</li><li>Teks HTML tidak akan mencatat pengklikan, tetapi akan mencatat penampilan</li><li>Spanduk dengan URL gambar tetap (absolut) sebaiknya jangan ditampilkan pada halaman aman (secure pages)</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Catatan untuk Gambar:</b><ul><li>Direktori tempat peng-upload-an harus memiliki pengaturan hak akses pengguna yang benar!</li><li>Jangan mengisi kotak input \'Simpan Ke\' jika Anda tidak meng-upload gambar ke server web (dengan kata lain, Anda menggunakan sebuah gambar lokal (serverside)).</li><li>Isi kotak input \'Simpan Ke\' harus merupakan sebuah direktori yang sudah ada dengan sebuah garis miring di belakangnya (misal, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRY_NOTE', '<b>Catatan untuk Kadaluarsa:</b><ul><li>Hanya satu dari dua kotak input tersebut yang diisi</li><li>Jika banner ini tidak ingin untuk kadaluarsa secara otomatis, maka biarkan kotak input ini kosong</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Catatan tentang Penjadwalan:</b><ul><li>Jika penjadwalan ditetapkan, maka spanduk akan diaktifkan pada tanggal tersebut.</li><li>Semua spanduk yang dijadwalkan akan ditandai tidak aktif sampai tanggal penampilan mereka tiba, yang kemudian mereka akan ditandai aktif.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Status Spanduk:');
define('TEXT_BANNERS_ACTIVE', 'Aktif');
define('TEXT_BANNERS_NOT_ACTIVE', 'Tidak Aktif');
define('TEXT_INFO_BANNER_STATUS', '<strong>CATATAN:</strong> Status spanduk akan diperbarui berdasarkan pada Tanggal dan Tampilan yang Dijadwalkan');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Spanduk Dibuka pada Jendela Baru');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>CATATAN:</strong> Spanduk akan dibuka pada wsebuah jendela baru');
define('TEXT_BANNERS_ON_SSL', 'Banner pada SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>CATATAN:</strong> Spanduk dapat ditampilkan pada Halaman Aman (Secure Pages) tanpa masalah');

define('TEXT_BANNERS_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Dijadwalkan Pada: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Kadaluarsa Pada: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Kadaluarsa Pada: <b>%s</b> tampilan');
define('TEXT_BANNERS_STATUS_CHANGE', 'Perubahan Status: %s');

define('TEXT_BANNERS_LAST_3_DAYS', '3 Hari Terakhir');
define('TEXT_BANNERS_BANNER_VIEWS', 'Spanduk Dilihat');
define('TEXT_BANNERS_BANNER_CLICKS', 'Spanduk Diklik');

define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus spanduk ini?');
define('TEXT_INFO_DELETE_IMAGE', 'Hapus gambar spanduk');

define('SUCCESS_BANNER_INSERTED', 'Berhasil: Spanduk telah disisipkan.');
define('SUCCESS_BANNER_UPDATED', 'Berhasil: Spanduk telah diperbarui.');
define('SUCCESS_BANNER_REMOVED', 'Berhasil: Spanduk telah dihapus.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Berhasil: Status spanduk telah diperbarui.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Kesalahan: Judul spanduk dibutuhkan.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Kesalahan: Kelompok spanduk dibutuhkan.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Kesalahan: Gambar tidak ada.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Kesalahan: Gambar tidak dapat dihapus.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Kesalahan: Penanda status tidak diketahui.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Kesalahan: Gambar banner dibutuhkan.');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Tampilkan di SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Jendela Baru');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Buka Jendela Baru - Aktif');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Buka Jendela Baru - Tidak Aktif');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Tampilkan pada Halaman Aman - Aktif');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Tampilkan pada Halaman Aman - Tidak Aktif');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Berhasil: Status spanduk untuk dibuka pada jendela baru telah diperbarui.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Berhasil: Status spanduk untuk ditampilkan pada SSL telah diperbarui.');

