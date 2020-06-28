<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 21 Modified in v1.5.7 $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Hak Cipta &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Diberdayakan oleh <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
  $locales = array('id_ID.UTF-8', 'id_ID', 'Indonesian_indonesia.1252', 'id'');
  @setlocale(LC_TIME, $locales);
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'd/m/Y'); // this is used for date()

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'IDR');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="id"');

// charset for web pages and emails
  define('CHARSET', 'utf-8');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Kupon Hadiah');
  define('TEXT_GV_NAMES','Kupon-kupon Hadiah');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Kode Penebusan');

// text for gender
  define('MALE', 'Bapak');
  define('FEMALE', 'Ibu');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[lengkap]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Kategori');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Produsen');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Produk Baru');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Produk Baru ...');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Unggulan');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Produk Unggulan ...');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Lebih banyak produk unggulan akan ditambahkan segera. Silakan periksa kembali nanti.');

  define('TEXT_NO_ALL_PRODUCTS', 'Lebih banyak produk akan ditambahkan segera. Silakan periksa kembali nanti.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Semua Produk ...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Cari');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Pencarian Spesifik');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Spesial');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Spesial ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Ulasan');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Tulis ulasan mengenai produk ini.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Tidak ada ulasan produk untuk saat ini.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s dari 5 Bintang!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Troli Belanja');
  define('BOX_SHOPPING_CART_EMPTY', 'Troli Anda kosong.');
  define('BOX_SHOPPING_CART_DIVIDER', 'ea.-&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Pesan Kembali dengan Cepat');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Paling Laku Terjual');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Pemberitahuan');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Beritahu saya tentang perbaruan untuk <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Jangan beritahu saya tentang perbaruan untuk <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Informasi Pembuat');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Situs Web %s');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Produk lainnya');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Bahasa');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Mata Uang');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Informasi');
  define('BOX_INFORMATION_PRIVACY', 'Pernyataan Privasi');
  define('BOX_INFORMATION_CONDITIONS', 'Persyaratan Penggunaan');
  define('BOX_INFORMATION_SHIPPING', 'Pengiriman &amp; Pengembalian');
  define('BOX_INFORMATION_CONTACT', 'Hubungi Kami');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Berhenti Berlangganan Buletin');

  define('BOX_INFORMATION_SITE_MAP', 'Peta Situs');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Informasi Lebih Lanjut');
  define('BOX_INFORMATION_PAGE_2', 'Halaman 2');
  define('BOX_INFORMATION_PAGE_3', 'Halaman 3');
  define('BOX_INFORMATION_PAGE_4', 'Halaman 4');

//New billing address text
  define('SET_AS_PRIMARY' , 'Buat sebagai Alamat Utama');

