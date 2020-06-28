<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2005 CardinalCommerce
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 20 Modified in v1.5.7 $
 */

  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_WPP', 'Pembayaran PayPal Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_NONUSA', 'Website Pembayaran PayPal Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_PRO20', 'Websit Pembayaran PayPal Pro Edisi Payflow (UK)');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_DESCRIPTION', '<strong>Pembayaran PayPal Pro</strong>%s<br />' . '<a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Manage your PayPal account.</a>' . '<br /><br /><font color="green">Configuration Instructions:</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal-pro" rel="noopener" target="_blank">Sign up for your PayPal account - click here.</a><br />' .
(defined('MODULE_PAYMENT_PAYPALDP_STATUS') ? '' : '... dan klik "install" diatas untuk mengkatifkan pembayaran PayPal Pro.<br /><a href="http://www.zen-cart.com/getpaypal" rel="noopener" target="_blank">Untuk bantuan terperinci tambahan, lihat artikel FAQ ini</a><br />') .
(!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE === '' ? '<span class="alert">2. </span><strong>Pengenal API</strong> dari opsi Kredensial API di area Pengaturan Profil PayPal Anda. Modul ini menggunakan opsi <strong> Tanda tangan API </strong> - Anda perlu memasukkan nama pengguna, kata sandi, dan tanda tangan di bidang di bawah ini.' : '<span class="alert">2. </span>Pastikan Anda telah memasukkan data keamanan yang sesuai untuk nama pengguna / pwd dll, di bawah ini.') .
'<font color="green"><hr /><strong>Keperluan:</strong></font><br /><hr />*<strong>Checkout Express </strong> harus diinstal dan diaktifkan untuk menggunakan Pro Pembayaran PayPal, sesuai dengan Ketentuan Layanan PayPal. <br />*Juga membutuhkan CURL melalui SSL untuk komunikasi keluar. CURL harus diaktifkan untuk port 80 dan 443.<hr />' );
  }

  define('MODULE_PAYMENT_PAYPALDP_TEXT_DESCRIPTION', 'Kartu Kredit');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TITLE', 'Kartu Kredit');
  define('MODULE_PAYMENT_PAYPALDP_DP_TEXT_TYPE', 'Kartu Kredit (WPP)');
  define('MODULE_PAYMENT_PAYPALDP_PF_TEXT_TYPE', 'Kartu Kredit (PF)');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_HEADING', 'Maaf, kami tidak dapat memproses kartu kredit Anda.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR', 'Informasi kartu kredit yang Anda masukkan mengandung kesalahan. Silakan periksa dan coba lagi.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME', 'Nama Depan:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME', 'Nama Belakang:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER', 'Pemilik Kartu:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE', 'Tipe Kartu:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER', 'Nomer Kartu:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES', 'Tanggal Kadaluarsa:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE', 'Tanggal Terbit:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'No. Terbit Maestro:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Nomer CVV:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(di belakang kartu kredit)');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSACTION_FOR', 'Transaksi untuk');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED', 'Kartu kredit Anda ditolak. Silakan coba kartu lain atau hubungi bank Anda untuk informasi lebih lanjut.');
  define('MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED', 'Kami tidak dapat memproses pesanan Anda. Silakan pilih metode pembayaran alternatif, atau hubungi pemilik toko untuk bantuan.');
  define('MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE', 'Kami tidak dapat memproses pesanan Anda. Silakan coba lagi, pilih metode pembayaran alternatif, atau hubungi pemilik toko untuk bantuan.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR', 'Terjadi kesalahan saat kami mencoba menghubungi pemroses pembayaran. Silakan coba lagi, pilih metode pembayaran alternatif, atau hubungi pemilik toko untuk bantuan.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE', 'Pemilik toko yang terhormat,' . "\n" . 'Terjadi kesalahan saat mencoba memulai transaksi validasi pembayaran. Sebagai rasa hormat, hanya "nomor" kesalahan yang ditampilkan kepada pelanggan Anda. Detail kesalahan ditampilkan di bawah ini.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT', 'PERINGATAN: Kesalahan Pembayaran Langsung PayPal');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR', 'Informasi alamat yang Anda masukkan tampaknya tidak valid atau tidak dapat dicocokkan. Silakan pilih atau tambahkan alamat lain dan coba lagi.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal tidak dapat berhasil mendanai transaksi ini. Silakan pilih opsi pembayaran lain atau tinjau opsi pendanaan di akun PayPal Anda sebelum melanjutkan.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ERROR', 'Terjadi kesalahan saat kami mencoba memproses kartu kredit Anda. Silakan coba lagi, pilih metode pembayaran alternatif, atau hubungi pemilik toko untuk bantuan.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD', 'Kami mohon maaf atas ketidaknyamanan ini, tetapi kartu kredit yang Anda masukkan bukan yang kami terima. Harap gunakan kartu kredit yang berbeda atau verifikasi bahwa detail yang Anda masukkan benar, atau hubungi pemilik toko untuk mendapatkan bantuan.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN', 'Terjadi masalah saat memvalidasi akun Anda. Silakan coba lagi.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER', '* Nama pemegang kartu harus paling tidak ' . CC_OWNER_MIN_LENGTH . ' karakter.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER', '* Nomor kartu kredit minimal harus ' . CC_NUMBER_MIN_LENGTH . ' karakter.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV', '* Nomor CVV 3 atau 4 digit harus dimasukkan dari belakang kartu kredit.\n');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT', 'WASPADA: Kegagalan Verifikasi Alamat. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT', 'WASPADA: Kegagalan Verifikasi Kode CVV Kartu. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT', ' Pesanan sedang menunggu peninjauan oleh Pemilik Toko.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR', 'Status yang ditetapkan untuk akun Anda tidak valid. Silakan masuk ke pengaturan akun Anda dan ubah.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Mohon maaf atas ketidaknyamanan yang terjadi. Pembayaran tidak dapat dimulai karena akun PayPal yang dikonfigurasikan oleh pemilik toko bukan akun Pembayaran PayPal Pro atau layanan gateway PayPal belum dibeli. Atau Anda telah mencoba membayar dengan kartu AmEx dan pedagang belum mengaktifkan dukungan AmEx. Silakan pilih metode pembayaran alternatif untuk pesanan Anda atau mungkin jenis kartu kredit lain.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR', 'Mohon maaf atas ketidaknyamanan yang terjadi. Pembayaran tidak dapat dimulai karena akun PayPal yang dikonfigurasikan oleh pemilik toko bukan akun Pembayaran PayPal AS atau layanan gateway PayPal belum dibeli (atau belum diaktifkan dengan menerima Perjanjian Penagihan di situs web PayPal). Silakan pilih metode pembayaran alternatif untuk pesanan Anda.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR', 'Mohon maaf atas ketidaknyamanan yang terjadi. Pembayaran tidak dapat dimulai karena akun PayPal yang dikonfigurasikan oleh pemilik toko bukan akun PayPal Pembayaran Situs Web Pro 2.0 (Inggris) atau layanan gateway PayPal belum dibeli atau tidak diaktifkan dengan benar. Silakan pilih metode pembayaran alternatif untuk pesanan Anda.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Mohon maaf atas ketidaknyamanan yang terjadi. Pengaturan otentikasi akun PayPal belum disiapkan, atau informasi keamanan API tidak benar. Kami tidak dapat menyelesaikan transaksi Anda. Harap beri tahu pemilik toko agar mereka dapat memperbaiki masalah ini.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Kami mohon maaf - akun PayPal yang dikonfigurasikan oleh administrator toko berbasis di negara yang tidak didukung untuk Pembayaran Situs Web Pro saat ini. Silakan pilih metode pembayaran lain untuk menyelesaikan pesanan Anda.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR', 'Kami mohon maaf - kartu kredit yang Anda gunakan tidak kompatibel dengan mata uang yang Anda pilih untuk checkout. Silakan ubah pilihan mata uang Anda atau pilih metode pembayaran lain untuk menyelesaikan pesanan Anda.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(CATATAN: Modul belum dikonfigurasikan)</span>');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_TYPE_NOT_SUPPORTED', 'Anda telah mencoba membayar pembelian Anda menggunakan kartu kredit yang tidak diterima oleh pedagang ini. Kami mohon maaf atas ketidaknyamanan ini dan mengundang Anda untuk mencoba lagi menggunakan jenis kartu yang berbeda, atau hubungi pemilik toko untuk pilihan pembayaran alternatif.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRY_OTHER_PAYMENT_METHOD', 'PayPal telah menolak sumber dana yang Anda pilih. Silakan coba jenis pembayaran lain di akun PayPal Anda, atau coba metode pembayaran alternatif. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR', 'Terjadi masalah saat mengambil detail transaksi. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR', 'Terjadi masalah saat menemukan transaksi yang cocok dengan kriteria yang Anda tentukan. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR', 'Terjadi masalah saat membatalkan transaksi. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR', 'Terjadi masalah saat mengembalikan jumlah transaksi yang ditentukan. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR', 'Terjadi masalah saat mengotorisasi transaksi. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR', 'Terjadi masalah saat mengambil transaksi. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR', 'Permintaan Pengembalian Dana Anda ditolak oleh PayPal.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT', 'Anda meminta pengembalian dana sebagian tetapi tidak menentukan jumlah.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Anda meminta pengembalian dana penuh tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT', 'Anda meminta otorisasi tetapi tidak menentukan jumlah.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT', 'Anda meminta tangkapan tetapi tidak menentukan jumlah.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Memastikan');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR', 'Anda meminta untuk membatalkan transaksi tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Memastikan');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR', 'Anda meminta otorisasi tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Anda meminta Tangkapan dana tetapi tidak mencentang kotak Konfirmasi untuk memverifikasi maksud Anda.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED', 'Pengembalian dana PayPal untuk %s dimulai. ID transaksi: %s. Segarkan layar untuk melihat detail konfirmasi yang diperbarui di bagian Riwayat Status Pesanan / Komentar.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED', 'Otorisasi PayPal untuk% s dimulai. Segarkan layar untuk melihat detail konfirmasi yang diperbarui di bagian Riwayat Status Pesanan / Komentar.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED', 'Tangkapan PayPal untuk %s dimulai. ID Penerimaan: %s. Segarkan layar untuk melihat detail konfirmasi yang diperbarui di bagian Riwayat Status Pesanan / Komentar.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED', 'Permintaan Void PayPal dimulai. ID transaksi: %s. Segarkan layar untuk melihat detail konfirmasi yang diperbarui di bagian Riwayat Status Pesanan / Komentar.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR', 'Ada kesalahan dalam percobaan transaksi. Silakan lihat panduan Referensi API atau log transaksi untuk informasi terperinci.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR', 'Kami mohon maaf atas ketidaknyamanan ini; namun, saat ini kami tidak dapat menggunakan metode ini untuk memproses pesanan dari wilayah geografis yang Anda pilih sebagai alamat akun Anda. Silakan lanjutkan menggunakan checkout normal dan pilih dari metode pembayaran yang tersedia untuk menyelesaikan pesanan Anda.');


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Nama depan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nama keluarga:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Nama Bisnis:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Nama alamat:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Alamat jalan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Alamat kota:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Alamat Wilayah:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Zip Alamat:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Alamat Negara:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'ID Ebay:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Status Pembayar:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Status Alamat:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Tipe Pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Status Pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Alasan Penundaan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Faktur:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Tanggal Pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Mata Uang:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Jumlah bruto:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Biaya Pembayaran:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Kurs:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Item Troli:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Tipe Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID Trans.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Induk ID Trans.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Pengembalian Uang Pesanan</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Jika Anda ingin mengembalikan pesanan ini secara keseluruhan, klik di sini:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Lakukan Pengembalian Uang Penuh');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Lakukan Pengembalian Uang Sebagian');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... atau masukkan Sebagian ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Isi ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'jumlah pengembalian dana di sini dan klik Pengembalian Sebagian');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '* Pengembalian dana penuh mungkin tidak dikeluarkan setelah pengembalian dana parsial diterapkan.<br />* Beberapa pengembalian dana parsial diizinkan hingga sisa saldo yang tidak dapat dikembalikan.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Catatan untuk ditampilkan kepada pelanggan:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Dikembalikan oleh administrator toko.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Konfirmasi: ');


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
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Memastikan: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Membatalkan Pesanan Otorisasi</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Jika Anda ingin membatalkan otorisasi, masukkan ID otorisasi di sini, dan konfirmasikan:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Catatan untuk ditampilkan kepada pelanggan:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Terima kasih atas perlindungan Anda. Silahkan datang lagi.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Batal');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Trans. Negara:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Kode Auth.:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'Kecocokan Alamat AVS:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'Kecocokan AVS ZIP:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'Kecocokan CVV2:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Hari untuk Menyelesaikan:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Biaya Satu Kali yang terkait dengan ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Biaya tambahan');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Menangani biaya dan biaya lain yang berlaku');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Diskon');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Kredit yang diterapkan, termasuk kupon diskon, sertifikat hadiah, dll');

  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Pembayaran dalam Status Peninjauan Penipuan: ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Ini adalah pemberitahuan otomatis untuk memberi tahu Anda bahwa PayPal menandai pembayaran untuk pesanan baru sebagai Memerlukan Tinjauan Pembayaran oleh tim Penipuan mereka. Biasanya review selesai dalam waktu 36 jam. Sangat disarankan agar Anda TIDAK MENGIRIM pesanan sampai ulasan pembayaran selesai. Anda dapat melihat status ulasan terakhir pesanan dengan masuk ke akun PayPal Anda dan meninjau transaksi terbaru.');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Semua barang di Troli Anda (lihat detail di toko dan di tanda terima toko Anda).');

  define('CENTINEL_AUTHENTICATION_ERROR', 'Otentikasi Gagal - Lembaga keuangan Anda telah menunjukkan bahwa ia tidak berhasil mengotentikasi transaksi ini. Untuk melindungi dari penggunaan yang tidak sah, kartu ini tidak dapat digunakan untuk menyelesaikan pembelian Anda. Anda dapat menyelesaikan pembelian dengan memilih bentuk pembayaran lain.');
  define('CENTINEL_PROCESSING_ERROR', 'Ada masalah dalam mendapatkan otorisasi untuk transaksi Anda. Harap masukkan kembali informasi pembayaran Anda, dan / atau pilih bentuk pembayaran alternatif.');
  define("CENTINEL_ERROR_CODE_8000", "8000");
  define("CENTINEL_ERROR_CODE_8000_DESC", "Protokol Tidak Diakui, harus http:// or https://");
  define("CENTINEL_ERROR_CODE_8010", "8010");
  define("CENTINEL_ERROR_CODE_8010_DESC", "Tidak Dapat Berkomunikasi dengan MAPS Server");
  define("CENTINEL_ERROR_CODE_8020", "8020");
  define("CENTINEL_ERROR_CODE_8020_DESC", "Kesalahan Parsing Tanggapan XML");
  define("CENTINEL_ERROR_CODE_8030", "8030");
  define("CENTINEL_ERROR_CODE_8030_DESC", "Timeout Komunikasi Terjadi");
  define("CENTINEL_ERROR_CODE_1001", "1001");
  define("CENTINEL_ERROR_CODE_1001_DESC", "Masalah Konfigurasi Akun dengan Kardinal Centinel. Silakan segera hubungi perwakilan Kardinal Anda di implement@cardinalcommerce.com. Transaksi Anda tidak akan dilindungi oleh kewajiban tolak bayar hingga masalah ini diselesaikan.\n\n" . 'Ada 3 langkah untuk mengkonfigurasi layanan Kardinal 3D-Secure Anda dengan benar: ' . "\n1-Masuk ke URL Admin Pedagang Kardinal yang disertakan dalam paket selamat datang Anda (BUKAN URL tes), dan terima perjanjian lisensi.\2-Tetapkan kata sandi transaksi. \n3-Salin ID Cardinal Merchant Anda dan Kata Sandi Transaksi Kardinal ke dalam modul ZC PayPal Anda.");
  define("CENTINEL_ERROR_CODE_4243", "4243");
  define("CENTINEL_ERROR_CODE_4243_DESC", "Masalah Konfigurasi Akun dengan Kardinal Centinel. Silakan segera hubungi perwakilan Kardinal Anda di implement@cardinalcommerce.com dan beri tahu mereka bahwa Anda mendapatkan Kesalahan Nomor 4243 ketika mencoba menggunakan 3D Secure dengan situs Zen Cart Anda dan akun PayPal dan bahwa Anda harus mengaktifkan Modul Prosesor di akun Anda. Transaksi Anda tidak akan dilindungi oleh kewajiban tolak bayar hingga masalah ini diselesaikan.");
