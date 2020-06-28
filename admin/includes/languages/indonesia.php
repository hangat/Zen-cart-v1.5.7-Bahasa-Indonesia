<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Jun 07 Modified in v1.5.7 $
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

define('CONNECTION_TYPE_UNKNOWN', '\'%s\' type koneksi tidak sesuai untuk membuat URL' . PHP_EOL . '%s' . PHP_EOL);

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin - Dibangun Diatas Aplikasi Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '192');
define('HEADER_LOGO_HEIGHT', '68');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('id_ID.UTF-8', 'id_ID', 'Indonesian_indonesia.1252', 'id');
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date() calls in some plugins

// for now both defines are needed until Spiffy is completely removed.
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
define('DATE_FORMAT_DATE_PICKER', 'dd-mm-yy');  //Use only 'dd', 'mm' and 'yy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}
// // include template specific meta tags defines
//   if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
//     $template_dir_select = $template_dir . '/';
//   } else {
//     $template_dir_select = '';
//   }
//   require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// used for prefix to browser tabs in admin pages
define('TEXT_ADMIN_TAB_PREFIX', 'Admin');
// if you have multiple stores and want the Store Name to be part of the admin title (ie: for browser tabs), swap this line with the one above
//define('TEXT_ADMIN_TAB_PREFIX', 'Admin ' . STORE_NAME);

// meta tags
define('TEXT_LEGEND_META_TAGS', 'Tag-tag Meta yang Didefinisikan:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>CATATAN:</strong> Site/Tagline adalah definisi yang Anda definisikan untuk situs Anda dalam berkas meta_tags.php.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="id"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Admin Depan');
define('HEADER_TITLE_SUPPORT_SITE', 'Dukungan');
define('HEADER_TITLE_ONLINE_CATALOG', 'Toko');
define('HEADER_TITLE_VERSION', 'Versi');
define('HEADER_TITLE_ACCOUNT', 'Akun');
define('HEADER_TITLE_LOGOFF', 'Logoff');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// TEXT_GV_NAME, TEXT_GV_NAMES moved to gv_name.php
if (!defined('TEXT_GV_NAME')) {
  require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php'; 
}
  define('TEXT_DISCOUNT_COUPON', 'Kupon Diskon');

// text for gender
define('MALE', 'Pria');
define('FEMALE', 'Wanita');

define('TEXT_CHECK_ALL', 'Centang Semua');
define('TEXT_UNCHECK_ALL', 'Tidak Centang Semua');
define('NONE', 'Tidak Ada');

define('TEXT_UNKNOWN', 'Tidak Diketahui');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Konfigurasi');
define('BOX_CONFIGURATION_MY_STORE', 'Toko Saya');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Nilai Minimum');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Nilai Maximum');
define('BOX_CONFIGURATION_IMAGES', 'Gambar');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Detail Pelanggan');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Pengiriman/Pengemasan');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Daftar Produk');
define('BOX_CONFIGURATION_STOCK', 'Stok');
define('BOX_CONFIGURATION_LOGGING', 'Log');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'Pilihan E-Mail');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Pengaturan Atribut');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'Kompresi GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Sesi');
define('BOX_CONFIGURATION_REGULATIONS', 'Regulasi');
define('BOX_CONFIGURATION_GV_COUPONS', 'Kupon Hadiah');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Kartu Kredit');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Info Produk');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Pengaturan Layout');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Pemeliharaan Website');
define('BOX_CONFIGURATION_NEW_LISTING', 'Daftar Baru');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Daftar Fitur (Utama)');
define('BOX_CONFIGURATION_ALL_LISTING', 'Semua Daftar');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Daftar Index');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Defenisi Halaman Status');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'Pengaturan Halaman EZ-Pages (berita)');

// modules box text
define('BOX_HEADING_MODULES', 'Modul');
define('BOX_MODULES_PAYMENT', 'Pembayaran');
define('BOX_MODULES_SHIPPING', 'Pengiriman');
define('BOX_MODULES_ORDER_TOTAL', 'Total Pesanan');
define('BOX_MODULES_PLUGINS', 'Manager Plugin');

// categories box text
define('BOX_HEADING_CATALOG', 'Katalog');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Kategori/Produk');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tipe Produk');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Pengelola Nama Pilihan');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Pengelola Nilai Pilihan');
define('BOX_CATALOG_MANUFACTURERS', 'Produsen-Pabrikan');
define('BOX_CATALOG_REVIEWS', 'Ulasan');
define('BOX_CATALOG_SPECIALS', 'Spesial');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Produk yang Dinantikan');
define('BOX_CATALOG_SALEMAKER', 'SaleMaker');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Pengelola Harga Produk');
define('BOX_CATALOG_PRODUCT', 'Produk');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Produk ke Kategori');
define('BOX_CATALOG_CATEGORY', 'Kategori');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Pelanggan');
define('BOX_CUSTOMERS_CUSTOMERS', 'Pelanggan');
define('BOX_CUSTOMERS_ORDERS', 'Pesanan');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Kelompok Harga');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Invoice');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Packing Slip');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lokasi / Pajak');
define('BOX_TAXES_COUNTRIES', 'Negara');
define('BOX_TAXES_ZONES', 'Zona');
define('BOX_TAXES_GEO_ZONES', 'Definisi Zona');
define('BOX_TAXES_TAX_CLASSES', 'Kelas Pajak');
define('BOX_TAXES_TAX_RATES', 'Tarif Pajak');

