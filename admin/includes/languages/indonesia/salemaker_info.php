<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: salemaker_info.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Pembuat Obral');
define('SUBHEADING_TITLE', 'Tips Pemakaian Pembuat Obral:');
define('INFO_TEXT', '<ul>
                      <li>
                        Selalu gunakan a \'.\' sebagai tanda desimal dalam pengurangan dan rentang harga.
                      </li>
                      <li>
                        Isi jumlah dalam mata uang yang sama seperti yang Anda inginkan ketika membuat/mengedit sebuah produk.
                      </li>
                      <li>
                        Dalam kotak Pengurangan, Anda dapat memasukkan sebuah jumlah atau sebuah persentase untuk dikurangi,
                        atau sebuah harga pengganti. (misalnya; kurangi Rp1000.00 dari semua harga, kurangi 10% dari
                        semua harga atau ubah semua harga menjadi Rp50000.00)
                      </li>
                      <li>
                        Ketikkan sebuah rentang harga yang membatasi rentang produk yang akan dipengaruhi. (misalnya;
                        produk dari Rp10000.00 sampai Rp50000.00)
                      </li>
                      <li>
                        Anda harus memilih tindakan yang akan diambil jika sebuah produk adalah produk spesial <i>dan</i> dalam kaitannya dengan obral ini:
						<ul>
                          <li>
                            <strong>Abaikan Harga Spesial - Gunakan ke Harga Produk dan Gantikan Spesial</strong><br>
							Pemotongan harga obral akan dikenakan ke harga normal produk.
                            (misal; Harga normal Rp100.00, Harga Spesial adalah Rp95.00, Ketentuan Obral adalah 10%.
							Maka harga akhir produk akan ditampilkan sebesar Rp90.00 dalam obral. Harga Spesial diabaikan.)
                          </li>
                          <li>
                            <strong>Abaikan Ketentuan Obral - Tidak Ada Obral yang Dikenakan Jika Harga Spesial Ada</strong><br>
                            Pemotongan harga obral tidak akan dikenakan ke Spesial. Harga Spesial akan ditampilkan 
                            seperti jika tidak ada obral yang ditentukan. (misalnya; Harga biasa Rp100.00, harga Spesial adalah Rp95.00,
                            Ketentuan Obral adalah 10%. Maka harga akhir produk akan ditampilkan sebesar Rp95.00 dalam obral.
                            Ketentuan Obral diabaikan.)
                          </li>
                          <li>
                            <strong>Kenakan Pemotongan Harga Obral ke Harga Spesial - Jika Tidak Kenakan ke Harga</strong><br>
                            Pemotongan harga obral akan dikenakan ke harga Spesial. Sebuah harga campuran akan ditampilkan.
                            (misalnya; Harga biasa Rp100.00, Harga Spesial Rp95.00, Ketentuan Obral adalah 10%.
                            Makan harga akhir produk akan ditampilkan Rp85.50. Harga Spesial dikurangi 10%.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Dengan membiarkan tanggal mulai kosong makan akan memulai obral segera.
                      </li>
                      <li>
                        Biarkan harga akhir kosong jika Anda tidak ingin obral untuk kadaluarsa.</li>
                      <li>
                        Dengan memilih sebuah kategori maka akan menyertakan sub-kategori didalamnya secara otomatis.
                      </li>
                    </ul>');
define('TEXT_CLOSE_WINDOW', '[ tutup jendela ]');
?>