// javascript messages
  define('JS_ERROR', 'Beberapa kesalahan telah terjadi selama pemrosesan formulir Anda.\n\nMohon lakukan pembetulan pada beberapa hal berikut ini:\n\n');

  define('JS_REVIEW_TEXT', '* Silakan tambahkan lebih banyak kata ke dalam komentar Anda. Ulasan ini harus memiliki sedikitnya ' . REVIEW_TEXT_MIN_LENGTH . ' karakter.');
  define('JS_REVIEW_RATING', '* Silakan pilih peringkat untuk produk ini.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Silakan pilih sebuah cara pembayaran untuk pemesanan Anda.');

  define('JS_ERROR_SUBMITTED', 'Formulir ini telah dikirim. Silakan tekan tombol OK dan tunggu sampai proses ini diselesaikan.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Silakan pilih sebuah cara pembayaran untuk pemesanan Anda.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Silakan konfirmasikan ketentuan dan persyaratan yang mengikat pemesanan ini dengan mencentang kotak dibawah.'); // todo: diperiksa kembali
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Silakan konfirmasikan pernyataan privasi dengan mencentang kotak dibawah.'); // todo: diperiksa kembali

  define('CATEGORY_COMPANY', 'Informasi Perusahaan');
  define('CATEGORY_PERSONAL', 'Informasi Pribadi Anda');
  define('PULL_DOWN_DEFAULT', 'Silakan Pilih Negara Anda');
  define('PLEASE_SELECT', 'Silakan pilih ...');
  define('TYPE_BELOW', 'Ketikkan sebuah pilihan di bawah ...'); // todo: diperiksa kembali

  define('ENTRY_COMPANY', 'Nama Perusahaan:');
  define('ENTRY_COMPANY_ERROR', 'Silakan ketikkan nama perusahaan Anda.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Jenis Kelamin:');
  define('ENTRY_GENDER_ERROR', 'Silakan pilih jenis kelamin Anda.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Nama Depan:');
  define('ENTRY_FIRST_NAME_ERROR', 'Apakah nama depan Anda benar? Jumlah minimal karakter yang diperbolehkan oleh sistem kami untuk nama depan adalah ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakter. Silakan Anda coba sekali lagi.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Nama Belakang:');
  define('ENTRY_LAST_NAME_ERROR', 'Apakah nama belakang Anda benar? Jumlah minimal karakter yang diperbolehkan oleh sistem kami untuk nama belakang adalah ' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakter. Silakan Anda coba sekali lagi.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Tanggal Lahir:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Apakah tanggal lahir Anda benar? Sistem kami hanya memperbolehkan penulisan tanggal dalam bentuk seperti ini: MM/DD/YYYY (misalnya 05/21/1970 untuk 21 Mei 1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (misalnya 05/21/1970 untuk 21 Mei 1970)');
  define('ENTRY_EMAIL_ADDRESS', 'Alamat Email:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Apakah alamat email Anda benar? Alamat email harus memiliki sedikitnya ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakter. Silakan Anda coba sekali lagi.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Maaf, sistem kami tidak mengerti alamat email Anda. Silakan Anda coba sekali lagi.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Sistem kami  telah memiliki sebuah data yang tercatat dengan alamat email tersebut - silakan Anda mencoba login dengan menggunakan alamat email tersebut. Jika Anda sudah tidak menggunakan alamat email tersebut lagi silakan Anda membetulkannya di halaman Akun Saya.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Nama Alias (Nick Name) untuk Forum:');
  define('ENTRY_NICK_TEXT', '*'); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', 'Nama Alias tersebut sudah digunakan oleh orang lain. Silakan Anda coba nama yang lain.');
  define('ENTRY_STREET_ADDRESS', 'Alamat:');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Alamat Anda harus memiliki sedikitnya ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' karakter.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Alamat (Baris Kedua):');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Kode Pos:');
  define('ENTRY_POST_CODE_ERROR', 'Kode Pos Anda harus memiliki sedikitnya ' . ENTRY_POSTCODE_MIN_LENGTH . ' karakter.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Kota:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Kode Penyerahan (Referral Code):');

  define('ENTRY_CITY_ERROR', 'Kota Anda harus memiliki sedikitnya ' . ENTRY_CITY_MIN_LENGTH . ' karakter.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Propinsi:');
  define('ENTRY_STATE_ERROR', 'Propinsi Anda harus memiliki sedikitnya ' . ENTRY_STATE_MIN_LENGTH . ' karakter.');
  define('ENTRY_STATE_ERROR_SELECT', 'Silakan pilih sebuah propinsi dari menu pull-down Propinsi.');
  define('ENTRY_STATE_TEXT', '*');
  define('ENTRY_COUNTRY', 'Negara:');
  define('ENTRY_COUNTRY_ERROR', 'Anda harus memilih sebuah negara dari menu pull-down Negara.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Telepon:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Nomor Telepon Anda harus memiliki sedikitnya ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karakter.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Fax:');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Daftar Berlangganan Buletin.');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_PASSWORD', 'Kata Sandi:');
  define('ENTRY_PASSWORD_ERROR', 'Kata sandi Anda harus memiliki sedikitnya ' . ENTRY_PASSWORD_MIN_LENGTH . ' karakter.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Kata Sandi Konfirmasi harus sama dengan Kata Sandi Anda.');
  define('ENTRY_PASSWORD_TEXT', '* (sedikitnya ' . ENTRY_PASSWORD_MIN_LENGTH . ' karakter)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Konfirmasi Kata Sandi:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Kata Sandi Saat Ini:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_NEW', 'Kata Sandi Baru:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Kata Sandi baru Anda harus memiliki sedikitnya ' . ENTRY_PASSWORD_MIN_LENGTH . ' karakter.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Kata Sandi Konfirmasi harus sama dengan Kata Sandi baru Anda.');

  define('FORM_REQUIRED_INFORMATION', '* Harus diisi');
  define('ENTRY_REQUIRED_SYMBOL', '*');
  define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="alert">*</span>');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Menampilkan produk <strong>%d</strong> sampai <strong>%d</strong> dari <strong>%d</strong> produk');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Menampilkan pesanan <strong>%d</strong> sampai <strong>%d</strong> dari <strong>%d</strong> pesanan');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Menampilkan ulasan <strong>%d</strong> sampai <strong>%d</strong> dari <strong>%d</strong> ulasan');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Menampilkan produk <strong>%d</strong> sampai <strong>%d</strong> dari <strong>%d</strong> produk baru');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Menampilkan produk <strong>%d</strong> sampai <strong>%d</strong> dari <strong>%d</strong> produk spesial');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Menampilkan produk <strong>%d</strong> sampai <strong>%d</strong> dari <strong>%d</strong> produk utama');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Menampilkan produk <strong>%d</strong> sampai <strong>%d</strong> dari <strong>%d</strong> produk');

  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Halaman Sebelumnya');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Halaman Berikutnya');
  define('PREVNEXT_TITLE_PAGE_NO', 'Halaman %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Kumpulan Sebelumnya dari %d Halaman');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Kumpulan Berikutnya dari %d Halaman');
  define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Sebelumnya]');
  define('PREVNEXT_BUTTON_NEXT', '[Berikutnya&nbsp;&gt;&gt;]');

