<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//

require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAME . ' Release Queue');

define('TABLE_HEADING_CUSTOMERS', 'Pelanggan');
define('TABLE_HEADING_ORDERS_ID', 'No. Pesanan');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Nilai');
define('TABLE_HEADING_DATE_PURCHASED', 'Tanggal Pembelian');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Baru-baru ini Anda membeli sebuah ' . TEXT_GV_NAME . ' dari toko online kami.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Untuk alasan keamanan ' . TEXT_GV_NAME . ' ini tidak dibuat tersedia segera kepada Anda. ' .
                                          'Akan tetapi, jumlah ini sekarang telah dilepaskan. Anda sekarang dapat mengunjungi toko kami dan mengirimkan nilai ' . TEXT_GV_NAME . ' tersebut lewat e-mail kepada seseorang atau menggunakannya untuk diri Anda sendiri.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', TEXT_GV_NAME . ' yang Anda beli beharga senilai %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Terima kasih telah berbelanja bersama kami!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Pembelian');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Pesanan #');

define('TEXT_EDIT_ORDER','Edit ID# Pesanan ');
define('TEXT_GV_NONE','Tidak ada ' . TEXT_GV_NAME . ' untuk dilepaskan');