// reports box text
define('BOX_HEADING_REPORTS', 'Laporan');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Produk Dilihat');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produk Dibeli');
define('BOX_REPORTS_ORDERS_TOTAL', 'Pesanan Pelanggan-Total');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Produk dengan Sedikit Persediaan');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Pengutus Pelanggan (Customers Referral)');

// tools text
define('BOX_HEADING_TOOLS', 'Peralatan');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Pemilihan Template');
define('BOX_TOOLS_BANNER_MANAGER', 'Pengelola Banner');
define('BOX_TOOLS_MAIL', 'Kirim Email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Pengelola Buletin dan Pemberitahuan Produk');
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Defenisi Editor Halaman');
define('BOX_TOOLS_SERVER_INFO', 'Informasi Versi/Server');
define('BOX_TOOLS_WHOS_ONLINE', 'Siapa yang Online');
define('BOX_TOOLS_STORE_MANAGER', 'Pengelola Toko');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Peralatan untuk Pembuat Aplikasi');
define('BOX_TOOLS_SQLPATCH','Pasang Perbaikan (Patch) SQL');
define('BOX_TOOLS_EZPAGES','Halaman Berita)');

define('BOX_HEADING_EXTRAS', 'Tambahan');

define('BOX_TOOLS_DEFINE_CONDITIONS','Persyaratan Penggunaan');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Lokalisasi');
define('BOX_LOCALIZATION_CURRENCIES', 'Mata Uang');
define('BOX_LOCALIZATION_LANGUAGES', 'Bahasa');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Status Pesanan');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', 'Diskon');
define('BOX_GV_ADMIN_QUEUE',  'Antrian ' . TEXT_GV_NAMES);
define('BOX_GV_ADMIN_MAIL', 'Kirim ' . TEXT_GV_NAME );
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' Terkirim');
define('BOX_COUPON_ADMIN','Admin Kupon');
define('BOX_COUPON_RESTRICT','Batasan Kupon');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Admin');
define('BOX_ADMIN_ACCESS_USERS',  'Pengguna Admin');
define('BOX_ADMIN_ACCESS_PROFILES', 'Profil Admin');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Registrasi Admin');
define('BOX_ADMIN_ACCESS_LOGS', 'Log Aktifitas Admin');

define('IMAGE_RELEASE', 'Tebus ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Kesalahan-kesalahan telah terjadi selama pemrosesan formulir Anda!\nSilakan lakukan pembetulan-pembetulan berikut ini:\n\n');

