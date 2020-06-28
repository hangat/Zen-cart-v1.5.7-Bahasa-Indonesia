<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Login Admin');
define('HEADING_TITLE_EXPIRED', 'Login Admin - Kata Sandi Kadaluarsa');

define('TEXT_SUBMIT','Submit');
define('TEXT_ADMIN_NAME', 'Nama Admin:');
define('TEXT_ADMIN_PASS', 'Kata Sandi Admin:');
define('TEXT_ADMIN_OLD_PASSWORD', 'Kata Sandi Lama:');
define('TEXT_ADMIN_NEW_PASSWORD', 'Kata Sandi Baru:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Kata Sandi Konfirmasi:');

define('ERROR_WRONG_LOGIN', 'Anda salah mengisikan nama atau kata sandi.');
define('ERROR_SECURITY_ERROR', 'Terjadi sebuah kesalahan keamanan ketika sedang berusaha untuk login.');

define('TEXT_PASSWORD_FORGOTTEN', 'Lupa Kata Sandi');

define('LOGIN_EXPIRY_NOTICE', '');
define('ERROR_PASSWORD_EXPIRED', 'CATATAN: Kata sandi Anda telah kedaluwarsa. Silakan pilih password baru. <strong>Kata sandi Anda harus berisi ANGKA dan HURUF dan minimal 7 karakter.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Untuk alasan keamanan, kata sandi sementara Anda perlu diubah. Silakan pilih password baru.<br />Kata sandi anda <strong>harus berisi ANGKA dan HURUF dan minimal 7 karakter.</strong>');
define('SUCCESS_PASSWORD_UPDATED', 'Kata Sandi diperbarui');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Pemberitahuan kegagalan Login admin');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Pemberitahuan Penting: Ada beberapa usaha login yang gagal untuk akun administratif Anda. Untuk perlindungan Anda dan untuk keamanan sistem, setelah 6 upaya akun akan terkunci selama minimal 30 menit, selama Anda tidak akan dapat untuk login bahkan jika Anda mengingat kata sandi Anda. Upaya Lanjutan untuk login akan terus mengunci akun selama 30 menit. Anda tidak akan bisa melakukan mengatur ulang kata sandi selama ini. Mohon maaf untuk ketidaknyamanan ini.' . "\n\nUpaya login terakhir adalah dari alamat IP ini: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Catatan: Kata sandi Anda telah kedaluwarsa karena situs Anda telah berubah dari non-SSL (kurang aman) menjadi SSL dilindungi (lebih aman). Mengubah kata sandi Anda di bawah SSL adalah langkah penting untuk keamanan yang lebih besar. Maaf atas ketidaknyamanan ini. Aturan kata sandi standar kadaluwarsa berlaku.');