define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Pagination');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Pagination'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Go to Previous Page');
define('ARIA_PAGINATION_NEXT_PAGE','Go to Next Page');
define('ARIA_PAGINATION_CURRENT_PAGE','Current Page');
define('ARIA_PAGINATION_CURRENTLY_ON',', now on page %s');
define('ARIA_PAGINATION_GOTO','Go to ');
define('ARIA_PAGINATION_PAGE_NUM','Page %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Get previous group of pages');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Get next group of pages');
define('ARIA_PAGINATION_','');

  define('TEXT_BASE_PRICE','Mulai dari: ');

  define('TEXT_CLICK_TO_ENLARGE', 'perbesar gambar');

  define('TEXT_SORT_PRODUCTS', 'Urutkan produk ');
  define('TEXT_DESCENDINGLY', 'menurun');
  define('TEXT_ASCENDINGLY', 'menaik');
  define('TEXT_BY', ' secara ');

  define('TEXT_REVIEW_BY', 'oleh %s');
  define('TEXT_REVIEW_DATE_ADDED', 'Tanggal Dibuat: %s');
  define('TEXT_NO_REVIEWS', 'Tidak ada ulasan produk untuk saat ini.');

  define('TEXT_NO_NEW_PRODUCTS', 'Lebih banyak produk baru akan ditambahkan segera. Silakan periksa kembali nanti.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Pajak Penjualan');

  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'PERINGATAN: Tidak dapat mengalokasi file bahasa: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Tanggal kadaluarsa yang diberikan untuk kartu kredit tidak valid. Silakan periksa tanggal tersebut dan coba sekali lagi.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Nomor kartu kredit yang diberikan tidak valid. Silakan periksa nomor kartu kredit tersebut dan coba sekali lagi.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Nomor kartu kredit yang dimulai dengan %s tidak dituliskan dengan benar, atau kami tidak menerima kartu tersebut. Silakan coba sekali lagi atau gunakan kartu kredit yang lain.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Kupon Diskon');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
  define('VOUCHER_BALANCE', ' Neraca ' . TEXT_GV_NAME);
  define('BOX_HEADING_GIFT_VOUCHER', 'Akun ' . TEXT_GV_NAME);
  define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
  define('ERROR_REDEEMED_AMOUNT', 'Selamat, Anda telah menebus ');
  define('ERROR_NO_REDEEM_CODE', 'Anda tidak mengetikkan sebuah ' . TEXT_GV_REDEEM . '.');
  define('ERROR_NO_INVALID_REDEEM_GV', TEXT_GV_REDEEM . TEXT_GV_NAME . ' tidak valid' );
  define('TABLE_HEADING_CREDIT', 'Kredit Tersedia');

  define('TEXT_SEND_OR_SPEND','You have a balance available in your ' . TEXT_GV_NAME . ' account. You may spend it or send it to someone else. To send click the button below.');
  define('TEXT_BALANCE_IS', 'Your ' . TEXT_GV_NAME . ' balance is: ');
  define('TEXT_AVAILABLE_BALANCE', 'Your ' . TEXT_GV_NAME . ' Account');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Kupon/Sertifikat Hadiah');
  define('PAYMENT_MODULE_GV', 'GV/DC');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Kredit Tersedia');

