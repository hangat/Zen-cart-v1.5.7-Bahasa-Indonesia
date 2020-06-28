<?php
/**
 * First Data Hosted Checkout Payment Pages Module
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 *
 * To create a USD sandbox account for testing, see: https://support.payeezy.com/hc/en-us/articles/203730579-Payeezy-Gateway-Demo-Accounts
 * And find test credit card numbers (for sandbox only) at https://support.payeezy.com/hc/en-us/articles/204504235-Using-test-credit-card-numbers
 * To test failures, see https://support.payeezy.com/hc/en-us/articles/204504175-How-to-generate-unsuccessful-transactions-during-testing-
 */

  define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ADMIN_TITLE', 'Halaman Pembayaran Checkout First Data Hosted');
  define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_CATALOG_TITLE', 'Credit Card');  // Payment option title as displayed to the customer

  if (IS_ADMIN_FLAG === true) {
    if (defined('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS') && MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS == 'True') {
      define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://' . (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE == 'Sandbox' ? 'demo.' : '') . 'globalgatewaye4.firstdata.com">Login Perdagangan First Data GGe4</a>' .
        (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE != 'Produksi' ? '<br /><br />Untuk KARTU TEST berdasarkan <a href="https://support.payeezy.com/hc/en-us/articles/204504235-Using-test-credit-card-numbers" rel="noreferrer noopener" target="_blank">Menggunakan Kartu Kredit Test</a>' : '') .
        '<br /><br /><strong>PENGATURAN</strong><br />pengaturan "Tautan Penerima URL" anda dalam halaman konfigurasi Pembayaran First Data perlu ditunjuk ke <u>' . zen_catalog_href_link('checkout_process', '', 'SSL') . '</u><br>' .
        'Kemudian dapatkan ID Halaman Pembayaran, Kunci transaksi dan Kunci Tanggapan dari First Data dan isi disini. Itu didapat dengan Login kedalam Akun First Data, pilih halam Pembayaran, dan klik pada ID Halaman yang diinginkan dan navigasi ke seksi Keamanan.'
      );
    } else {
      define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION', 'Halaman Pembayaran Checkout First Data Hosted tersedia untuk semua Data Pertama, Gerbang Global e4, dan perdagangan Linkpont.<br><br>
             First Data akun representatif dapat menuntun dengan perubahan akun yang diperlukan untuk mengaktifkan Hosted Checkout (HCO) dalam akun anda.<br><br>
             <a rel="noreferrer noopener" target="_blank" href="https://www.zen-cart.com/partners/firstdatahosted/">Klik disini untuk mendaftar Akun First Data Hosted Checkout</a><br><br>
             <a rel="noreferrer noopener" target="_blank" href="https://globalgatewaye4.firstdata.com/">Klik untuk Login ke Akun area perdagangan First Data GGe4</a>');
    }
  }
  define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DECLINED_MESSAGE', 'Transaksi tidak dapat diselesaikan. Silakan coba kartu lain atau hubungi bank Anda untuk info lebih lanjut.  ');
  define('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ERROR_MESSAGE', 'Terjadi kesalahan saat memproses transaksi. Silakan coba lagi.  ');
