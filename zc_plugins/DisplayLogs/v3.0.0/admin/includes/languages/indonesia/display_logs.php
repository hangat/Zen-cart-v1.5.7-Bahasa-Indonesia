<?php
// -----
// Part of the "Display Logs" plugin for Zen Cart v1.5.0 or later
//
// Copyright (c) 2012-2017, Vinos de Frutas Tropicales (lat9)
//
define('HEADING_TITLE', 'Tampilkan File Log Debug');

define('TABLE_HEADING_FILENAME', 'Nama File');
define('TABLE_HEADING_MODIFIED', 'Tanggal Dimodifikasi');
define('TABLE_HEADING_FILESIZE', 'Ukuran File (byte)');
define('TABLE_HEADING_DELETE', 'Hapus?');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('BUTTON_DELETE_SELECTED', 'Hapus yang Dipilih');
define('DELETE_SELECTED_ALT', 'Hapus semua file yang dipilih');
define('BUTTON_DELETE_ALL', 'Hapus Semua');
define('DELETE_ALL_ALT', 'Hapus semua file dalam tampilan saat ini');

define('ICON_INFO_VIEW', 'Lihat isi file ini');

define('DISPLAY_DEBUG_LOGS_ONLY', 'Hanya tampilkan debug-log?');
define('LOG_SORT_ASC', 'Asc');
define('LOG_SORT_DESC', 'Desc');

define('TEXT_HEADING_INFO', 'Isi File');

// -----
// Sort-order descriptions, used in the instructions' display.
//
define('TEXT_MOST_RECENT', 'paling baru');
define('TEXT_OLDEST', 'paling lama');
define('TEXT_SMALLEST', 'terkecil');
define('TEXT_LARGEST', 'terbesar');

// -----
// The TEXT_INSTRUCTIONS string is passed into sprintf to produce the instructions given on the plugin's main display,
// using the following variables:
//
// %1$u ... The maximum size of a fully-displayed file.
// %2$s ... Contains a descriptive string identifying the current sort order
// %3$u ... The number of log files currently being displayed.
// %4$u ... The number of log files currently present in the log-related directories.
// %5$s ... The "included" prefixes for the log-files displayed.
// %6$s ... The "excluded" prefixes for the log-files displayed.
//
$imageName = zen_image (DIR_WS_IMAGES . 'icon_info.gif', ICON_INFO_VIEW);
define('TEXT_INSTRUCTIONS', '<br /><br />File-file tersebut dapat diurutkan dalam urutan naik atau turun (berdasarkan tanggal modifikasi terakhir atau ukuran file) dengan mengklik salah satu tautan <em>Asc</em> atau <em>Desc</em>. Klik pada ' . $imageName . ' ikon untuk melihat konten file terkait. Hanya yang byte pertama %1$u dari file yang dipilih akan dibaca; jika suatu file &quot;terlalu-besar&quot;, <em>Ukuran File</em> akan disorot seperti <span class="bigfile">ini</span>.<br /><br />Mengklik tombol <strong>hapus semua</strong> akan menghapus semua file yang sedang dilihat; mengklik <strong>hapus yang dipilih</strong> akan menghapus hanya file-file itu dengan kotak centang yang dicentang.<br /><br />Sedang melihat %2$s %3$u of %4$u file log dengan awalan ini <code>%5$s</code> dan <b>tidak</b> cocok dengan ini <code>%6$s</code>.<br />');

define('JS_MESSAGE_DELETE_ALL_CONFIRM', 'Anda yakin ingin menghapus file \'+n+\' ini?');
define('JS_MESSAGE_DELETE_SELECTED_CONFIRM', 'Anda yakin ingin menghapus file yang dipilih \'+terpilih+\' ?');

define('WARNING_NOT_SECURE','<span class="errorText">CATATAN: Anda tidak mengaktifkan SSL. Konten file yang Anda lihat dari halaman ini tidak akan dienkripsi dan dapat menimbulkan risiko keamanan.</span>');
define('WARNING_NO_FILES_SELECTED', 'Tidak ada file yang dipilih untuk dihapus!');
define('WARNING_SOME_FILES_DELETED', 'Peringatan: Hanya %u of %u file log telah dihapus; periksa izin.');
define('SUCCESS_FILES_DELETED', '%u file log telah dihapus.');