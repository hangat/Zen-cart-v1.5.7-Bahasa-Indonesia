<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express Checkout (Pro 2.0 Payflow Edition) (UK)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express Checkout via Payflow Pro');

  if (IS_ADMIN_FLAG === true) {
    if (!defined('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE')) define('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE', 'tidak terdefinisi');
    define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Express Checkout</strong>%s<br />' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank">Kelola akun PayPal Anda.</a>' : '<a href="https://www.paypal.com" target="_blank">Kelola akun PayPal Anda.</a>') . '<br /><br /><font color="green">Petunjuk Konfigurasi:</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal-ec" target="_blank">Daftar ke akun PayPal Anda - klik di sini.</a><br />' .
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... dan klik "instal" di atas untuk mengaktifkan dukungan PayPal Express Checkout.<br /><a href="http://www.zen-cart.com/getpaypal" target="_blank">Untuk bantuan terperinci tambahan, lihat artikel FAQ ini</a><br />') .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE === '') ? '<br /><span class="alert">2. </span><strong>Kredensial API</strong> dari opsi Kredensial API di area Pengaturan Profil PayPal Anda. (Klik <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank">di sini untuk kredensial API</a>.) <br />Modul ini menggunakan opsi <strong> API Signature </strong> - Anda perlu memasukkan nama pengguna, kata sandi, dan tanda tangan di bidang di bawah ini.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>Kredensial PAYFLOW</strong> Modul ini membutuhkan <strong> PAYFLOW Anda Mitra + Vendor + Pengaturan Pengguna + Kata Sandi </strong> dimasukkan dalam 4 bidang di bawah ini. Ini akan digunakan untuk berkomunikasi dengan sistem Payflow dan mengotorisasi transaksi ke akun Anda.' : '<span class="alert">2. </span>Pastikan Anda telah memasukkan data keamanan yang sesuai untuk nama pengguna / pwd dll, di bawah ini.') ) .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br /><br /><span class="alert">3. </span>Di akun PayPal Anda, aktifkan <strong> Pemberitahuan Pembayaran Instan </strong>:<br />di bawah "Profil", pilih <em> Preferensi Pemberitahuan Pembayaran Instan </em><ul style="margin-top: 0.5em;"><li>klik kotak centang untuk mengaktifkan IPN</li><li>jika belum ada URL yang ditentukan, atur URL ke:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></li></ul>' : '') .
'<font color="green"><hr /><strong>Persyaratan:</strong></font><br /><hr />*<strong>CURL</strong> digunakan untuk komunikasi keluar dengan gateway melalui port 80 dan 443, jadi harus aktif di server hosting Anda dan dapat menggunakan SSL.<br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Kartu Kredit');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Checkout Cepat dan Aman dengan PayPal:');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'Pembayaran Langsung PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Kartu Kredit');  //(used for payflow transactions)
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Maaf, kami tidak dapat memproses kartu kredit Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'Informasi kartu kredit yang Anda masukkan mengandung kesalahan. Silakan periksa dan coba lagi.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Nama Depan Kartu Kredit:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', 'Nama Belakang Kartu Kredit:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Tanda pengenal:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Tipe Kartu Kredit:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Nomer Kartu Kredit:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Tanggal Kadaluarsa Kartu Kredit:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Pengajuan Kartu Kredit:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Nomer CVV:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(dibelakang kartu kredit)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Kartu kredit Anda ditolak. Silakan coba kartu lain atau hubungi bank Anda untuk informasi lebih lanjut.');
  define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'Kami tidak dapat memproses pesanan Anda. Silakan coba lagi, pilih metode pembayaran alternatif, atau hubungi pemilik toko untuk bantuan.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Terjadi kesalahan saat kami mencoba menghubungi pemroses pembayaran. Silakan coba lagi, pilih metode pembayaran alternatif, atau hubungi pemilik toko untuk bantuan.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Pemilik toko yang terhormat,' . "\n" . 'Terjadi kesalahan saat mencoba memulai transaksi PayPal Express Checkout. Sebagai rasa hormat, hanya "nomor" kesalahan yang ditampilkan kepada pelanggan Anda. Detail kesalahan ditampilkan di bawah ini.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'PERINGATAN: Kesalahan Checkout PayPal Express');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'Informasi alamat yang Anda masukkan tampaknya tidak valid atau tidak dapat dicocokkan. Silakan pilih atau tambahkan alamat lain dan coba lagi.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'Alamat yang Anda pilih di PayPal bukan alamat terkonfirmasi. Harap kembali ke PayPal dan pilih atau tambahkan alamat yang dikonfirmasi dan coba lagi.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal tidak dapat berhasil mendanai transaksi ini. Silakan pilih opsi pembayaran lain atau tinjau opsi pendanaan di akun PayPal Anda sebelum melanjutkan.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED', 'Maaf. PayPal telah menolak transaksi dan menyarankan kami untuk memberitahu Anda untuk menghubungi Layanan Pelanggan PayPal untuk informasi lebih lanjut. Untuk menyelesaikan pembelian Anda, silakan pilih metode pembayaran alternatif.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Terjadi kesalahan saat kami mencoba memproses kartu kredit Anda. Silakan coba lagi, pilih metode pembayaran alternatif, atau hubungi pemilik toko untuk bantuan.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Kami mohon maaf atas ketidaknyamanan ini, tetapi kartu kredit yang Anda masukkan bukan yang kami terima. Silakan gunakan kartu kredit yang berbeda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Terjadi masalah saat memvalidasi akun Anda. Silakan coba lagi.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* Nama pemegang kartu harus paling tidak ' . CC_OWNER_MIN_LENGTH . ' karakter\n');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* Setidaknya nomor kartu kredit ' . CC_NUMBER_MIN_LENGTH . ' karakter.\n');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'WASPADA: Kegagalan Verifikasi Alamat. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'WASPADA: Kegagalan Verifikasi Kode CVV Kartu. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', ' Pesanan sedang menunggu peninjauan oleh Pemilik Toko.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' - Anda harus mendaftarkan Kredensial API PayPal Anda sebelum dapat melakukan pemrosesan transaksi tingkat lanjut.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'Status yang ditetapkan untuk akun Anda tidak valid. Silakan masuk ke pengaturan akun Anda dan ubah.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Mohon maaf atas ketidaknyamanan yang terjadi. Pembayaran tidak dapat dimulai karena akun PayPal yang dikonfigurasikan oleh pemilik toko bukan akun Pro Pembayaran Situs Web PayPal atau layanan gateway PayPal belum dibeli. Silakan pilih metode pembayaran alternatif untuk pesanan Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Mohon maaf atas ketidaknyamanan yang terjadi. Pengaturan otentikasi akun PayPal belum disiapkan, atau informasi keamanan API tidak benar. Kami tidak dapat menyelesaikan transaksi Anda. Harap beri tahu pemilik toko agar mereka dapat memperbaiki masalah ini.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Kami mohon maaf - akun PayPal yang dikonfigurasikan oleh administrator toko berbasis di negara yang tidak didukung untuk Pembayaran Situs Web Pro saat ini. Silakan pilih metode pembayaran lain untuk menyelesaikan pesanan Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(CATATAN: Modul belum dikonfigurasikan)</span>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Terjadi masalah saat mengambil detail transaksi. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'Terjadi masalah saat menemukan transaksi yang cocok dengan kriteria yang Anda tentukan. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Terjadi masalah saat membatalkan transaksi. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Terjadi masalah saat mengembalikan jumlah transaksi yang ditentukan. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Terjadi masalah saat mengotorisasi transaksi. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Terjadi masalah saat mengambil transaksi. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Permintaan Pengembalian Dana Anda ditolak oleh PayPal.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Anda meminta pengembalian dana sebagian tetapi tidak menentukan jumlah.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Anda meminta pengembalian dana penuh tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Anda meminta otorisasi tetapi tidak menentukan jumlah.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Anda meminta tangkapan tetapi tidak menentukan jumlah.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Konfirmasi');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Anda meminta untuk membatalkan transaksi tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Konfirmasi');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Anda meminta otorisasi tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Anda meminta Tangkapan dana tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Anda meminta Tangkapan dana tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'Pengembalian dana PayPal untuk %s dimulai. ID transaksi: %s. Segarkan layar untuk melihat detail konfirmasi yang diperbarui di bagian Riwayat Status Pesanan / Komentar.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'Otorisasi PayPal untuk %s dimulai. Segarkan layar untuk melihat detail konfirmasi yang diperbarui di bagian Riwayat Status Pesanan / Komentar.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'Tangkapan PayPal untuk %s dimulai. ID Penerimaan: %s. Segarkan layar untuk melihat detail konfirmasi yang diperbarui di bagian Riwayat Status Pesanan / Komentar.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'Permintaan Void PayPal dimulai. ID transaksi: %s. Segarkan layar untuk melihat detail konfirmasi yang diperbarui di bagian Riwayat Status Pesanan / Komentar.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Ada kesalahan dalam percobaan transaksi. Silakan lihat panduan Referensi API atau log transaksi untuk informasi terperinci.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Kami mohon maaf atas ketidaknyamanan ini; namun, saat ini kami tidak dapat menggunakan PayPal untuk memproses pesanan dari wilayah geografis yang Anda pilih sebagai alamat PayPal Anda. Silakan lanjutkan menggunakan checkout normal dan pilih dari metode pembayaran yang tersedia untuk menyelesaikan pesanan Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Tampaknya pesanan Anda telah dikirimkan dua kali. Silakan periksa area Akun Saya untuk melihat detail pesanan yang sebenarnya. Silakan gunakan formulir Hubungi Kami jika pesanan Anda tidak muncul di sini tetapi sudah dibayar dari akun PayPal Anda sehingga kami dapat memeriksa catatan kami dan merekonsiliasi ini dengan Anda.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Klik di sini untuk membayar melalui Checkout PayPal Express');