define('JS_GENDER', '* Jenis Kelamin harus dipilih.\n');
define('JS_FIRST_NAME', '* Nama Depan harus memiliki paling sedikit ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakter.\n');
define('JS_LAST_NAME', '* Nama Belakang harus memiliki paling sedikit ' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakter.\n');
define('JS_DOB', '* Tanggal Lahir harus dalam format: xx/xx/xxxx (bulan/tanggal/tahun).\n');
define('JS_EMAIL_ADDRESS', '* Alamat Email harus memiliki paling sedikit ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakter.\n');
define('JS_ADDRESS', '* Alamat harus memiliki paling sedikit ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' karakter.\n');
define('JS_POST_CODE', '* Kode Pos harus memiliki paling sedikit ' . ENTRY_POSTCODE_MIN_LENGTH . ' karakter.\n');
define('JS_CITY', '* Kota harus memiliki paling sedikit ' . ENTRY_CITY_MIN_LENGTH . ' karakter.\n');
define('JS_STATE', '* Provinsi harus dipilih.\n');
define('JS_STATE_SELECT', '-- Pilih Diatas --');
define('JS_COUNTRY', '* Negara harus dipilih.\n');
define('JS_TELEPHONE', '* Nomor Telepon harus memiliki paling sedikit ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karakter.\n');

define('JS_ERROR_SUBMITTED', 'Formulir ini telah siap dikirim. Silakan tekan OK dan tunggu lengkap.');

define('TEXT_NO_ORDER_HISTORY', 'Tidak ada Riwayat Pesanan');

define('CATEGORY_PERSONAL', 'Pribadi');
define('CATEGORY_ADDRESS', 'Alamat');
define('CATEGORY_CONTACT', 'Kontak');
define('CATEGORY_COMPANY', 'Perusahaan');
define('CATEGORY_OPTIONS', 'Pilihan');

define('ENTRY_GENDER', 'Jenis Kelamin:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">harus diisi</span>');
define('ENTRY_FIRST_NAME', 'Nama Depan:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">paling sedikit ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakter</span>');
define('ENTRY_LAST_NAME', 'Nama Belakang:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">paling sedikit ' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakter</span>');
define('ENTRY_DATE_OF_BIRTH', 'Tanggal Lahir:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(misal 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Alamat Email:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">paling sedikit ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakter</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Alamat email tidak valid!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Alamat email ini sudah ada!</span>');
define('ENTRY_COMPANY', 'Nama Perusahaan:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Kelompok Harga Diskon');
define('ENTRY_STREET_ADDRESS', 'Alamat:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">paling sedikit ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' karakter</span>');
define('ENTRY_SUBURB', 'Kecamatan:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Kode Pos:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">paling sedikit ' . ENTRY_POSTCODE_MIN_LENGTH . ' karakter</span>');
define('ENTRY_CITY', 'Kota:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">paling sedikit ' . ENTRY_CITY_MIN_LENGTH . ' karakter</span>');
define('ENTRY_STATE', 'Provinsi:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">harus diisi</span>');
define('ENTRY_COUNTRY', 'Negara:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Nomor Telepon:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">paling sedikit ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karakter</span>');
define('ENTRY_FAX_NUMBER', 'Nomor Fax:');
define('ENTRY_NEWSLETTER', 'Buletin:');
define('ENTRY_NEWSLETTER_YES', 'Langganan');
define('ENTRY_NEWSLETTER_NO', 'Tidak Berlangganan');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Kata Sandi dan Konfirmasi harus tepat');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Maaf, kata sandi baru anda telah ditolak.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Kata sandi harus berisi keduanya huruf dan angka, harus sepanjang paling sedikit %s karakter, dan harus tidak sama denga 4 kata sandi terakhir yang digunakan. Kata sandi kadaluarsa setiap 90 hari.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ERROR: Maaf, terjadi kesalahan memproses data anda. Silakan kirim ulang informasi lagi.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Kirim E-Mail');
define('IMAGE_BACK', 'Kembali');
define('IMAGE_CANCEL', 'Batal');
define('IMAGE_CONFIRM', 'Konfirmasi');
define('IMAGE_COPY', 'Salin');
define('IMAGE_COPY_TO', 'Salin Ke');
define('IMAGE_DETAILS', 'Detail');
define('IMAGE_DELETE', 'Hapus');
define('IMAGE_EDIT', 'Edit');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_GO', 'Go');
define('IMAGE_ICON_STATUS_GREEN', 'Aktif');
define('IMAGE_ICON_STATUS_RED', 'Tidak Aktif');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Buat Tidak Aktif');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Kesalahan -- terlalu banyak URL/jenis isi dimasukkan');
define('IMAGE_ICON_INFO', 'Informasi');
define('IMAGE_INSERT', 'Sisipkan');
define('IMAGE_MODULE_INSTALL', 'Instal Modul');
define('IMAGE_MODULE_REMOVE', 'Hapus Modul');
define('IMAGE_MOVE', 'Pindah');
define('IMAGE_NEW_BANNER', 'Banner Baru');
define('IMAGE_NEW_CATEGORY', 'Kategori Baru');
define('IMAGE_NEW_COUNTRY', 'Negara Baru');
define('IMAGE_NEW_CURRENCY', 'Mata Uang Baru');
define('IMAGE_NEW_LANGUAGE', 'Bahasa Baru');
define('IMAGE_NEW_NEWSLETTER', 'Buletin Baru');
define('IMAGE_NEW_PRODUCT', 'Produk Baru');
define('IMAGE_NEW_SALE', 'Penjualan Baru');
define('IMAGE_NEW_TAX_CLASS', 'Kelas Pajak Baru');
define('IMAGE_NEW_TAX_RATE', 'Tarif Pajak Baru');
define('IMAGE_NEW_ZONE', 'Wilayah Baru');
define('IMAGE_OPTION_NAMES', 'Pengelola Nama Pilihan');
define('IMAGE_OPTION_VALUES', 'Pengelola Nilai Pilihan');
define('IMAGE_ORDERS', 'Pesanan');
define('IMAGE_ORDERS_INVOICE', 'Faktur');
define('IMAGE_ORDERS_PACKINGSLIP', 'Lembar Pengemasan');
define('IMAGE_PREVIEW', 'Pratampilan');
define('IMAGE_RESET', 'Reset');
define('IMAGE_RESET_PWD', 'Reset Password');
define('IMAGE_SAVE', 'Simpan');
define('IMAGE_SELECT', 'Pilih');
define('IMAGE_SEND', 'Kirim');
define('IMAGE_SEND_EMAIL', 'Kirim Email');
define('IMAGE_SUBMIT', 'Submit');
define('IMAGE_UPDATE', 'Perbarui');
define('IMAGE_UPDATE_CURRENCIES', 'Perbarui Kurs Nilai Tukar');
define('IMAGE_UPLOAD', 'Upload');
define('IMAGE_TAX_RATES','Tarif Pajak');
define('IMAGE_DEFINE_ZONES','Tentukan Zona');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Pengelola Harga Produk');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Perbarui Perubahan Harga');
define('IMAGE_ADD_BLANK_DISCOUNTS','Tambahkan ' . DISCOUNT_QTY_ADD . ' Jumlah Diskon Kosong');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Pengelola Tautan Banyak Kategori');

define('IMAGE_ICON_STATUS_ON', 'Status - Aktif');
define('IMAGE_ICON_STATUS_OFF', 'Status - Non-Aktif');
define('IMAGE_ICON_LINKED', 'Produk Tertaut');

define('IMAGE_REMOVE_SPECIAL','Hapus Informasi Harga Spesial');
define('IMAGE_REMOVE_FEATURED','Hapus Informasi Produk Utama');
define('IMAGE_INSTALL_SPECIAL', 'Tambahkan Informasi Harga Spesial');
define('IMAGE_INSTALL_FEATURED', 'Tambahkan Informasi Produk Utama');

define('TEXT_VERSION_CHECK_BUTTON', 'Periksa Versi Baru');
define('TEXT_BUTTON_RESET_ACTIVITY_LOG', 'Lihat Log Aktifitas');

define('ICON_COPY_TO', 'Salin Ke');
define('ICON_CROSS', 'Salah');
define('ICON_DELETE', 'Hapus');
define('ICON_EDIT', 'Edit');
define('ICON_EDIT_METATAGS', 'Edit Meta Tags');
define('ICON_ERROR', 'Kesalahan');
define('ICON_FOLDER', 'Direktori');
define('ICON_MOVE', 'Pindah');
define('ICON_PREVIEW', 'Pratampilan');
define('ICON_STATISTICS', 'Statistik');
define('ICON_SUCCESS', 'Berhasil');
define('ICON_TICK', 'Benar');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Peringatan');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Halaman %s dari %d');
define('TEXT_DISPLAY_NUMBER_OF_GENERIC', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> Isian)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> banner)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> kategori)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> negara)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> pelanggan)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> mata uang)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> produk utama)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> bahasa)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> produsen)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> Buletin)');
define('TEXT_DISPLAY_NUMBER_OF_OPTIONS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (of <b>%d</b> Nama Pilihan)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> pesanan)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> status pesanan)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> grup penentuan harga)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> produk)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> tipe produk)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> produk yang dinantikan)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> ulasan produk)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> obral)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> produk spesial)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> kelas pajak)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> asosiasi template)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> zona pajak)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> tarif pajak)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> zona)');