//coupon redeem error messages (checkout payment)
  define('TEXT_COUPON_LINK_TITLE', 'see the Coupon conditions');
  define('TEXT_INVALID_REDEEM_COUPON', 'Coupon code "%s" is not a valid code.');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Anda harus membelanjakan sedikitnya %s untuk menebus kupon ini');
  define('TEXT_INVALID_COUPON_PRODUCT', 'The Coupon "%1$s" is not valid for any product in your shopping cart.');
  define('TEXT_INVALID_COUPON_ORDER_LIMIT', 'You have exceeded the total number of orders permitted (%2$u), to use the Coupon "%1$s".');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Kupon ini belum tersedia');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'Kupon ini telah kadaluarsa');
  define('TEXT_INVALID_USES_COUPON', 'Kupon ini hanya dapat digunakan ');
  define('TEXT_INVALID_USES_USER_COUPON', 'Anda telah menggunakan kode kupon: %s jumlah maksimum yang diizinkan untuk tiap pelanggan. ');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Kode kupon yang Anda berikan tidak valid untuk alamat yang telah Anda pilih.');
  define('TEXT_ERROR', 'Sebuah kesalahan telah terjadi');

  define('TEXT_VALID_COUPON', 'Selamat! Anda telah menebus Kupon Diskon');


// more info in place of buy now
  define('MORE_INFO_TEXT','... info lebih lanjut');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','Alamat IP Anda adalah: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Informasi Alamat');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Jumlah dalam Troli: ');
  define('PRODUCTS_ORDER_QTY_TEXT','Tambahkan ke Troli: ');
  define('ARIA_QTY_ADD_TO_CART','Enter quantity to add to cart');
  define('ARIA_EDIT_QTY_IN_CART','Edit quantity in cart');
  define('ARIA_DELETE_ITEM_FROM_CART', 'Delete this item from the cart');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Berhasil menambahkan Produk ke dalam Troli ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Berhasil menambahkan Produk yang telah dipilih ke dalam Troli ...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','Kg');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','Kg');
  define('TEXT_SHIPPING_BOXES', 'Kotak');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Hemat:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Obral:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Sponsor');
  define('TEXT_BANNER_BOX','Silakan Kunjungi Sponsor-sponsor Kami ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Sudahkah Anda Lihat');
  define('TEXT_BANNER_BOX2','Periksa ini sekarang!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Sponsor');
  define('TEXT_BANNER_BOX_ALL','Silakan Kunjungi Sponsor-sponsor Kami ...');

// boxes defines
  define('PULL_DOWN_ALL','Silakan Pilih');
  define('PULL_DOWN_MANUFACTURERS','- Reset -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Silakan Pilih');

// general Sort By
  define('TEXT_INFO_SORT_BY','Urutkan berdasarkan: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Klik Gambar untuk Menutup Jendela');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Tutup Jendela ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', 'Kesalahan: Tipe berkas tidak diperbolehkan.');
  define('WARNING_NO_FILE_UPLOADED', 'Peringatan: tidak ada berkas yang di-upload.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Berhasil: Berkas berhasil disimpan.');
  define('ERROR_FILE_NOT_SAVED', 'Kesalahan: Berkas tidak disimpan.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'Kesalahan: direktori tujuan tidak dapat ditulisi.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Kesalahan: direktori tujuan tidak ada.');
  define('ERROR_FILE_TOO_BIG', 'Peringatan: Berkas terlalu besar untuk di-upload!<br />Pesanan dapat disimpan tetapi mohon hubungi pengelola situs untuk bantuan dengan masalah upload');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'PEMBERITAHUAN: Situs ini dijadwalkan untuk tutup untuk pemeliharaan pada: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'PEMBERITAHUAN: Situs ini saat ini sedang tutup untuk pemeliharaan');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','Gratis!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Untuk Harga Hubungi Kami');
  define('TEXT_CALL_FOR_PRICE','Untuk Harga Hubungi kami');

  define('TEXT_INVALID_SELECTION',' Anda memilih Pilihan yang Tidak Valid: ');
  define('TEXT_ERROR_OPTION_FOR',' Pada Pilihan untuk: ');
  define('TEXT_INVALID_USER_INPUT', 'Masukan Pengguna Dibutuhkan<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Satuan:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Maks:');
  define('TEXT_PRODUCT_MODEL', 'Model: ');
  define('TABLE_HEADING_MODEL', 'Model');

  define('TEXT_PRODUCTS_MIX_OFF','*Campuran TIDAK AKTIF');
  define('TEXT_PRODUCTS_MIX_ON','*campuran AKTIF');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br>*Anda tidak dapat mencampur opsi pada item ini untuk memenuhi persyaratan kuantitas minimum.*<br>');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Nilai-nilai Pilihan Campuran AKTIF<br>');

  define('ERROR_MAXIMUM_QTY','Jumlah Disesuaikan - Jumlah Maksimum telah Ditambahkan ke dalam Troli ');
  define('ERROR_CORRECTIONS_HEADING','Silakan perbaiki hal-hal berikut ini: <br>');
  define('ERROR_QUANTITY_ADJUSTED', 'Penyesuaian Kesalahan Jumlah<br>');
  define('ERROR_QUANTITY_CHANGED_FROM', ', telah berubah dari: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' menjadi ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTE: Downloads are not available until payment has been confirmed');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_KBS', ' KB');
  define('TEXT_FILESIZE_MEGS', ' MB');
  define('TEXT_FILESIZE_UNKNOWN', 'Tidak Diketahui');

