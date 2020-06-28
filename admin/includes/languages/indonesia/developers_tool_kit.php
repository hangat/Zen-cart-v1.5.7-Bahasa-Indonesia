<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Oct 19 01:39:59 2015 -0400 Modified in v1.5.5 $
 */
  define('HEADING_TITLE', 'Kit Alat Pengembang');
  define('TABLE_CONFIGURATION_TABLE', 'Cari Definisi KONSTAN');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Sukses</strong> pembaruan untuk Nilai Penyortir Harga Produk');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Kesalahan:</strong> Tidak ada Kunci Konfigurasi yang cocok ditemukan ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Kesalahan:</strong> Tidak ada Kunci Konfigurasi atau Teks dimasukkan untuk mencari ... Pencarian dihentikan');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Perbarui SEMUA Penyortir Harga Produk</strong><br />to be able to sort by displayed prices: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Cari KONSTAN atau File Bahasa menentukan</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Kunci atau Nama:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>CATATAN: </strong> CONSTAN ditulis dalam huruf besar. <br /> File bahasa, fungsi, kelas, dll. Pencarian dilakukan ketika tidak ada yang ditemukan dalam tabel database, jika dipilih dalam dropdown');

  define('TABLE_TITLE_KEY', '<strong>Kunci:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Judul:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Deskripsi:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Group:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Nilai:</strong>');

  define('TEXT_LOOKUP_NONE', 'None');
  define('TEXT_INFO_SEARCHING', 'Pencarian ');
  define('TEXT_INFO_FILES_FOR', ' file ... Untuk: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Baris sama ditemukan: ');
  define('TEXT_INFO_FILENAME', 'NAMAFILE: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Pencarian File Bahasa:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Semua file bahasa untuk ' . strtoupper($_SESSION['language']) . ' - Katalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Semua file bahasa Utama - Katalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Semua file bahasa saat ini - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'All Main Language files - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Semua file bahasa saat ini - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Semua file bahasa terpilih saat ini - Katalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Fungsi atau hal-hal yang dicari dalam file Fungsi</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Pencarian File Fungsi:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Semua file Fungsi - Katalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Semua file Fungsi - Katalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Semua file Fungsi - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Cari Kelas atau hal lain di file Kelas</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Pencarian File Kelas:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Semua file Kelas - Katalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Semua file Kelas - Katalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Semua file Kelas - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Cari hal-hal Template</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Cari File Template:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Semua File Template - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Semua File Template - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Semua File Template - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Semua File Template - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Cari di semua file</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Cari Semua File:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Semua File - Katalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Semua File - Katalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Semua File - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Tidak ada hasil edit');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' atau, TERSEMBUNYI');

  define('TEXT_SEARCH_ALL_FILES', 'Cari SEMUA file: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Cari tabel konfigurasi database untuk: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Jenis file');
  define('TEXT_ALL_FILES_LOOKUP_PHP', '.php saja');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php dan .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', '.css only');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html dan .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', '.js saja');
  define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', 'Semuanya');

  define('TEXT_CASE_SENSITIVE', 'Hal - hal sensitif?');
  define('TEXT_CONTEXT_LINES', 'Garis konteks: ');
  define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', 'Masukkan frasa atau pola pencarian');
  define('TEXT_SEARCH_KEY_PLACEHOLDER', 'Masukkan nama atau frasa kunci untuk mencari');
  define('TEXT_SEARCH_PHRASE_PLACEHOLDER', 'Masukkan frasa pencarian');
  define('TEXT_BUTTON_SEARCH', 'Cari');
  define('TEXT_BUTTON_SEARCH_ALT', 'Jalankan Pencarian');
  define('TEXT_BUTTON_REGEX_SEARCH', 'Grep');
  define('TEXT_BUTTON_REGEX_SEARCH_ALT', 'Cari menggunakan pola Regex');
  define('TEXT_ERROR_REGEX_FAIL', 'PERINGATAN: Terjadi kesalahan selama pencarian. Jika Anda melakukan pencarian regex / grep, silakan periksa pola regex Anda untuk kesalahan sintaks.');

  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Cari di Pengaturan Konfigurasi/Kunci</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Frase untuk mencari:</strong> (This will search configuration setting names and descriptions, and also configuration_keys if exact match)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Bagian');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Kelompok');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Judul');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Deskripsi');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Nilai');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Nama Kunci');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Edit');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'Kunci Konfigurasi tidak ditemukan.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'Kunci Kunfigurasi ditemukan.');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Isi Kata untuk menemukan dalam setting');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Cari');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Cari (Urutan dengan Kunci)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Lihat Semua');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Atur Ulang');
  define('TEXT_RESET_BUTTON_ALT', 'Hapus semua bidang pencarian, untuk mulai lagi dari awal.');
