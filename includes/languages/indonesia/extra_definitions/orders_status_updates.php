<?php
/**
 * Constants used by the zen_update_orders_history function.
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 May 27 Modified in v1.5.7 $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Perbarui Pesanan');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Nomer Pesanan:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Detail Tagihan:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Tanggal Dipesan:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Komentar anda untuk pesanan anda adalah: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Status pesanan Anda telah diperbarui:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Status pesanan anda tidak berubah:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Status Sekarang: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Status lama:</strong> %1$s, <strong>Status Baru:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Silahkan balas ke email ini juka anda mempunyai pertanyaan.' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[STATUS PESANAN]');