define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Halaman Sebelumnya');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Halaman Berikutnya');
define('PREVNEXT_TITLE_PAGE_NO', 'Halaman %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Sebelumnya dari %d Halaman');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Berikutnya dari %d Halaman ');
define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Sebelum]');
define('PREVNEXT_BUTTON_NEXT', '[Berikut&nbsp;&raquo;]');

define('TEXT_DEFAULT', 'default');
define('TEXT_SET_DEFAULT', 'Atur sebagai default');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Harus Diisi</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Kesalahan: Pada saat ini tidak ada mata uang standar yang ditetapkan. SIlakan tetapkan satu buah mata uang sebagai standar pada: Lokalisasi->Mata Uang');

define('TEXT_NONE', '--tak ada--');
define('TEXT_TOP', 'Atas');
define('PLEASE_SELECT', 'Silakan Pilih ...');
define('TEXT_CUSTOMER','Pelanggan');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Kesalahan: Tujuan tidak ada %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Kesalahan: Tujuan tidak dapat ditulisi %s');
define('ERROR_FILE_NOT_SAVED', 'Kesalahan: Upload berkas tidak disimpan.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Kesalahan: Tipe upload berkas tidak diizinkan %s');
define('ERROR_FILE_TOO_BIG', 'Peringatan: Berkas lebih besar dari ukuran yang diizinkan. Lihat Pengaturan Gambar.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Berhasil: Berkas yang di-upload berhasil disimpan %s');
define('WARNING_NO_FILE_UPLOADED', 'Peringatan: Tidak ada berkas yang di-upload.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Peringatan: Peng-upload-an berkas dinon-aktifkan dalam berkas konfigurasi php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Peringatan: Login Admin Anda tidak aman ...entah karena Anda masih belum mengubah pengaturan login standar untuk: Admin admin atau tidak menghapus atau mengubah: demo demoonly<br>Login(-login) ini harus diubah secepat mungkin untuk keamanan toko Anda.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Database Anda nampaknya perlu ditingkatkan (patch) ke tingkat yang lebih tinggi. Lihat Tools->' . BOX_TOOLS_SERVER_INFO . ' untuk memeriksa tingkat peningkatan.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>PERINGATAN:</strong> Pada saat ini situs ini sedang Tutup untuk Pemeliharaan ...<br>CATATAN: Anda tidak dapat mencoba kebanyakan Modul Pembayaran dan Pengiriman dalam mode Pemeliharaan');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Peringatan: Direktori instalasi masih ada di: %s. Silakan hapus direktori ini untuk alasan keamanan.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Peringatan: Berkas konfigurasi Anda: %s dapat ditulis. Ini adalah potensi resiko keamanan - mohon tetapkan hak akses pengguna yang benar pada berkas ini (biasanya read-only, CHMOD 644 atau 444).  Anda perlu menggunakan kontrol panel webhost/file manager untuk mengganti perizinan secara efektif. Hubungi webhost anda sebagai asistensi. <a href="https://docs.zen-cart.com/user/miscellaneous/configure/" rel="noopener" target="_blank">Lihat FAQ ini</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'PERINGATAN: Tidak dapat menemukan berkas bahasa: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'KESALAHAN: Penghapusan modul dilarang: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'WASPADA: Silakan ulas untuk kemungkinan aktivitas XSS:');

