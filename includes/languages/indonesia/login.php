<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'Login');
define('HEADING_TITLE', 'Selamat Datang, Silakan Daftar');

define('HEADING_NEW_CUSTOMER', 'Pelanggan Baru? Silakan Lengkapi Informasi Tagihan Anda');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Pelanggan Baru');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Buat sebuah profil login di <strong>' . STORE_NAME . '</strong> yang akan memperkenankan Anda untuk berbelanja dengan lebih cepat, menelusuri status pesanan Anda saat ini dan memeriksa pesanan-peasnan Anda sebelumnya.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Anda memiliki sebuah akun PayPal? Ingin membayar dengan cepat dengan menggunakan kartu kredit? Gunakan tombol PayPal dibawah untuk menggunakan pilihan Express Checkout.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Atau</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Buat sebuah Profil Pelanggan di <strong>' . STORE_NAME . '</strong> yang akan memperkenankan Anda untuk berbelanja dengan lebih cepat, menelusuri status pesanan Anda saat ini, memeriksa pesanan-pesanan Anda sebelumnya dan memperoleh keuntungan-keuntungan lainnya yang tersedia bagi para anggota kami.');

define('HEADING_RETURNING_CUSTOMER', 'Pelanggan Lama: Silakan Login');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Pelanggan Lama');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Agar dapat melanjutkan, silakan login ke akun <strong>' . STORE_NAME . '</strong> Anda.');

define('TEXT_PASSWORD_FORGOTTEN', 'Lupa kata sandi Anda?');

define('TEXT_LOGIN_ERROR', 'Kesalahan: Maaf, alamat email dan/atau kata sandi tidak cocok.');
define('TEXT_VISITORS_CART', '<strong>Catatan:</strong> Isi &quot;Troli Pengunjung&quot; Anda akan digabungkan dengan isi &quot;Troli Anggota&quot; Anda setelah Anda berhasil login. <a href="javascript:session_win();">[Info Lebih Lanjut]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Pernyataan Privasi</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Silakan nyatakan bahwa Anda telah setuju dengan Pernyataan Privasi kami dengan mencentang kotak berikut ini. Pernyataan privasi dapat dibaca </span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">disini</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Saya telah membaca dan menyetujui pernyataan privasi Anda.</span>');

define('ERROR_SECURITY_ERROR', 'Terdapat kesalahan keamanan saat mencoba login.');

define('TEXT_LOGIN_BANNED', 'Kesalahan: Akses ditolak.');
