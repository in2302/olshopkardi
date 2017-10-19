<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>

<div class="col-md-10">
	<center><h3>Selamat datang !!!</h3></center>	
    <center><h3>Aplikasi Berniaga</h3></center>
    <center><h3>Kerjasama Pak Kardi dengan IN23 Corporation</h3></center>
    <center><h3>Nikmatilah sensasi berbelanja di toko kami, semoga anda terpuaskan dengan pelayanan kami, karena ketika anda puas kami lebih puas</h3></center>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>