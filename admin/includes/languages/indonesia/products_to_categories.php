<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */

define('HEADING_TITLE','Produk ke Banyak Kategori Link Manager');
define('HEADING_TITLE2','Kategori / Produk');//used by prev_next if HEADING_TITLE not defined...so never used!

//Select Product
define('TEXT_HEADING_PRODUCT_SELECT', 'Pilih Produk');
define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'PERINGATAN: Produk yang dipilih sebelumnya tidak lagi terhubung ke kategori ini.');//when category is set, but no product filter set (no product selected)

// Change Master Category
define('TEXT_PRODUCTS_ID_INVALID', 'PERINGATAN: ID Produk #%u tidak valid / tidak ada dalam database.');
define('TEXT_INFO_MASTER_CATEGORY_CHANGE','Suatu produk memiliki ID Kategori Induk (untuk tujuan penentuan harga) yang dapat dianggap sebagai kategori di mana produk sebenarnya <i>berada</i>. Selain itu, suatu produk dapat <i>ditautkan</i> (disalin) ke sejumlah kategori lain, di mana harga dapat dimodifikasi karena kondisi pada kategori-kategori tertaut tersebut.<br>ID Kategori Induk dapat diubah dengan menggunakan tarik-turun Kategori Induk ini, yang hanya menawarkan kategori <strong>yang ditautkan</strong> sebagai alternatif yang mungkin.<br>Untuk mengatur ID Kategori Induk ke kategori<strong>lainnya</strong>, tautkan terlebih dahulu ke kategori baru menggunakan tabel di bawah ini, dan Perbarui. Kemudian gunakan dropdown ini untuk menetapkan kembali kategori master ke kategori baru itu.');

// Product InfoBox
define('TEXT_INFOBOX_HEADING_SELECT_PRODUCT', 'Pilih Produk berdasarkan ID#');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Tampilkan Produk ke Kategori Tautan untuk: ');
define('TEXT_PRODUCTS_ID', 'ID# Produk');
define('TEXT_PRODUCTS_NAME', 'Produk: ');
define('TEXT_PRODUCTS_PRICE', 'Harga: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Perbarui Tautan Kategori untuk');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Pilih Produk Lain dengan ID#');
define('BUTTON_CATEGORY_LISTING', 'Daftar Kategori');

// Link product to multiple categories
define('TEXT_HEADING_LINKED_CATEGORIES', 'Kategori Tertaut');
define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>PERINGATAN:</strong> ID MASTER CATEGORIES harus ditetapkan');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO', '<p>Produk ini saat ini ditautkan dengan kategori yang dipilih di bawah ini (Anda dapat mengubah jumlah kolom yang ditampilkan pada <a target="_blank" href="configuration.php?&amp;gID=3">halaman ini</a>).<br>Untuk menambah / menghapus tautan, pilih / batalkan centang pada kotak sebagaimana diperlukan dan kemudian klik pada Tombol ' . BUTTON_UPDATE_CATEGORY_LINKS . ' .</p><p>Perhatikan bahwa tindakan produk / kategori tambahan tersedia menggunakan Global Tools di bawah ini.</p>');
define('TEXT_LABEL_CATEGORY_DISPLAY_ROOT', 'Tampilkan Subkategori di bawah:');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY', 'Ditetapkan sebagai default');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE', 'Tetapkan Kategori Target yang dipilih ini sebagai Default untuk ditampilkan');
define('TEXT_LABEL_SELECT_ALL_OR_NONE', 'Pilih Semua atau Tidak Ada');
define('ERROR_CATEGORY_ID_INVALID', 'ID#%u Kategori Tertaut tidak valid (tidak ditambahkan).');
define('SUCCESS_PRODUCT_LINKED_TO_CATEGORIES', 'Tautan produk ke berbagai kategori diperbarui untuk: %s');
define('WARNING_PRODUCT_UNLINKED_FROM_CATEGORY', 'Produk tidak terhubung dari kategori yang sebelumnya dipilih "%1$s" ID#%2$u, dan sekarang ditampilkan di kategori masternya.');
define('WARNING_MAX_INPUT_VARS_LIMIT', 'PERINGATAN: Ada% 1 $ u subkategori tersedia untuk menautkan pada halaman ini, yang lebih besar dari batas PHP "max_input_vars" (saat ini %2$u). Ini berarti tidak lebih dari %2$u kategori dapat ditautkan sampai batas PHP ini ditingkatkan di hosting Anda.');

