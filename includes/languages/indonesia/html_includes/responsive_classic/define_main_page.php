<?php 
if (!isset($_SESSION['layoutType'])) {
  $_SESSION['layoutType'] = 'legacy';
}

if ( $detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' ) { ?>

<a href="https://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book-mobile.png" alt="dapatkan manualmu hari ini" title="Sudahkan anda mendapatkannya? Gabung dengan 1000 pengguna Zen Cart yang telah membeli satu satunya Manual Pemiliki Komprehensif !" class="home-image" /></a>
  
<?php  } else if ( $detect->isTablet() || $_SESSION['layoutType'] == 'tablet' ){ ?>

<a href="https://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="dapatkan manualmu hari ini" title="Sudahkan anda mendapatkannya? Gabung dengan 1000 pengguna Zen Cart yang telah membeli satu satunya Manual Pemiliki Komprehensif !" class="home-image" /></a>

<?php  } else if ( $_SESSION['layoutType'] == 'full' ) { ?>

<a href="https://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="dapatkan manualmu hari ini" title="Sudahkan anda mendapatkannya? Gabung dengan 1000 pengguna Zen Cart yang telah membeli satu satunya Manual Pemiliki Komprehensif !" class="home-image" /></a>

<?php  } else { ?>

<a href="https://www.zen-cart.com/book"><img src="includes/templates/responsive_classic/images/zencart-book.png" alt="dapatkan manualmu hari ini" title="Sudahkan anda mendapatkannya? Gabung dengan 1000 pengguna Zen Cart yang telah membeli satu satunya Manual Pemiliki Komprehensif !" class="home-image" /></a>

<?php  } ?>
<p class="biggerText">Paket Template menggunakan PHP Mobile Detect untuk melayani optimasi layout berdasarkan peralatan.  
    Jika anda di Desktop dan ingin melihat Layout Tablet  <a class="red" href="index.php?main_page=index&amp;layoutType=tablet">gunakan tautan ini.</a>  
    Jika anda ingin melihat Layout Mobile <a class="red" href="index.php?main_page=index&amp;layoutType=mobile">gunakan tautan ini.</a>  
    Untuk beralih kembali ke Desktop <a class="red" href="index.php?main_page=index&amp;layoutType=default">gunakan tautan ini.</a></p>
    
<p>Isi ini diletak di berkas: <code> /languages/indonesia/html_includes/YOUR_TEMPLATE/define_main_page.php</code></p>
<p>Anda dapat dengan cepat meng-edit isian ini melalui Admin->Tools->Define Pages Editor, dan pilih define_main_page dari pilihan kontrol pulldown.</p>
<p><strong>CATATAN: Selalu backup berkas ini di<code> /languages/indonesia/html_includes/your_template</code></strong></p>
