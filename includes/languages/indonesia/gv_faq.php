<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 May 27 Modified in v1.5.7 $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Membeli ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Cara mengirim ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Membeli dengan ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Menebus ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Jika terjadi masalah</a><br />
');
if (empty($_GET['faq_item'])) {
  $_GET['faq_item'] = '0';
}
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Purchasing ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' adalah sama seperti cara membeli produk yang lain pada toko kami. Anda dapat
  membayar barang-barang ini menggunakan cara-cara pembayaran standar toko ini.
  Apabila telah dibeli maka nilai dari ' . TEXT_GV_NAME . ' akan ditambahkan ke Akun 
   ' . TEXT_GV_NAME . ' pribadi Anda. Jika Anda memiliki dana dalam Akun ' . TEXT_GV_NAME . ' Anda, Anda akan 
  melihat bahwa jumlah tersebut sekarang diperlihatkan dalam kotak Troli, dan juga menyediakan sebuah
  tautan ke sebuah halaman dimana Anda dapat memberikan ' . TEXT_GV_NAME . ' kepada seseorang yang lain lewat Email.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Cara Mengirim ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Anda dapat mengirim ' . TEXT_GV_NAME . ' dari Halaman Akun. 
  Ketika Anda mengirim sebuah ' . TEXT_GV_NAME . ' Anda harus menentukan hal-hal berikut ini.
  Nama orang yang Anda kirimkan ' . TEXT_GV_NAME . ' tersebut.
  Alamat email dari orang yang Anda kirimkan ' . TEXT_GV_NAME . ' tersebut.
  Jumlah yang ingin Anda kirimkan. (Harap diingat bahwa Anda tidak perlu mengirim seluruh jumlah
  yang berada dalam ' . TEXT_GV_NAME . ' Saldo Anda.)
  Pesan singkat opsional yang akan muncul di email;
  Harap pastikan bahwa Anda telah memasukkan semua informasi dengan benar, meskipun
  Anda akan diberikan kesempatan untuk mengubah ini sebanyak yang Anda inginkan sebelumnya
  email sebenarnya dikirim.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Membeli dengan ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Jika Anda memiliki dana dalam Akun ' . TEXT_GV_NAME . ' Anda, Anda dapat menggunakan dana tersebut untuk
  membeli barang lainnya pada toko kami. Pada tahap Anda selesai berbelanja, sebuah kotak tambahan akan
  muncul. Ketikkan jumlah yang ingin digunakan dari Saldo dalam Akun ' . TEXT_GV_NAME . ' Anda.
  Harap dicatat: Anda akan tetap bisa untuk memilih cara pembayaran lainnya jika
  tidak cukup Saldo dalam Akun ' . TEXT_GV_NAME . ' Anda untuk memenuhi biaya pembayaran Anda.
  Jika Anda memiliki kelebihan Saldo dalam Akun ' . TEXT_GV_NAME . ' Anda daripada total biaya
  pembelian Anda, maka Saldo akan dibiarkan dalam Akun ' . TEXT_GV_NAME . ' Anda untuk
  digunakan masa depan.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Menebus ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Jika Anda telah menerima sebuah ' . TEXT_GV_NAME . ' lewat Email, berisikan detail tentang orang yang mengirim
  ' . TEXT_GV_NAME . ' tersebut kepada Anda, bersama dengan sebuah pesan singkat dari mereka. Email 
  tersebut juga akan berisi ' . TEXT_GV_REDEEM . ' ' . TEXT_GV_NAME . '. Suatu hal yang baik untuk Anda mencetak 
  email ini untuk referensi di masa depan. Anda sekarang dapat menebus ' . TEXT_GV_NAME . ' tersebut dalam
  satu dari dua cara.<br /><br />
  1. Dengan mengeklik tautan yang terkandung dalam email untuk tujuan ini.
  Ini akan membawa Anda ke halaman Penebusan ' . TEXT_GV_NAME . ' toko ini. Anda kemudian akan diminta
  untuk membuat sebuah akun, sebelum ' . TEXT_GV_NAME . ' tersebut divalidasi dan ditempatkan pada akun 
   ' . TEXT_GV_NAME . ' Anda dan siap untuk belanja produk apa saja dari toko kami.<br /><br />
  2. Selama proses selesai berbelanja, pada halaman yang sama tempat Anda memilih sebuah cara pembayaran
  akan terdapat sebuah kotak untuk mengetikkan ' . TEXT_GV_REDEEM . '. Ketikkan ' . TEXT_GV_REDEEM . ' disini, dan
  klik tombol Tebus. Kode akan 
  divalidasi dan jumlahnya akan ditambahkan ke Saldo ' . TEXT_GV_NAME . ' Anda. Anda dapat menggunakan jumlah tersebut untuk membeli suatu barang dari toko kami.');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Jika terjadi masalah.');
  define('SUB_HEADING_TEXT','Untuk setiap pertanyaan yang berkenaan dengan Sistem ' . TEXT_GV_NAME . ', silakan hubungi toko ini
  melalui email di '. STORE_OWNER_EMAIL_ADDRESS . '. Mohon pastikan bahwa Anda telah memberikan
  sebanyak mungkin informasi terkait isu sehingga kami dapat mengatasi masalah tersebut. ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Silakan pilih salah satu pertanyaan dari pertanyaan-pertanyaan di atas.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Silakan ketikkan kode penebusan ' . TEXT_GV_NAME . ' Anda: ');
  define('TEXT_GV_REDEEM_ID', 'Kode Penebusan:');
