<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: freeoptions.php 3830 2006-06-21 23:47:16Z ajeh $
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Opsi Pengiriman Gratis');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Opsi Bebas digunakan untuk menampilkan opsi Pengiriman Gratis ketika Modul Pengiriman lainnya ditampilkan.
Itu dapat didasarkan pada: Selalu tampilkan, Total Pesanan, Berat Pesanan, atau Jumlah Item Pesanan.
Modul Pilihan Bebas tidak muncul ketika Pengirim Gratis ditampilkan.<br /><br />
Pengaturan Total ke >= 0.00 dan <= tidak ada apa pun (biarkan kosong) yang akan mengaktifkan modul ini untuk ditampilkan dengan semua modul pengiriman, kecuali untuk Pengiriman Gratis - freeshipper.<br /><br />
CATATAN: Membiarkan semua pengaturan untuk Total, Berat, dan Jumlah item kosong akan menonaktifkan modul ini.<br /><br />
CATATAN: Opsi Pengiriman Gratis tidak ditampilkan jika Pengiriman Gratis digunakan berdasarkan 0 berat Pengiriman Gratis.
Lihat: freeshipper
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Bebas biaya kirim');

?>