<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 May 12 Modified in v1.5.7 $
 */


require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAMES . ' Sent');

define('TABLE_HEADING_SENDERS_NAME', 'Nama Pengirim');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Nilai');
define('TABLE_HEADING_VOUCHER_CODE', TEXT_GV_REDEEM);
define('TABLE_HEADING_DATE_SENT', 'Tanggal Kirim');
define('TEXT_HEADING_DATE_REDEEMED', 'Tanggal Ditebus');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_INFO_SENDERS_ID', 'ID Pengirim:');
define('TEXT_INFO_AMOUNT_SENT', 'Jumlah Kirim:');
define('TEXT_INFO_DATE_SENT', 'Tanggal Kirim:');
define('TEXT_INFO_VOUCHER_CODE', TEXT_GV_REDEEM . ':');
define('TEXT_INFO_EMAIL_ADDRESS', 'Alamat E-Mail:');
define('TEXT_INFO_DATE_REDEEMED', 'Tanggal Ditebus:');
define('TEXT_INFO_IP_ADDRESS', 'Alamat IP:');
define('TEXT_INFO_CUSTOMERS_ID', 'ID Pelanggan:');
define('TEXT_INFO_NOT_REDEEMED', 'Tidak Ditebus');
