<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 28 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Pesanan');
define('HEADING_TITLE_DETAILS', 'Detail Pesanan');
define('HEADING_TITLE_SEARCH', 'ID Pesanan:');
define('HEADING_TITLE_STATUS', 'Status:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Nama Produk atau ID:XX atau Model');
define('HEADING_TITLE_SEARCH_ALL','Cari: ');
define('HEADING_TITLE_SEARCH_PRODUCTS','Cari Produk: ');
define('TEXT_RESET_FILTER', 'Hilangkan filter pencarian');
define('TABLE_HEADING_PAYMENT_METHOD', 'Pembayaran<br />Pengiriman');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','Penagihan dan pengiriman tidak sama ');

define('TABLE_HEADING_COMMENTS', 'Komentar');
define('TABLE_HEADING_CUSTOMERS', 'Pelanggan');
define('TABLE_HEADING_ORDER_TOTAL', 'Total Pesanan');
define('TABLE_HEADING_DATE_PURCHASED', 'Tanggal Pembelian');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_TYPE', 'Tipe Pesanan');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TABLE_HEADING_QUANTITY', 'Jml.');
define('TABLE_HEADING_PRODUCTS', 'Produk');
define('TABLE_HEADING_TAX', 'Pajak');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Harga (tidak termasuk)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Harga (termasuk)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (tidak termasuk)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (termasuk)');
define('TABLE_HEADING_PRICE', 'Harga');
define('TABLE_HEADING_UPDATED_BY', 'Diperbarui Oleh');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Pemberitahuan Pelanggan');
define('TABLE_HEADING_DATE_ADDED', 'Tanggal Ditambahkan');

define('ENTRY_CUSTOMER', 'Pelanggan:');
define('ENTRY_CUSTOMER_ADDRESS', 'Alamat Pelanggan:<br><i class="fa fa-2x fa-user"></i>');
define('ENTRY_SOLD_TO', 'DIJUAL KE:');
define('ENTRY_SHIP_TO', 'MENGIRIMKAN KE:');
define('ENTRY_SHIPPING_ADDRESS', 'Alamat Pengiriman:<br><i class="fa fa-2x fa-truck"></i>');
define('ENTRY_BILLING_ADDRESS', 'Alamat Penagihan:<br><i class="fa fa-2x fa-credit-card"></i>');
define('ENTRY_PAYMENT_METHOD', 'Metode Pembayaran:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipe Kartu Kredit:');
define('ENTRY_CREDIT_CARD_OWNER', 'Pemilik Kartu Kredit:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Nomor Kartu kredit:');
define('ENTRY_CREDIT_CARD_CVV', 'Nomor CVV Kart Kredit:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kartu Kredit Kadaluarsa Pada:');
define('ENTRY_SHIPPING', 'Pengiriman:');
define('ENTRY_DATE_PURCHASED', 'Tanggal Pembelian:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_NOTIFY_CUSTOMER', 'Beri tahu Pelanggan:');
define('ENTRY_NOTIFY_COMMENTS', 'Tambah Komentar:');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Hapus Pesanan');
define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus pesanan ini?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Kembalikan nilai persediaan (restock) jumlah produk');
define('TEXT_DATE_ORDER_CREATED', 'Tanggal Dibuat:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Terakhir Dimodifikasi:');
define('TEXT_INFO_PAYMENT_METHOD', 'Cara Pembayaran:');

define('TEXT_ALL_ORDERS', 'Semua Pesanan');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Pembaruan Pesanan');
define('EMAIL_TEXT_ORDER_NUMBER', 'Nomor Pesanan:');
define('EMAIL_TEXT_INVOICE_URL', 'Detail Faktur:');
define('EMAIL_TEXT_DATE_ORDERED', 'Tanggal Pesanan:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Komentar untuk pesanan Anda adalah: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Pesanan Anda telah diperbarui ke status berikut ini:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Status baru:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Silakan balas ke alamat e-mail ini jika Anda memiliki sejumlah pertanyaan.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Kesalahan: Pesanan tidak ada.');
define('SUCCESS_ORDER_UPDATED', 'Berhasil: pesanan telah berhasil diperbarui.');
define('WARNING_ORDER_NOT_UPDATED', 'Peringatan: Tidak ada sesuatu untuk diubah. Pesanan tidak diperbarui.');

define('ENTRY_ORDER_ID','No. Pesanan ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATIS</span>');

define('TEXT_DOWNLOAD','Download'); 
define('TEXT_DOWNLOAD_TITLE', 'Status Pengunduhan Pesanan');
define('TEXT_DOWNLOAD_STATUS', 'Status');
define('TEXT_DOWNLOAD_FILENAME', 'Nama berkas');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Hari');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Jumlah');

define('TEXT_DOWNLOAD_AVAILABLE', 'Tersedia');
define('TEXT_DOWNLOAD_EXPIRED', 'Kadaluarsa');
define('TEXT_DOWNLOAD_MISSING', 'Tidak pada Server');

define('TEXT_EXTENSION_NOT_UNDERSTOOD', 'Ekstensi file %s tidak didukung'); 
define('TEXT_FILE_NOT_FOUND', 'Berkas tidak ditemukan'); 
define('IMAGE_ICON_STATUS_CURRENT', 'Status - Tersedia');
define('IMAGE_ICON_STATUS_EXPIRED', 'Status - Kadaluarsa');
define('IMAGE_ICON_STATUS_MISSING', 'Status - Hilang');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Pengunduhan telah berhasil diaktifkan');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Pengunduhan telah berhasil dinon-aktifkan');
define('TEXT_MORE', '... lanjut');

define('TEXT_INFO_IP_ADDRESS', 'IP Address: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Hapus CVV dari database');
define('TEXT_DELETE_CVV_REPLACEMENT','Dihapus');
define('TEXT_MASK_CC_NUMBER','Tutup Nomer ini');

define('TEXT_INFO_EXPIRED_DATE', 'Tanggal Kadaluarsa:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Hitungan Kadaluarsa:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Komentar<br />Pelanggan');
define('TEXT_COMMENTS_YES', 'Komentar Pelanggan - YA');
define('TEXT_COMMENTS_NO', 'Komentar Pelanggan - TIDAK');

define('TEXT_CUSTOMER_LOOKUP', '<i class="fa fa-search"></i> Mencari Pelanggan');

define('TEXT_INVALID_ORDER_STATUS', '<span class="alert">(Status Pesanan tidak valid)</span>');

define('BUTTON_TO_LIST', 'Daftar Pesanan');
define('SELECT_ORDER_LIST', 'Loncat menuju Pesanan:');

define('TEXT_MAP_CUSTOMER_ADDRESS', 'Peta Alamat Pelanggan');
define('TEXT_MAP_SHIPPING_ADDRESS', 'Peta Alamat Pengiriman');
define('TEXT_MAP_BILLING_ADDRESS', 'Peta Alamat Pembayaran');

define('TEXT_EMAIL_LANGUAGE', 'Bahasa Pemesanan: %s');
define('SUCCESS_EMAIL_SENT', 'Email %s dikirim ke pelanggan');