// Global Tools
define('HEADER_CATEGORIES_GLOBAL_TOOLS', 'Alat Produk / Kategori Global');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '<p>Catatan: Produk tidak perlu dipilih untuk menggunakan alat ini. Namun, memilih produk di atas akan menampilkan kategori yang tersedia (dan nomor ID mereka saat melayang).</p>');

// Copy linked categories from one product to another product
define('TEXT_HEADING_COPY_LINKED_CATEGORIES', 'Salin Kategori Tertaut ke Produk Lain');
define('TEXT_INFO_COPY_LINKED_CATEGORIES', 'Salin kategori tertaut dari produk yang dipilih saat ini% ke produk lain. <br> Anda dapat <strong> Tambahkan </strong> kategori produk ini ke Produk Target, atau Anda dapat <strong> Ganti </strong> (hapus + tambahkan) kategori tertaut produk Target. <br> Catatan: Tindakan ini tidak menyalin kategori utama produk sumber sebagai kategori tertaut untuk kategori target, melainkan hanya menyalin kategori tertaut.');
define('TEXT_LABEL_ENABLE_COPY_LINKS', 'Enable product selection dropdown (daftar produk <b>Semua</b>)');
define('TEXT_OPTION_LINKED_CATEGORIES', 'Pilih Produk Target');
define('BUTTON_COPY_LINKED_CATEGORIES_ADD', 'Salin-Tambahkan Kategori Tertaut');
define('BUTTON_COPY_LINKED_CATEGORIES_REPLACE', 'Salin-Ganti Kategori Tertaut');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD', 'Kategori Tertaut (%1$u) Telah ditambahkan:<br>DARI Produk Referensi: %2$s<br>KE Produk Target: %3$s');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE', 'Kategori Tertaut (%1$u) untuk Produk Target: %3$s<br>telah <em>diubah</em> oleh Kategori Produk Tertaut: %2$s');
define('WARNING_COPY_LINKED_CATEGORIES_NO_TARGET', 'Produk target tidak dipilih!');
define('WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL', 'Tidak ada hubungannya! <br>Sumber Produk: %1$s<br>tidak memiliki <em>tambahan</em> Kategori Tertaut ke copy ke<br>Produk Target: %2$s');
define('ERROR_MASTER_CATEGORY_MISSING', 'KESALAHAN: ID Kategori Induk hilang dari tabel "' . TABLE_PRODUCTS_TO_CATEGORIES . '"<br>untuk Produk: %s');

// Copy as linked, all products from category source to category target
define('TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Tautkan (salin) Produk dari satu Kategori ke Kategori lain');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Contoh: Salin dari Kategori Sumber ID#8 ke Kategori Target ID#22 akan membuat salinan SEMUA produk yang terhubung dalam Kategori 8, dalam Kategori 22.');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Pilih SEMUA produk dari ID# Kategori Sumber :');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Tautkan (salin) ke Nomor Kategori Target ID#: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Salin Produk sebagai Tertaut');
define('WARNING_CATEGORY_SOURCE_NOT_EXIST','<strong>Sumber</strong> Kategori ID#%u tidak valid (tidak ada)');
define('WARNING_CATEGORY_TARGET_NOT_EXIST','<strong>Target</strong> Kategori ID#%u tidak valid (tidak ada)');
define('WARNING_CATEGORY_IDS_DUPLICATED', 'Peringatan: ID Kategori yang sama (#%u)');
define('WARNING_CATEGORY_NO_PRODUCTS', '<strong>Sumber</strong> Kategori ID#%u tidak valid (tidak mengandung produk)');
define('WARNING_CATEGORY_SUBCATEGORIES', '<strong>Target</strong> Kategori ID#%u tidak valid (mengandung sub kategori)');
define('SUCCESS_PRODUCT_COPIED', 'produk: %1$s ditautkan ke kategori ID#%2$u<br>');
define('SUCCESS_COPY_LINKED', '%1$u produk ditautkan dari Kategori Sumber ID#%2$u ke Kategori Target ID#%3$u');
define('WARNING_COPY_FROM_IN_TO_LINKED', 'PERINGATAN: Tidak ada produk yang disalin (semua produk dalam Kategori ID#%1$u sudah ditautkan ke dalam Kategori ID#%2$u)');

