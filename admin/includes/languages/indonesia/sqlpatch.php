<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Apr 16 Modified in v1.5.7 $
 */

  define('HEADING_TITLE','Pelaksana Query SQL');
  define('HEADING_WARNING','PASTIKAN UNTUK MEMBUAT CADANGAN DATABASE YANG LENGKAP SEBELUM MENJALANKAN KODE-KODE PROGRAM DISINI');
  define('HEADING_WARNING2','Jika Anda memasang kode-kode program yang merupakan kontribusi dari pihak ketiga, harap dicatat bahwa Anda melakukannya dengan segala resiko Anda yang menanggung sendiri.<br />Zen Cart&trade; tidak membuat jaminan terhadap keamanan dari kode-kode program yang disediakan oleh kontributor pihak ketiga. Lakukan pengujian sebelum Anda menggunakannya pada database Anda yang sudah berjalan ini!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'CATATAN: JANGAN menjalankan kode-kode program peningkatan (upgrade) database Zen Cart&trade; dari halaman ini.<br />Silakan upload direktori <strong>zc_install</strong> yang baru dan laksanakan peningkatan (upgrade) dari sana untuk realibilitas yang lebih baik.');
  define('TEXT_QUERY_RESULTS','Hasil Query:');
  define('TEXT_ENTER_QUERY_STRING','Ketikkan query <br />untuk dilaksanakan:&nbsp;&nbsp;<br /><br />Pastikan untuk<br />mengakhirinya dengan tanda ;');
  define('TEXT_QUERY_FILENAME','Upload berkas:');
  define('ERROR_NOTHING_TO_DO','Kesalahan: Tidak ada sesuatu untuk dilakukan - tidak ada query atau berkas query yang ditentukan.');
  define('TEXT_CLOSE_WINDOW', '[ tutup jendela ]');
  define('SQLPATCH_HELP_TEXT','Alat SQLPATCH memungkinkan Anda menginstal patch sistem dengan menempelkan kode SQL langsung ke textarea '.
                              'isian di sini, atau dengan mengunggah file skrip yang disediakan (.SQL).<br>' .
                              'Saat menyiapkan skrip untuk digunakan oleh alat ini, JANGAN menyertakan awalan tabel, seperti yang akan dilakukan alat ini ' .
                              'secara otomatis memasukkan awalan yang diperlukan untuk database aktif, berdasarkan pengaturan di toko ' .
                              'admin / termasuk / configure.php file (definisi DB_PREFIX).<br><br>' .
                              'Perintah yang dimasukkan atau diunggah hanya dapat dimulai dengan pernyataan berikut, dan HARUS ada di UPPERCASE:'.
                              '<br><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (hanya sebuah tabel tunggal)</li><li>UPDATE IGNORE (hanya sebuah tabel tunggal)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<li>SELECT </li></ul>' .
'<h2>Cara Mahir</h2>Cara berikut ini dapat digunakan untuk menuliskan pernyataan yang lebih rumit apabila dibutuhkan:<br>
Untuk menjalankan sejumlah blok kode bersama-sama sehingga mereka diperlakukan sebagai satu perintah saja oleh MySQL, Anda perlu untuk menentukan nilai "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>." Pengurai nanti akan  memperlakukan sejumlah X buah perintah sebagai satu saja.<br>
Jika Anda menjalankan berkas ini melalui phpMyAdmin atau sejenis, komentar "#NEXT..." akan diabaikan, dan kode-kode program akan diproses dengan baik.<br />
<br><strong>CATATAN: </strong>SELECT.... FROM... dan LEFT JOIN membutuhkan "FROM" atau "LEFT JOIN" untuk berada pada barisnya sendiri dengan tujuan agar kode-kode program pengurai menambahkan awalan tabel.<br><br>
<em><strong>Contoh:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br>
SET @t1=0;<br>
SELECT (@t1:=configuration_value) as t1 <br>
FROM configuration <br>
WHERE configuration_key = \'KEY_NAME_HERE\';<br>
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br>
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';</code><br>&nbsp;</li>

<li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br>
INSERT INTO tablename <br>
(col1, col2, col3, col4)<br>
SELECT col_a, col_b, col_3, col_4<br>
FROM table2;</code><br>&nbsp;</li>

<li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br>
INSERT INTO table1 <br>
(col1, col2, col3, col4 )<br>
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br>
FROM table2 p, table3 pm<br>
LEFT JOIN othercol_f po<br>
ON p.othercol_f = po.othercol_f<br>
WHERE p.othercol_f = pm.othercol_f;</code><br>&nbsp;</li>
</ul>' );
  define('REASON_TABLE_ALREADY_EXISTS','Cannot create table %s because it already exists');
  define('REASON_TABLE_DOESNT_EXIST','Cannot drop table %s because it does not exist.');
  define('REASON_TABLE_NOT_FOUND','Cannot execute because table %s does not exist.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','Cannot insert configuration_key "%s" because it already exists');
  define('REASON_COLUMN_ALREADY_EXISTS','Cannot ADD column %s because it already exists.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Cannot DROP column %s because it does not exist.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Cannot CHANGE column %s because it does not exist.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Cannot insert prod-type-layout configuration_key "%s" because it already exists');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Cannot drop index %s on table %s because it does not exist.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Cannot drop primary key on table %s because it does not exist.');
  define('REASON_INDEX_ALREADY_EXISTS','Cannot add index %s to table %s because it already exists.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Cannot add primary key to table %s because a primary key already exists.');
  define('REASON_NO_PRIVILEGES','User '.DB_SERVER_USERNAME.'@'.DB_SERVER.' does not have %s privileges to database '.DB_DATABASE.'.');
  
define('ERROR_RENAME_TABLE', 'RENAME TABLE command not supported by SQLpatch tool. Please use phpMyAdmin instead.');
define('ERROR_LINE_INCOMPLETE', 'Query incomplete: missing closing semicolon.');

define('TEXT_EXECUTE_SUCCESS', 'Success: %u statement(s) processed.');
define('ERROR_EXECUTE_FAILED', 'Query failed: %u statement(s) processed.');
define('ERROR_EXECUTE_IGNORED', 'Note: %u statements ignored. See database table "upgrade_exceptions" for additional details.');

define('TEXT_UPLOADQUERY_SUCCESS', 'Success: %u statement(s) processed via file upload');
define('ERROR_UPLOADQUERY_FAILED', 'Query failed: %u statement(s) processed via file upload');
define('ERROR_UPLOADQUERY_IGNORED', 'Note: %u statements ignored via file upload. See database table "upgrade_exceptions" for additional details.');