// shopping cart errors
  define('ERROR_PRODUCT','<br>Item: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br>Kami minta maaf akan tetapi produk ini telah dihapus dari daftar kami pada saat ini.<br>Produk ini telah dihapus dari Troli belanja Anda.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br>Item: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br />Mohon maaf karena opsi yang dipilih telah berubah untuk produk ini dan telah dihapus dari inventaris kami saat ini.<br />Item ini telah dihapus dari Troli belanja Anda.');
  define('ERROR_PRODUCT_QUANTITY_MIN','  ... Kesalahan Jumlah Minimum - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Kesalahan Satuan Jumlah - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br> ... Nilai Pilihan Tidak Valid telah Dipilih ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br> Anda memesan sejumlah: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Kesalahan Jumlah Maksimum - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' ... Kesalahan Jumlah Minimum - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Kesalahan Jumlah Satuan - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Kesalahan Jumlah Maksimum - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'PERHATIAN: Untuk kenyamanan anda, Troli belanja anda telah digabungkan dengan Troli belanja dari kunjungan terakhir. Silakan ulas Troli belanja anda sebelum ke checkout/ke kasir.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Kuantitas telah disesuaikan dengan apa yang ada di stok. ');
  define('OUT_OF_STOCK_CANT_CHECKOUT', 'Produk ditandai dengan ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' stoknya habis atau tidak cukup dalam stok untuk mengisi pesanan anda.<br />Silahkan ubah jumlah produk yang ditandai dengan (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Terima Kasih');
  define('OUT_OF_STOCK_CAN_CHECKOUT', 'Produk ditandai dengan ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' stoknya habis.<br />Item tersebut tidak ada dalam stok akan di letakkan pada Pesanan Kembali.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Informasi pelanggan tidak dapat divalidasi!<br />Silakan login atau buat ulang akun Anda ...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Produk Unggulan');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Produk Baru Untuk %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produk Mendatang');
  define('TABLE_HEADING_DATE_EXPECTED', 'Tanggal Perkiraan');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Produk Spesial untuk Bulan %s');

  define('CAPTION_UPCOMING_PRODUCTS','Item tersebut akan segera tersedia dalam stok');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Gratis!');

  define('ASK_A_QUESTION', 'Ask a question about this item');

// customer login
  define('TEXT_SHOWCASE_ONLY','Hubungi Kami');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Harga Tidak Tersedia');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Login untuk mengetahui harga');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Khusus Ruang Pamer');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Harga Tidak Tersedia');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'PERSETUJUAN DITUNDA');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Login untuk Berbelanja');
  define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Checkout Unavailable - Approval Pending');