// Remove linked products in reference category from target category
define('TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED', 'Hapus Produk Tertaut dari Kategori');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Contoh: Menggunakan Kategori Referensi #8 dan Kategori Target #22 akan menghapus produk tertaut dari Kategori Target #22 yang ada di Kategori Referensi #8. Tidak ada produk di Kategori Target #22 yang dapat memiliki ID kategori master #22 (jika demikian, harus dialihkan ke kategori lain).<br><strong>Kategori Saat Ini ID#%u.</strong>');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Pilih SEMUA Produk dalam Kategori Referensi: ');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Hapus Semua Produk yang Ditautkan dari Kategori Target: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Hapus Produk Tertaut');
define('SUCCESS_REMOVED_PRODUCT', 'produk: %1$s telah dihapus dari kategori ID#%2$u<br>');
define('SUCCESS_REMOVE_LINKED_PRODUCTS', '%u produk yang ditautkan dihapus');
define('WARNING_REMOVE_FROM_IN_TO_LINKED', 'PERINGATAN: Tidak ada hubungannya! Tidak ada produk dalam ID Kategori Target #% 1 $ u ditautkan dari Kategori Referensi ID#%2$u');
define('WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET','Produk: ID#%1$u "%2$s" (%3$s)<br>memiliki id kategori master yang sama dengan kategori target ID#%4$u<br>');
define('WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT', '<strong>PERINGATAN: MASTER KATEGORI ID KONFLIK!</strong><br>Kategori Referensi ID#%1$u untuk menghapus produk yang ditautkan dalam Kategori Target ID#%2$u.<br>Anda telah meminta penghapusan beberapa produk tertaut dari kategori target. Satu atau lebih dari produk tersebut memiliki ID kategori master yang sama dengan kategori target. Ini berarti bahwa produk tidak "ditautkan" ke kategori target tetapi "berada" dalam kategori itu dan karenanya tidak dapat dihapus sebagai bagian dari permintaan ini untuk menghapus produk <i>tertaut</i>.<br>Jika Anda ingin <i>simpan</i> produk ini, Anda harus mengubahnya ID kategori masternya ke kategori lain (yaitu "Pindahkan" itu) sebelum melakukan proses ini lagi. Ini dapat dilakukan pada halaman ini atau melalui tindakan "Pindahkan" pada halaman daftar Kategori-Produk. Produk pertama dengan ID kategori utama yang bertentangan telah dipilih untuk diedit.<br/>Jika Anda ingin <i>menghapus</i> produk ini, Anda harus menggunakan tindakan "Hapus" pada halaman Daftar Kategori-Produk.');

// Reset Master Categories ID for all products in a category
define('TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Setel ulang ID Kategori Induk untuk SEMUA Produk dalam suatu Kategori');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Contoh: Mengatur Ulang Kategori 22 akan menetapkan ID Kategori Induk 22 untuk SEMUA produk di Kategori 22.');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Setel ulang ID Kategori Induk untuk Semua Produk dalam Kategori: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Atur ulang ID Kategori Induk');
define('SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY', 'Semua produk dalam Kategori ID#%1$d telah diatur ulang untuk memiliki Kategori Induk ID#%1$d');
define('TEXT_CATEGORIES_NAME', 'Nama Kategori');