// EC buttons -- Do not change these values
///// You should only use choices listed on this page: https://developer.paypal.com/docs/classic/api/buttons/ or https://www.paypal-techsupport.com/app/answers/detail/a_id/632
  //define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/btn/btn_xpressCheckout.gif');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/en_US/i/btn/btn_xpressCheckoutsm.gif');

  //define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'Checkout with PayPal. The safer, easier way to pay.');
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', '');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/logo/PayPal_mark_37x23.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/logo/PayPal_mark_50x34.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PP.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif');
  define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/btn/btn1_for_hub.gif');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
 ////// Styling of pseudo cart contents display section
  //define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
  //define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Nama depan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nama keluarga:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Nama Bisnis:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Nama alamat:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Alamat jalan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Alamat kota:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Alamat Wilayah:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Alamat Zip:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Alamat Negara:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'ID Ebay:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Status Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Status Alamat:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Tipe Pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Status Pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Alasan Tertunda:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Faktur:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Tanggal pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Mata Uang:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Jumlah bruto:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Biaya Pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Kurs:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Cart items:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Tipe Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Induk ID Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Pengembalian Uang Pesanan</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Jika Anda ingin mengembalikan pesanan ini secara keseluruhan, klik di sini:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Lakukan Pengembalian Uang Penuh');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Lakukan Pengembalian Uang Sebagian');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... atau masukkan Sebagian ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Isi ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'jumlah pengembalian dana di sini dan klik Pengembalian Sebagian');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '* Pengembalian dana penuh mungkin tidak dikeluarkan setelah dana parsial diterapkan.<br />* Beberapa pengembalian dana parsial diizinkan hingga sisa saldo yang tidak dapat dikembalikan.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Catatan untuk ditampilkan kepada pelanggan:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Dikembalikan oleh administrator toko.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Memastikan: ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Komentar Sistem: ');
  define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Kelayakan Perlindungan:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Otorisasi Pemesanan</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Jika Anda ingin mengesahkan bagian dari pesanan ini, masukkan jumlahnya di sini:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Lakukan Otorisasi');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Menangkap Otorisasi</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Jika Anda ingin menangkap semua atau sebagian dari jumlah yang diotorisasi untuk pesanan ini, masukkan Jumlah Pengambilan dan pilih apakah ini merupakan tangkapan akhir untuk pesanan ini. Centang kotak konfirmasi sebelum mengirimkan permintaan Capture Anda.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Lakukan Capture');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Jumlah yang Ditangkap:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Apakah ini tangkapan terakhir?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Catatan untuk ditampilkan kepada pelanggan:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Terima kasih atas pesanan anda');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Memastikan: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Membatalkan Otorisasi Pesanan</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Jika Anda ingin membatalkan otorisasi, masukkan ID otorisasi di sini, dan konfirmasikan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Catatan untuk ditampilkan kepada pelanggan:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Terima kasih atas perlindungan Anda. Silahkan datang lagi.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Batal');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Wilayah Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Kode Auth.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'Kesesuaian Alamat AVS:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'Kesesuaian AVS ZIP:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'Kesesuaian CVV2:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Hari untuk Menyelesaikan:');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
  define('EMAIL_EC_ACCOUNT_INFORMATION', 'Detail login akun Anda, yang dapat Anda gunakan untuk meninjau pembelian Anda, adalah sebagai berikut:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Biaya Satu Kali yang terkait dengan ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Biaya tambahan');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Menangani biaya dan biaya lain yang berlaku');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Diskon');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Kredit yang diterapkan, termasuk kupon diskon, sertifikat hadiah, dll');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Pembayaran dalam Status Peninjauan Penipuan: ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Ini adalah pemberitahuan otomatis untuk memberi tahu Anda bahwa PayPal menandai pembayaran untuk pesanan baru sebagai Memerlukan Tinjauan Pembayaran oleh tim Penipuan mereka. Biasanya review selesai dalam waktu 36 jam. Sangat disarankan agar Anda TIDAK MENGIRIM pesanan sampai ulasan pembayaran selesai. Anda dapat melihat status ulasan terakhir pesanan dengan masuk ke akun PayPal Anda dan meninjau transaksi terbaru.');

  define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', 'MASALAH: Kami minta Maaf. PayPal secara tak terduga mengembalikan alamat kosong. <br />Untuk menyelesaikan pembelian Anda, harap berikan alamat Anda dengan mengklik &quot;Daftar&quot; tombol di bawah ini untuk membuat akun di toko kami. Kemudian Anda dapat memilih PayPal lagi ketika Anda melanjutkan checkout. Kami minta maaf atas ketidaknyamanannya. Jika Anda memiliki masalah dengan checkout, silakan klik tautan Hubungi Kami untuk menjelaskan detailnya kepada kami sehingga kami dapat membantu Anda dengan pembelian Anda dan mencegah masalah di kemudian hari. Terima kasih.');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Semua barang di Troli Anda (lihat detail di toko dan di tanda terima toko Anda).');

