<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2019 Aug 22 Modified in v1.5.7 $
 */

define('NAVBAR_TITLE', 'Buat Sebuah Akun');

define('HEADING_TITLE', 'Informasi Akun Saya');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">CATATAN:</strong> Jika Anda sudah memiliki sebuah akun pada situs kami, silakan login pada <a href="%s">halaman login</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Terima Kasih, Permintaan Akun anda telah dikirim untuk diulas.');


// greeting salutation
define('EMAIL_SUBJECT', 'Selamat datang di ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Hallo Bapak %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Hallo Ibu %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Hallo %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Kami mengucapkan selamat datang kepada Anda ke <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Selamat! Untuk membuat kunjungan Anda berikutnya ke toko online kami menjadi sebuah pengalaman yang lebih berharga, dibawah ini adalah daftar detail untuk sebuah Kupon Diskon yang diciptakan khusus hanya untuk Anda!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Untuk menggunakan Kupon Diskon, ketikkan kode ' . TEXT_GV_REDEEM . ' ketika telah selesai berbelanja:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Kupon valid antara %s dan %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Khusus untuk hari ini, kami telah mengirimkan kepada Anda sebuah ' . TEXT_GV_NAME . ' untuk %s!' . "\n");
define('EMAIL_GV_REDEEM', TEXT_GV_NAME . ' yang Anda lakukan ' . TEXT_GV_REDEEM . ' adalah: %s ' . "\n\n" . 'Anda dapat mengetikkan ' . TEXT_GV_REDEEM . ' ketika telah selesai berbelanja, setelah ANda memilih barang-barang yang ingin Anda beli pada toko kami. ');
define('EMAIL_GV_LINK', ' Atau, Anda dapat menebusnya sekarang dengan mengikuti tautan berikut ini: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Apabila Anda telah menambahkan ' . TEXT_GV_NAME . ' pada akun Anda, Anda dapat menggunakan ' . TEXT_GV_NAME . ' tersebut untuk diri Anda, atau memberikannya kepada seorang teman!' . "\n\n");

define('EMAIL_TEXT', 'Dengan akun yang telah Anda miliki sekarang, Anda dapat menggunakan <strong>beragam layanan</strong> yang telah kami tawarkan kepada Anda. Layanan-layanan ini termasuk:' . "\n\n" . '<li><strong>Troli Permanen</strong> - Tiap produk yang telah ditambahkan ke dalam Troli online Anda akan tetap berada disana sampai Anda menghapus mereka, atau menyelesaikan pembeliannya.' . "\n\n" . '<li><strong>Buku Alamat</strong> - Sekarang kami dapat mengirimkan produk Anda ke alamat yang lainnya selain dari alamat Anda! Hal ini sangat bagus sekali untuk mengirimkan hadiah langsung kepada orang lain yang Anda ingin kirimkan hadiah tersebut kepadanya.' . "\n\n" . '<li><strong>Riwayat Pesanan</strong> - Lihat riwayat pembelian Anda yang telah Anda lakukan pada toko kami.' . "\n\n" . '<li><strong>Ulasan Produk</strong> - Bagi pendapat Anda mengenai produk-produk dengan pelanggan-pelanggan kami lainnya.' . "\n\n");
define('EMAIL_CONTACT', 'Untuk mendapatkan bantuan mengenai layanan online kami, silakan kirimkan email kepada pemilik toko: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Hormat kami,' . "\n\n" . STORE_OWNER . "\nPemilik Toko\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Alamat email ini telah diberikan kepada kami oleh Anda atau oleh salah satu dari pelanggan kami. JIka Anda tidak mendaftarkan diri Anda untuk mendapatkan sebuah akun pada situs kami, atau Anda merasa bahwa Anda telah menerima email ini dalam kesalahan, silakan kirimkan sebuah email kepada kami ke %s ');
