<?php
/**
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Tue Jan 9 13:12:24 2018 -0500 Modified in v1.5.6 $
 */

define('HEADING_TITLE', 'Manager Log Aktifitas Admin');
define('HEADING_SUB1', 'Ulas atau Ekspor Log');
define('HEADING_SUB2', 'Bersihkan Riwayat Log');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Format File Ekspor:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Nama File Ekspor:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Simpan ke file di server? (jika tidak akan streaming untuk di-download langsung dari jendela ini)');
define('TEXT_ACTIVITY_EXPORT_DEST','Tujuan: ');
define('TEXT_PROCESSED', ' Diproses.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Ekspor lengkap. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'PERINGATAN: Ekspor gagal. Tidak dapat berhasil menulis ke file ');

define('TEXT_INSTRUCTIONS','<u>INSTRUKSI</u><br />
Anda dapat menggunakan halaman ini untuk ekspor Zen Cart anda&reg; Aktifitas Akses Pengguna Admin ke file CSV untuk arsip.<br />
Anda sebaiknya menyimpan data ini untuk investigasi penipuan dalam kasus situs anda dikompromi. Ini sebuah Ini merupakan persyaratan untuk Kepatuhan PCI.<br />
<ol>
<li>Pilih apakah akan menampilkan atau ekspor ke file.</li>
<li>Isi nama file.</li>
<li>Klik Simpan untuk diproses.</li>
<li>Pilih apakah akan menyimpan atau membuka file, tergantung pada apa browser Anda menawarkan.</li></ol>
');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Kosongkan tabel Log Aktivitas Admin dari database<br />PERINGATAN: YAKINKAN UNTUK MELAKUKAN BACKUP DATABASE ANDA sebelum pembaruan ini dijalankan!</strong><br />Log Aktivitas Admin adalah metode pelacakan yang mencatat aktivitas di halaman Admin. <br />Karena sifatnya dapat menjadi sangat besar, sangat cepat dan tidak perlu dibersihkan dari waktu ke waktu.<br />Peringatan diberikan pada 50.000 catatan atau 60 hari, yang pernah terjadi dulu.<br /><span class="alert">CATATAN: Untuk Kepatuhan PCI, Anda diminta untuk mempertahankan riwayat aktivitas log admin untuk 12 bulan.<br />Cara terbaik adalah untuk arsip log Anda dengan memilih EKSPOR ATAS CSV dan klik Simpan, atas, * SEBELUM * data log dibersihkan.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">PERINGATAN: Anda MENGHAPUS * catatan audit penting * jejak dari database Anda!.</span></strong><br />Anda sebaiknya PERTAMA setuju bahwa anda telah melakukan BACKUP database anda sebelum memproses.<br />Dengan memproses anda setuju bahwa informasi ini akan dihapus dan mengerti anda bertanggungjawab secara legal terhadap data ini.<br /><br />Saya mengerti tanggung jawab saya, dan berharap untuk memproses penghapusan dengan klik Reset:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Lengkap</strong> penghapusan Log Aktifitas Admin');
define('TEXT_NO_RECORDS_FOUND', 'Tidak ditemukan Record menggunakan filter yang anda pilih.');

define('TEXT_EXPORTFORMAT0', 'Export sebagai HTML (ideal untuk menampilkan di screen)');
define('TEXT_EXPORTFORMAT1', 'Export sebagai CSV (ideal untuk import ke spreadsheets)');
define('TEXT_EXPORTFORMAT2', 'Export ke TXT');
define('TEXT_EXPORTFORMAT3', 'Export ke XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Log data mana yang ingin anda lihat?');
define('TEXT_EXPORTFILTER0', 'Semua data log, terlepas dari tingkat keparahannya.');
define('TEXT_EXPORTFILTER1', 'INFO - informasi umum log');
define('TEXT_EXPORTFILTER2', 'PEMBERITAHUAN - Catatan info, yang sebaiknya diulas secara berkala');
define('TEXT_EXPORTFILTER3', 'PERINGATAN - Aktifitas yang seharusnya diulas harian');
define('TEXT_EXPORTFILTER4', 'Keduanya PEMBERITAHUAN dan PERINGATAN (kombinasi bersama bersama untuk ulasan).');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Interprestasi log data</strong><ul>
<li><strong>Kekerasan</strong> - Standar untuk logging secara umum kekerasan sebagai berikut:
  <ul>
  <li><strong>INFO</strong> mengacu ke aktifitas umum. Ini mungkin atau tidak mungkin berisi detail dapat ditandai.</li>
  <li><strong>PEMBERITAHUAN</strong> Mengacu ke aktifitas yang mengindikasikan hak istimewa telah digunakan, dan mungkin termasuk sesuatu seperti pembuatan akun admin baru atau penambahan modul pembayaran. Ini juga menjelaskan saat suatu data dikirim ke dalam halaman web termasuk muatan berpotensi resiko seperti script tag atau iframes melekat, di mana konten berbahaya yang ditambahkan ke produk / kategori / halaman oleh karyawan yang tidak senang atau penyusup di situs Anda. Ini harus ditinjau secara teratur untuk setiap anomali seperti aktivitas yang tidak sah.</li>
  <li><strong>PERINGATAN</strong> adalah tanda untuk pemikiran yang kritis seperti penghilangan modul pembayaran atau penghapusan Pengguna admin. Aktifitas tersebut mungkin penyarankan kerusakan tertunda jika jika tidak tertangkap dengan cepat. Ini seharusnya diulas secara berkala; rekomendasi secara harian.</li>
  </ul>
</li>
<li><strong>Pengguna admin</strong> - Ini akan menampilkan nomer ID pengguna Admin diikuti oleh nama admin. Jika tidak login, ini akan menampilkan 0.</li>
<li><strong>page_accessed</strong> - Ini akan mengindikasikan nama halaman yang dikunjungi, kemudian memberikan sehingga memberikan petunjuk untuk jenis kegiatan berlangsung.</li>
<li><strong>parameters</strong> - Ini adalah sisa URI dari halaman yang dikunjungi, dan memberikan indikasi lebih lanjut dari jenis kegiatan yang dicoba oleh pengunjung.</li>
<li><strong>flagged</strong> - Jika ini diatur ke 1, yang menunjukkan bahwa Anda harus memeriksa konten dicatat dalam "PostData" lapangan untuk masuk yang tidak sah script atau iframe atau konten yang berpotensi berbahaya lainnya. Penjelasan tentang konten yang mencurigakan akan terdaftar dalam "perhatian" lapangan.</li>
<li><strong>attention</strong> - Hal ini akan berisi saran yang berhubungan dengan jenis aktivitas yang mencurigakan yang harus ditinjau dalam "PostData" lapangan jika ditandai. </li>
<li><strong>logmessage</strong> - Hal ini mengandung pesan yang direkam oleh sistem tentang aktivitas yang terjadi, seperti pemasangan modul tertentu.</li>
<li><strong>postdata</strong> - Ini berisi data POST mentah (dengan beberapa informasi sensitif digosok) untuk ditinjau mudah dalam hal aktivitas berbahaya dicurigai.</li>
</ul>');
