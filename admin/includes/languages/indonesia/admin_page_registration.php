<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Registrasi Halaman Admin');
define('TEXT_PAGE_KEY', 'Kunci Halaman');
define('TEXT_LANGUAGE_KEY', 'Nama Halaman');
define('TEXT_MAIN_PAGE', 'Nama File Halaman');
define('TEXT_PAGE_PARAMS', 'Parameter Halaman');
define('TEXT_MENU_KEY', 'Menu');
define('TEXT_DISPLAY_ON_MENU', 'Tampilkan di Menu?');
define('TEXT_SORT_ORDER', 'Urutan');

define('TEXT_EXAMPLE_PAGE_KEY', '(mis. myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(mis. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(mis. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(mis. pilihan=1 atau, lebih berguna, biarkan kosong)');
define('TEXT_SELECT_MENU', 'Pilih Menu');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Kunci Halaman tidak diisi. Semua halaman admin harus memiliki kunci halaman unik.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Kunci Halaman telah ada. Kunci halaman harus unik.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Kunci Bahasa tidak diisi. Semua halaman admin harus memiliki kunci bahasa yang mendefinisikan teks pada suatu menu tautan.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Kunci bahasa yang diisi tidak didefenisikan. Silakan cek ejaan sudah benar.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'Nama File untuk halaman belum diisi.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'Defenisi nama file yang diisi tidak tersedia. Silakan cek ejaan sudah bendar.');
define('ERROR_MENU_NOT_CHOSEN', 'Menu tidak dipilih. Anda harus mengasosiasikan halaman baru dengan menu, meskipun jika tidak ditampilkan pada menu.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Halaman admin anda telah terdaftar.');
