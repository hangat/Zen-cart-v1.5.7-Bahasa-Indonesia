<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Modul Pembayaran');
define('HEADING_TITLE_MODULES_SHIPPING', 'Modul Pengiriman');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Modul Total Pesanan');

define('TABLE_HEADING_MODULES', 'Modul');
define('TABLE_HEADING_SORT_ORDER', 'Urutan');
define('TABLE_HEADING_ORDERS_STATUS','Status Urutan');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_MODULE_DIRECTORY', 'Direktori Modul:');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERROR: modul tidak dimuat karena hilang file bahasa: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'PEMBERITAHUAN: Pengaturan Admin Anda telah diubah dalam toko online Anda.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Ini adalah email otomatis dari toko Zen Cart Anda untuk memberitahu anda tentang perubahan yang baru saja dibuat untuk pengaturan administratif Anda: ' . "\n\n" . 'CATATAN: Pengaturan Admin telah BERUBAH untuk modul [% s], dengan Pengguna admin Zen Cart %s.' . "\n\n" . 'Jika Anda tidak mengajukan perubahan ini, disarankan bahwa Anda memverifikasi pengaturan segera.' . "\n\n" . 'Jika Anda sudah menyadari perubahan ini, Anda dapat mengabaikan email ini otomatis.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Ini adalah email otomatis dari toko Zen Cart Anda untuk memberitahu anda tentang perubahan yang baru saja dibuat untuk pengaturan administratif Anda: ' . "\n\n" . 'CATATAN: Pengaturan Admin telah berubah. Modul [%s] telah DI INSTAL oleh admin Zen Cart anda %s.' . "\n\n" . 'Jika Anda tidak mengajukan perubahan ini, disarankan bahwa Anda memverifikasi pengaturan segera.' . "\n\n" . 'Jika Anda tidak mengajukan perubahan ini, disarankan bahwa Anda memverifikasi pengaturan segera.' . "\n\n" . 'Jika Anda sudah menyadari perubahan ini, Anda dapat mengabaikan email ini otomatis.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Ini adalah email otomatis dari toko Zen Cart Anda untuk memberitahu anda tentang perubahan yang baru saja dibuat untuk pengaturan administratif Anda: ' . "\n\n" . 'CATATAN: Pengaturan Admin telah berubah. Modul [%s] telah DIHAPUS oleh admin Zen Cart anda %s.' . "\n\n"  'Jika Anda sudah menyadari perubahan ini, Anda dapat mengabaikan email ini otomatis.');
define('TEXT_DELETE_INTRO', 'Anda yakir ingin menghapus modul ini?');
define('TEXT_WARNING_SSL_EDIT', 'PEMBERITAHUAN: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Untuk alasan keamanan, Editing modul ini dinonaktifkan sampai Admin Anda dikonfigurasi untuk SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'PEMBERITAHUAN: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Untuk alasan keamanan, Pemasangan modul ini dinonaktifkan sampai Admin Anda dikonfigurasi untuk SSL</a>.');

// Generic validation messages for modules
define('TEXT_POSITIVE_INT','%s harus bilangan bulat lebih besar dari atau sama dengan 0');
define('TEXT_POSITIVE_FLOAT','%s harus desimal lebih besar dari atau sama dengan 0');