define('ERROR_FILE_NOT_REMOVEABLE', 'Kesalahan: Tidak dapat menghapus file spesifik. Anda mungkin harus menggunakan FTP untuk menghapus file, terkait konfigurasi batasan izin server.');
define('ERROR_DIRECTORY_NOT_REMOVEABLE', 'Kesalahan: Tidak dapat menghapus direktori spesifik. Anda mungkin harus menggunakan FTP untuk menghapus direktori, terkait konfigurasi batasan izin server.');
define('WARNING_SESSION_AUTO_START', 'Peringatan: session.auto_start adalah enabled - silahkan disable fitur PHP ini dalam php.ini (restart webserver anda mungkin diperlukan untuk mengaktifkan perubahan).');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Peringatan: Direktori produk dapat di download tidak ada: ' . DIR_FS_DOWNLOAD . '. Produk dapat di download tidak akan bekerja sampai direktori ini valid.');
define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Peringatan: Direktori cache SQL tidak ada: ' . DIR_FS_SQL_CACHE . '. caching SQL tidak akan berkeja sampai direktori ini dibuat.');
define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Peringatan: Saya tidak dapat menulis ke direktori cache SQL: ' . DIR_FS_SQL_CACHE . '. cache SQL tidak akan kerja sampai kebijaka izin di atur.');
define('ERROR_UNABLE_TO_DISPLAY_SERVER_INFORMATION', 'Maaf, Konfigurasi PHP anda tidak dapat ditampilkan karena perusahaan hosting khusus memiliki [phpinfo] sebaikanya di disabled sebagai bagian dari [disable_functions] dalam pengaturan php.ini.');

define('_JANUARY', 'Januari');
define('_FEBRUARY', 'Februari');
define('_MARCH', 'Maret');
define('_APRIL', 'April');
define('_MAY', 'May');
define('_JUNE', 'Juni');
define('_JULY', 'Juli');
define('_AUGUST', 'Agustus');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'Oktober');
define('_NOVEMBER', 'Nopember');
define('_DECEMBER', 'Desember');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Menampilkan voucher hadiah <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> voucher hadiah)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Menampilkan kupon <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> kupon)');

define('TEXT_VALID_CATEGORIES_ID', 'ID Kategori');

define('DEFINE_LANGUAGE','Pilih Bahasa:');

define('BOX_ENTRY_COUNTER_DATE','Penghitung Kunjungan Dimulai Pada:');
define('BOX_ENTRY_COUNTER','Jumlah Kunjungan:');

// not installed
define('NOT_INSTALLED_TEXT','Tidak Dipasang');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Pengurut Nilai Pilihan ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Perbarui Urutan Atribut dari Nilai Pilihan Standar</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Perbarui Urutan Atribut Semua Produk</strong><br />untuk menyesuaikan Urutan Standar Nilai Pilihan:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Pengurut Nama Pilihan');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Pengendali Atribut');

// generic model
  define('TEXT_MODEL','Model:');
  define('TEXT_PRODUCTS_MODEL', 'Model Produk:');
  define('TABLE_HEADING_PRODUCTS_MODEL','Model');
  define('TABLE_HEADING_MODEL', 'Model');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Pengendali Kotak Layout');

// check GV release queue and alert store owner
  define('TEXT_SHOW_GV_QUEUE','%s menunggu persetujuan ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Antri');
  define('IMAGE_ORDER','Urutan');

  define('IMAGE_DISPLAY','Tampilan');
  define('IMAGE_EDIT_PRODUCT','Edit Produk');
  define('IMAGE_EDIT_ATTRIBUTES','Edit Atribut');
  define('TEXT_NEW_PRODUCT', 'Produk  dalam Kategori: %s');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Kurangi jumlah');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Persen');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Harga Baru');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Minimum:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Satuan:');

  define('TEXT_PRODUCTS_MIX_OFF','*Tidak Ada Pilihan Campuran');
  define('TEXT_PRODUCTS_MIX_ON','*Ada Pilihan Campuran');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filter Pencarian: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Cari: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Cari Produk - Pisahkan dengan koma');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Cari Nama/Model Produk');

  define('PREV_NEXT_PRODUCT', 'Produk: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Kategori Dinon-aktifkan</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Produk Dinon-aktifkan</span>');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','<span class="alertVersionNew">Versi Baru Tersedia:</span> v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','<span class="alertVersionNew">PERBAIKAN (PATCH) Baru Tersedia:</span> v');
  define('TEXT_VERSION_CHECK_PATCH','perbaikan (patch)');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Unduh Disini');
  define('TEXT_VERSION_CHECK_CURRENT','Versi Zen Cart&trade; Anda sudah yang paling baru.');
  define('ERROR_CONTACTING_PROJECT_VERSION_SERVER','Kesalahan: Tidak dapat mengontak Server Versi Proyek');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Tampilkan <b>%d</b> sampai <b>%d</b> (dari <b>%d</b> pengunduhan)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Pengelola Pengunduhan');