// text pricing
  define('TEXT_CHARGES_WORD','Biaya Terhitung:');
  define('TEXT_PER_WORD','<br>Harga per kata: ');
  define('TEXT_WORDS_FREE',' Kata gratis ');
  define('TEXT_CHARGES_LETTERS','Biaya Terhitung:');
  define('TEXT_PER_LETTER','<br>Harga per surat: ');
  define('TEXT_LETTERS_FREE',' Surat gratis ');
  define('TEXT_ONETIME_CHARGES','*biaya satu kali saja = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*biaya satu kali saja = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Diskon Pilihan Jumlah');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','JML');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','HARGA');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Biaya Satu Kali Saja untuk Diskon Pilihan Jumlah');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' maksimum karakter yang diperbolehkan');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Hitung Biaya Pengiriman');
  define('CART_SHIPPING_METHOD_TEXT', 'Cara Pengiriman yang Tersedia');
  define('CART_SHIPPING_METHOD_RATES', 'Suku Bunga');
  define('CART_SHIPPING_METHOD_TO','Dikirim ke: ');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Pengiriman Gratis');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Unduh');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Alamat:');
  define('CART_ITEMS','Barang dalam Troli: ');
  define('ERROR_CART_UPDATE', '<strong>Silakan perbarui order Anda.</strong> ');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Maaf! Sesi Anda telah kadaluarsa ... Silakan perbarui Troli belanja Anda untuk Penentuan Pengiriman ...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Permintaan pengiriman berdasarkan informasi alamat yang anda pilih:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Tambahkan: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Tambahkan: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Tambahkan: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Tambahkan: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Potongan Harga untuk Diskon Jumlah');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Harga Baru untuk Diskon Jumlah');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Potongan Harga untuk Diskon Jumlah');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Diskon dapat bervariasi berdasarkan pilihan-pilihan diatas');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Diskon Jumlah Tidak Tersedia ...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- RESET - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nama Produk');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Nama Produk - menurun');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Harga - rendah ke tinggi');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Harga - tinggi ke rendah');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Model');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Tanggal Penambahan - Baru ke Lama');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Tanggal Penambahan - Lama ke Baru');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Tautan Kadaluarsa');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Tersisa');
  define('HEADING_DOWNLOAD', 'Untuk mengunduh berkas-berkas Anda klik tombol unduh dan pilih "Simpan ke Disk" dari menu popup yang muncul.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Nama berkas');
  define('TABLE_HEADING_PRODUCT_NAME','Nama barang');
  define('TABLE_HEADING_BYTE_SIZE','Ukuran Berkas');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Tak Terbatas');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('PAYMENT_JAVASCRIPT_DISABLED', 'Kami tidak dapat melanjutkan checkout bila Javascript di disable. Anda Harus meng-enable nya untuk melanjutkan');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Jml.');
  define('TABLE_HEADING_PRODUCTS', 'Nama Barang');
  define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Pernyataan Privasi');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Silakan nyatakan persetujuan Anda dengan pernyataan privasi kami dengan mencentang kotak berikut. Pernyataan privasi dapat dibaca <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">disini</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Saya telah membaca dan menyetujui pernyataan privasi Anda.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Detail Alamat');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Detail Kontak Tambahan');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Verifikasikan Usia Anda');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Detail Login');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Darimana Anda Mengetahui Tentang Kami?');

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Mohon ma\'af, tapi kami tidak lagi menerima alamat pembayaran atau pengiriman di "%s".  Silakan update alamat ini untuk melanjutkan.');

  define('ENTRY_EMAIL_PREFERENCE','Detail Email dan Buletin');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','TEKS-Saja');
  define('EMAIL_SEND_FAILED','KESALAHAN: Gagal mengirim email ke: "%s" <%s> dengan judul: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Kesalahan - Tidak dapat terhubung ke Database');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Sepertinya masalah muncul dengan database. Diperlukan perbaikan.</a>');

  // EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'PERINGATAN: EZ-PAGES HEADER - Aktif untuk IP Admin Saja');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'PERINGATAN: EZ-PAGES FOOTER - Aktif untuk IP Admin Saja');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'PERINGATAN: EZ-PAGES SIDEBOX - Aktif untuk IP Admin saja');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Produk dimulai dengan ...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Reset --');
  
// The following message, with the associated severity, is displayed in the storefront header when an admin has logged into
// a customer's account.

// -----
// init_customer_auth.php substitutes the customer's name (%$1s) and customer's email address (%$2s)
// into this message.
//
define('EMP_SHOPPING_FOR_MESSAGE', 'Saat ini berbelanja %1$s (%2$s).');

// -----
// Identify the messageStack "severity" to be applied to the above message, one of 'success',
// 'warning', 'caution', 'error' (defaults to 'success').
//
define('EMP_SHOPPING_FOR_MESSAGE_SEVERITY', 'sukses');

// Constants shared between multiple pages
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');

///////////////////////////////////////////////////////////

  $file_list = [FILENAME_EMAIL_EXTRAS, FILENAME_HEADER, FILENAME_BUTTON_NAMES, FILENAME_ICON_NAMES, FILENAME_OTHER_IMAGES_NAMES, FILENAME_CREDIT_CARDS, FILENAME_WHOS_ONLINE, FILENAME_META_TAGS];
  foreach ($file_list as $file) { 
    $file = str_replace(".php","",$file); 
    require_once(zen_get_file_directory(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . "/", $file . '.php', 'false'));
  }

// END OF EXTERNAL LANGUAGE LINKS
