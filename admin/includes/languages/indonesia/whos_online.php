<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 06 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Siapa yang Online');
define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nama Lengkap');
define('TABLE_HEADING_IP_ADDRESS', 'ALamat IP');
define('TABLE_HEADING_SESSION_ID', 'Sesi');
define('TABLE_HEADING_ENTRY_TIME', 'Waktu Datang');
define('TABLE_HEADING_LAST_CLICK', 'Waktu Pengklikan Terakhir');
define('TIME_PASSED_LAST_CLICKED', '<strong>Waktu Semenjak Pengklikan:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'URL Terakhir yang Dilihat');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TABLE_HEADING_SHOPPING_CART', 'Troli Pengguna');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Subtotal');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Saat ini terdapat %s pelanggan yang online');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'SEGARKAN DAFTAR');
define('WHOS_ONLINE_LEGEND_TEXT', 'Legenda:');
define('WHOS_ONLINE_ACTIVE_TEXT', 'Troli aktif');
define('WHOS_ONLINE_INACTIVE_TEXT', 'Troli tidak aktif');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT', 'Aktif tanpa Troli');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT', 'Tidak aktif tanpa Troli');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT', 'Tidak aktif adalah apabila Pengklikan Tterakhir >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT', 'Tidak aktif semenjak kedatangan >');
define('WHOS_ONLINE_REMOVED_TEXT', 'akan dihapus');

define('TEXT_SESSION_ID', '<strong>ID Sesi:</strong> ');
define('TEXT_HOST', '<strong>Host:</strong> ');
define('TEXT_USER_AGENT', '<strong>Agen Pengguna:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Troli Kosong</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Tidak Termasuk Spiders?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Tidak Termasuk Alamat IP Admin?');

// show Last Clicked time and host name - 1 both(default), 0=time-only
if (!defined('WHOIS_SHOW_HOST')) define('WHOIS_SHOW_HOST', '1');

define('TEXT_DUPLICATE_IPS', 'IP Address Duplikat: ');
define('TEXT_TOTAL_UNIQUE_USERS', 'Total Pengguna Unik: ');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Memperbarui ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'setiap %s detik.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Secara Manual');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'OFF');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 detik');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 detik');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 detik');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 menit');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14m');