define('BOX_CATALOG_FEATURED', 'Produk Unggulan');

define('ERROR_NOTHING_SELECTED', 'Tidak ada yang dipilih ... Tidak ada perubahan yang dibuat');
define('TEXT_STATUS_WARNING', '<strong>CATATAN:</strong> status diaktifkan/dinon-aktifkan secara otomatis ketika tanggal diatur');

define('TEXT_LEGEND_LINKED', 'Produk Tertaut');
define('TEXT_MASTER_CATEGORIES_ID', 'Kategori Utama Produk:');
define('TEXT_LEGEND', 'LEGENDA: ');
define('TEXT_LEGEND_STATUS_OFF', 'Status MATI ');
define('TEXT_LEGEND_STATUS_ON', 'Status HIDUP ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>CATATAN: Kategori Utama digunakan untuk tujuan penentuan harga dimana<br />kategori produk mempengaruhi penentuan harga pada produk tertaut, misal: Penjualan</strong>');
define('TEXT_YES', 'Ya');
define('TEXT_NO', 'Tidak');
define('TEXT_CANCEL', 'Batal');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Kesalahan Konfigurasi Pengiriman!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Peringatan:</strong> Kode Pos untuk Toko belum ditentukan. Lihat Konfigurasi->Pengiriman/Pemaketan untuk menentukannya.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Peringatan:</strong> Berat 0 weight dikonfigurasikan untuk Pengiriman Gratis dan Modul Pengiriman Gratis tidak diaktifkan');
define('ERROR_USPS_STATUS', '<strong>Peringatan:</strong> Modul pengiriman USPS telah kehilangan nama pengguna atau telah diatur sebagai PERCOBAAN daripada PRODUKSI dab tidak akan bekerja.<br>Jika Anda tidak dapat menerima Penentuan Harga Pengiriman USPS, hubungi USPS untuk mengaktifkan akun Web Tools Anda pada server produksi mereka. Hubungi mereka melalui 1-800-344-7779 atau icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'CATATAN: Anda tidak memiliki modul pengiriman yang diaktifkan. Silakan ke Modul->Pengiriman untuk mengatur.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'CATATAN: Anda tidak memiliki modul pembayaran yang diaktifkan. Silakan ke Modul->Pembayaran untuk mengatur.');

// text pricing
define('TEXT_CHARGES_WORD','Biaya Terhitung:');
define('TEXT_PER_WORD','<br>Harga per kata: ');
define('TEXT_WORDS_FREE',' Kata gratis ');
define('TEXT_CHARGES_LETTERS','Biaya Terhitung:');
define('TEXT_PER_LETTER','<br>Harga per huruf: ');
define('TEXT_LETTERS_FREE',' Huruf Gratis ');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','JML');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','HARGA');
define('TEXT_CATEGORIES_PRODUCTS', 'Pilih Kategori dengan Produk (indikasi oleh asterik) / pindahkan antara Produk');
define('TEXT_PRODUCT_TO_VIEW', 'Pilih Sebuah Produk untuk Dilihat dan Tekan Tampilkan ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID Kategori Utama Tidak Valid');
define('TEXT_INFO_ID', ' ID# ');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Hubungi Kami untuk Harga Produk ini');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Produk Gratis');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Maks:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Hemat:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% off');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;off');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Obral:&nbsp;');

define('TEXT_PRICED_BY_ATTRIBUTES', 'Harga berdasarkan Atribut');

// Rich Text / HTML resources
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Catatan: Anda mengunakan email TEKS saja. Jika Anda ingin mengirimkan email HTML Anda harus mengaktifkan "gunakan MIME HTML" pada bagian Pilhan Email</span>');
define('ENTRY_EMAIL_PREFERENCE','Format Awalan Email:');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Hanya TEKS');
define('ENTRY_NOTHING_TO_SEND','Anda belum mengetikkan isi untuk pesan Anda');
define('EMAIL_SEND_FAILED','KESALAHAN: Gagal mengirimkan email ke: "%s" <%s> dengan judul: "%s"');
define('EMAIL_SALUTATION', 'Yang Terhormat');

  define('EDITOR_NONE', 'Teks Murni');
  define('TEXT_EDITOR_INFO', 'Editor Teks');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Anda memiliki sebuah editor HTML yang dipilih pada \'Toko Saya\' akan tetapi direktori \'/editors/\' tidak dapat ditemukan. Silakan non-aktifkan pemilihan Anda atau pindahkan berkas-berkas editor Anda ke dalam direktori \''.DIR_WS_CATALOG.'editors/\'');

