<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Jun 07 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Kirim Ulang Kata Sandi');

define('TEXT_ADMIN_EMAIL', 'Alamat Email Admin: ');
define('TEXT_ADMIN_USERNAME', 'Admin Username');
define('TEXT_BUTTON_REQUEST_RESET', 'Permintaan reset');
define('TEXT_BUTTON_LOGIN', 'Login');
define('TEXT_BUTTON_CANCEL', 'Batal');

define('ERROR_WRONG_EMAIL', 'Anda mengisi alamat email yang salah.');
define('ERROR_WRONG_EMAIL_NULL', 'Anda belum mengisi alamat email Anda.');
define('MESSAGE_PASSWORD_SENT', 'Terima Kasih. Jika alamat email yang ada isi sesuai dengan akun admin di database kami, selanjutnya kata sandi akan dikirim ke alamat email.<br>Silakan baca email dan klik "login" dibawah untuk login dengan Kata Sandi sementara yang baru.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Permintaan Perubahan anda');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Sebuah kata sandi baru telah diminta dari %s.' . "\n\n" . 'Kata sandi temporer Anda adalah:' . "\n\n   %s\n\nAnda akan di tanya untuk memilih Kata Sandi baru sebelum login.\n\nKata Sandi temporer ini kadaluarsa dalam 24 jam.\n\n\n");

define('TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET', 'Peringatan Akses!');
define('TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET', "Upaya gagal untuk me-reset kata sandi admin telah diterima dari %s\n\nEmail dan / atau nama pengguna tidak valid disediakan. \n\nJika Anda memiliki akun admin yang berbagi alamat email yang sama, Anda harus mempertimbangkan untuk memberikan alamat email unik kepada mereka, untuk mempermudah pengaturan ulang.");

