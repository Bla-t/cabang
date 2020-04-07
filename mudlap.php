<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	include ("heade.html");
	include ("navbar2.html");
?>


</head>
<body>

<div class="jumbotron text-center" style="background: url(image/back.jpg) fixed;">
  <h1 class="display-1">Laporan Distribusi</h1></br>
</div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/lapdis.1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>-Cek Laporan Distribusi</h1>
	     <h6>Pada menu ini terdapat menu yang sama dengan di dalam menu <kbd>LAPORAN</kbd>. Di dalam menu petugas di haruskan untuk mengecek data barang yang terkirim dan tidak terkirim. Seperti di dalam gambar terdapat dua tombol yaitu : <kbd>CEK LAPORAN BARANG</kbd> dan <kbd>CEK LAPORAN SURAT</kbd>.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lapdis.2.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Cek Barang Tidak Terkirim</h1>
	     <h6>Hal pertama yang di lakukan petugas adlaha untuk mengecek kembali apabila ada barang yang tidak terkirim atau kurang di dala menu <kbd> CEK LAPORAN BARANG</kbd>. Kemudian pilih tombol <kbd> CEK LAPORAN BARANG </kbd>yang berada di dalam gambar di atas.<br/></h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lapdis.3.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Scan Barang Tidak Terkirim</h1>
	     <h6>Kemudian setelah memilih tombol <kbd>CEK LAPORAN BARANG</kbd> lanjutkan seperti mengecek bongkar barang seperti <a href="mudis.php">bongkar barang</a>.<br/> Apabila tidak ada barang yang tidak terkirim / kurang, maka pilih tombol <kbd>PROSES BONGKAR SELESAI</kbd> untuk si lanjutkan di proses cek surat.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lapdis.4.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Cek Laporan Surat </h1>
	     <h6>Selanjutnya pilih tombol <kbd>CEK LAPORAN SURAT</kbd> untuk melakukan cek surat dan memberikan keterangan bahwa barang tersebut telah di terima oleh penerima yang bersangkutan.<br/>Kemudian pilih tombol <kbd>CEK LAPORAN SURAT</kbd> yang berada di dalam gambar.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lapdis.5.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Cek Surat Resi</h1>
	     <h6>Kemudian cantumkan surat dari data yang telah di distribusikan tadi untuk mencantumkan resi tersebut masukan nomor resi yang tercantum di surat menuju kolom <kbd>Scan Surat</kbd> yang berada di sebelah kiri tombol <kbd>QR SCAN</kbd>.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lapdis.5.1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Keterangan Barang Terkirim</h1>
	     <h6>Lalu di lanjutkan untuk memeberikan keterangan bahwa barang yang di distribusikan telah sampai ke penerima apabila sudah terkirim, jika belum isikan keterangan bahwa barang belum terkirim ke penerima dan selanjutnya akan di arahkan untuk memeberikan alasan kenapa barang tersebut tidakterkirim.<br/> isikan juga keterangan apabila barang tersebut terkirim dan di bayar di tujuan, tagih di tujuan, tagih penerima. apabila barang di bayar di tujuan maka pilih keterangan <kbd>LUNAS</kbd> di dalam kolom <kbd>TAGIHAN</kbd>. untuk kelengkapan keterangan isikan nama penerima di kolom <kbd>NAMA PENERIMA</kbd> jika ada, nila tidak ada dan hanya berisi tanda tangan dari penerima maka isikan paraf.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lapdis.6.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Laporan Surat yang Telah di Cek</h1>
	     <h6>Setelah semua data telah di beri keterangan maka lanjutkan untuk memnyelesaikan proses cek laporan surat dengan memilih tombol <kbd>CEK SURAT SELESAI</kbd> kemudian data tersebut akan berpindah kedalam menu <kbd>SELESAI</kbd>.</h6><br/> 
	   </div>
	</div><br/>
</div>


</body>
<br/>
<footer>
<?php
	include ("button.html");
?>
  <ul class="pagination pagination-lg justify-content-center btn-dark">
	<li class="page-item"><a class="page-link" href="mudpros.php">Proses Sebelumnya</a></li>&nbsp&nbsp
	<li class="page-item"><a class="page-link" href="mudsel.php">Proses Selanjutnya</a></li>
    </ul>
</footer>
</html>