define('TEXT_PRODUCT_POPUP_BUTTON', '<i class="fa fa-commenting"></i>');
define('TEXT_PRODUCT_POPUP_TITLE', 'Produk Dipesan');

  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Urutan Tampilan Kategori/Produk: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Susunan Pengurutan Produk, Nama Produk');
  define('TEXT_SORT_PRODUCTS_NAME', 'Nama Produk');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Model Produk');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Jml Produk+, Nama Produk');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Jml Produk-, Nama Produk');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Harga Produk+, Nama Produk');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Harga Produk-, Nama Produk');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Susunan Pengurutan Kategori, Nama Kategori');
  define('TEXT_SORT_CATEGORIES_NAME', 'Nama Kategori');

  define('TABLE_HEADING_YES','Ya');
  define('TABLE_HEADING_NO','Tidak');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Atau, pilih sebuah berkas gambar yang telah ada dari server, nama berkas:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Timpa (Overwrite) Gambar yang Sudah Ada pada Server?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','PERINGATAN: NAMA BERKAS telah diperbarui tetapi tidak ditimpa (overwrite) ');
  define('TEXT_IMAGES_DELETE', '<strong>Hapus Gambar?</strong> CATATAN: Menghapus Gambar dari Produk, Gambar TIDAK dihapus dari server:');
  define('TEXT_IMAGE_CURRENT', 'Nama Gambar: ');
  define('TEXT_IMAGE_NONEXISTENT', 'FILE GAMBAR TIDAK ADA');

  define('ERROR_DEFINE_OPTION_NAMES', 'Peringatan: Tidak ada Nama Pilihan yang telah ditentukan');
  define('ERROR_DEFINE_OPTION_VALUES', 'Peringatan: Tidak ada Nilai Pilihan yang telah ditentukan');
  define('ERROR_DEFINE_PRODUCTS', 'Peringatan: Tidak ada produk yang telah ditentukan');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Peringatan: Tidak ada ID Kategori Utama yang telah diatur untuk Produk ini');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Tambahkan termasuk SubKategori');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Tambahkan Tanpa SubKategori');

  define('BUTTON_PREVIOUS_ALT','Produk Sebelumnya');
  define('BUTTON_NEXT_ALT','Produk Berikutnya');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Pengelola Tautan Banyak Kategori');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Semua Status Fitur Global Salin, Tambahkan dan Hapus sedang TIDAK AKTIF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Fitur Global Tampilan - AKTIF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Fitur Global Tampilan - TIDAK AKTIF');
// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Kesalahan: Tidak dapat mentautkan produk dalam kategori yang sama.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Kesalahan: Direktori gambar katalog tidak dapat ditulisi: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Kesalahan: Direktori gambar katalog tidak ada: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Kesalahan: Kategori tidak dapat dipindahkan ke dalam kategori dibawahnya (kategori anak).');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Kesalahan: Tidak dapat memindahkan produk ke kategori yang samaatau ke dalam kategori dimana produk tersebut sudah ada.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Kesalahan: Kategori memiliki Produk!<br /><br />Meski hal ini dapat dilakukan untuk sementara untuk membuat Kategori-kategori Anda ... Kategori dapat berisi Produk atau Kategori lainnya tetapi tidak keduanya sekaligus!');
  define('SUCCESS_CATEGORY_MOVED', 'Berhasil! Kategori telah berhasil dipindahkan ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Kesalahan: Tidak dapat memindahkan Kategori ke Kategori yang sama! ID#');

