<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 01:50:54 2015 -0400 Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'Login');
define('NAVBAR_TITLE_2', 'Lupa Kata Sandi');

define('HEADING_TITLE', 'Lupa Kata Sandi');

define('TEXT_MAIN', 'Ketikkan alamat Email Anda pada kotak input dibawah dan kami akan mengirimkan sebuah email yang berisikan kata sandi baru Anda kepada Anda.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Kata Sandi Baru');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Sebuah kata sandi telah diminta dari ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Kata sandi baru Anda untuk \'' . STORE_NAME . '\' adalah:' . "\n\n" . '   %s' . "\n\nSetelah Anda berhasil login dengan menggunakan kata sandi yang baru, Anda dapat mengubah kata sandi tersebut pada halaman 'Akun Saya.'");

define('SUCCESS_PASSWORD_SENT', 'Sebuah kata sandi baru telah dikirimkan ke alamat email Anda.');
