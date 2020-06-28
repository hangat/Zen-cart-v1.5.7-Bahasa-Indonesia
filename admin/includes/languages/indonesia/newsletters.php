<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Pengelola Buletin dan Pemberitahuan Produk');

define('TABLE_HEADING_NEWSLETTERS', 'Buletin');
define('TABLE_HEADING_SIZE', 'Ukuran');
define('TABLE_HEADING_MODULE', 'Modul');
define('TABLE_HEADING_SENT', 'Terkirim');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_NEWSLETTER_MODULE', 'Modul:');
define('TEXT_NEWSLETTER_TITLE', 'Judul:');
define('TEXT_NEWSLETTER_CONTENT', 'Isi<br />Teks-Saja:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Isi<br />Teks Kaya:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Tanggal Dikirim:');

define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus Buletin ini?');

define('TEXT_PLEASE_WAIT', 'Silakan tunggu .. sedang mengirim e-mail ..<br /><br />Mohon jangan ganggu proses ini!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Selesai mengirimkan e-mail!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s e-mail telah diproses. (Tiap kotak cek menunjukkan 1 penerima. Letakkan kursor di atas kotak cek untuk melihat alamat e-mailnya.)<br /><br />Periksa kotak e-mail Anda ('.EMAIL_FROM.') untuk:<UL><LI>a) e-mail yang ditolak</LI><LI>b) alamat e-mail yang tidak lagi valid</LI><LI>c) permintaan penghentian pengiriman e-mail.</LI></UL>Penghentian pengiriman e-mail dapat dilaksanakan dengan mengedit data Pelanggan pada menu Admin->Pelanggan.');

define('ERROR_NEWSLETTER_TITLE', 'Kesalahan: Judul Buletin dibutuhkan');
define('ERROR_NEWSLETTER_MODULE', 'Kesalahan: Modul Buletin dibutuhkan');
define('ERROR_PLEASE_SELECT_AUDIENCE','Kesalahan: Mohon pilih seorang pelanggan untuk menerima Buletin ini');
?>