// messages for function zen_copy_products_attributes
  define('WARNING_ATTRIBUTE_COPY_SAME_ID','Peringatan: Atribut Copy dibatalkan. Tidak dapat meng-Copy dari Produk ID#%u ke Produk ID#%u (ID Sama).');
  define('WARNING_ATTRIBUTE_COPY_NO_ATTRIBUTES','Peringatan: Atribut Copy dibatalkan. Tidak ada Atribut untuk sumber Produk ID#%u, "%s".');
  define('WARNING_ATTRIBUTE_COPY_INVALID_ID','Peringatan: Atribut Copy Produk ID#%u dibatalkan. ID tidak Valid');
  define('TEXT_ATTRIBUTE_COPY_SKIPPING','Lewati Atribut ID#%u untuk Produk ID#%u');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','Atribut ID#%u di-copy dari Produk ID#%u ke Produk ID#%u');
  define('TEXT_ATTRIBUTE_COPY_UPDATING', 'Atribut ID#%u di-update untuk Produk ID#%u');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'PERINGATAN: EZ-PAGES HEADER - Aktif hanya untuk IP Admin');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'PERINGATAN: EZ-PAGES FOOTER - Aktif hanya untuk IP Admin');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'PERINGATAN: EZ-PAGES SIDEBOX - Aktif hanya untuk IP Admin');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Peringatan: Produk ini telah ditandai - Pengiriman Gratis dan Abaikan Alamat Pengiriman<br />Tidak ada pengiriman yang akan diminta jika semua produk dalam pesanan adalah Produk Virtual');
  define('TEXT_VIRTUAL_EDIT','Peringatan: Produk ini telah ditandai - Pengiriman Gratis dan Abaikan Alamat Pengiriman<br />Tidak ada pengiriman yang akan diminta jika semua produk dalam pesanan adalah Produk Virtual');
  define('TEXT_FREE_SHIPPING_PREVIEW','Peringatan: Produk ini telah ditandai - Pengiriman Gratis, Alamat Pengiriman Dibutuhkan<br />Modul Pengiriman Gratis dibutuhkan apabila semua produk dalam pesanan adalah Produk Selalu Gratis Pengiriman');
  define('TEXT_FREE_SHIPPING_EDIT','Peringatan: Ya buat produk - Pengiriman Gratis, Alamat Pengiriman Dibutuhkan<br />Modul Pengiriman Gratis dibutuhkan jika semua produk dalam pesanan adalah Produk Selalu Gratis Pengiriman');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'PERINGATAN: Tabel Catatan Aktifitas Admin telah memiliki cattatan yang memiliki usia diatas 2 bulan dan harus dibersihkan ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'PERINGATAN: Tabel Catatan Aktifitas Admin telah memiliki lebih dari 50,000 catatan dan harus dibersihkan ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Anda dapat melihat dan mengarsipkan detail aktifitas admin melalui Menu Akses Managemen, jika anda memiliki izin.');
  define('TEXT_ACTIVITY_LOG_ACCESSED', 'Mengakses Log Aktifitas Admin. Format output: %s. Filter: %s. %s');
  define('TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER', 'Upaya login admin gagal: ');
  define('TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT', 'mencoba untuk login akun terkunci:');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN', 'Percobaan login tanpa token CSRF.');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME', 'Percobaan login tanpa nama pengguna.');
  define('TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER', 'Password salah selama percobaan reset password untuk: ');


  define('CATEGORY_HAS_SUBCATEGORIES', 'CATATAN: Kategori ini memiliki SubKategori<br />Produk tidak dapat ditambahkan');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'PERINGATAN! Kupon Diskon Welcome Email berakhir dalam %s hari');

define('WARNING_EMAIL_SYSTEM_DISABLED', 'PERINGATAN: subsistem email dimatikan. Tidak ada email akan dikirim sampai itu diaktifkan kembali di Admin->Konfigurasi->Pilihan Email.');
define('WARNING_EMAIL_SYSTEM_DEVELOPER_OVERRIDE', 'PERINGATAN: Pengiriman email telah di disable sebagai developer pindah "DEVELOPER_OVERRIDE_EMAIL_STATUS" di set ke "false".');
define('WARNING_EMAIL_SYSTEM_DEVELOPER_EMAIL', 'PERINGATAN: semua email akan dikirim ke %s (seperti di defenisikan dalam "DEVELOPER_OVERRIDE_EMAIL_ADDRESS").');
define('TEXT_CURRENT_VER_IS', 'Anda saat ini menggunakan: ');
define('ERROR_NO_DATA_TO_SAVE', 'KESALAHAN: Data yang Anda kirimkan ditemukan kosong. PERUBAHAN ANDA * TIDAK * DISIMPAN. Anda mungkin memiliki masalah dengan browser atau koneksi internet Anda.');
define('TEXT_HIDDEN', 'Sembunyikan');
define('TEXT_VISIBLE', 'Terlihat');
define('TEXT_HIDE', 'Sembunyi');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'Jangan Email');

define('BOX_HEADING_PRODUCT_TYPES', 'Tipe Produk');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Tampaknya ada masalah dengan database. Diperlukan perawatan.</a>');

// moved from currencies file:
define('TEXT_INFO_CURRENCY_UPDATED', 'Nilai tukar untuk %s (%s) telah berhasil di update ke %s via %s.');
define('ERROR_CURRENCY_INVALID', 'Kesalahan: Nilai Tukar untuk %s (%s) tidak di update via %s. Apakah ini kode mata uang valid?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Peringatan: Nilai tukar server primer (%s) salah untuk  %s (%s) - coba server nilai tukar sekunder.');

// Set to empty string if alpha sorting not desired
define('MENU_CATEGORIES_TO_SORT_BY_NAME','laporan, alat'); 

// Plugins
define('PLUGIN_INSTALL_SQL_FAILURE', 'satu atau lebih kesalahan database terjadi');

// ARIA Stuff

define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Paginasi');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Paginasi'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Ke Halaman Sebelumnya');
define('ARIA_PAGINATION_NEXT_PAGE','Ke Halaman Berikutnya');
define('ARIA_PAGINATION_CURRENT_PAGE','Halaman Saat ini');
define('ARIA_PAGINATION_CURRENTLY_ON',', sekarang di halaman %s');
define('ARIA_PAGINATION_GOTO','Ke ');
define('ARIA_PAGINATION_PAGE_NUM','Halaman %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Dapatkan halaman grup sebelumnya');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Dapatkan grup halaman');
define('ARIA_PAGINATION_','');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . "/" . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES));
