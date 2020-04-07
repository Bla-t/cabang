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
  <h1 class="display-1">Surat Masuk Distribusi</h1></br>
</div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/surmas.bel.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Daftar Surat Masuk</h1>
	     <h6>Di dalam menu awal data surat masuk terdapat daftar dari data barang yang akan masuk ke dalam cabang bersangkutan. Seperti di lihat pada gambar, data tersebut berupa nomor surat jalan atau langsir contoh <kbd>SJ/TKL/16032020/0005</kbd>. Dan di sebelah kiri daftar - daftar tersebut terdapat dua tombol yang di gunakan untuk memproses data barang masuk yang berikutnya akan di distribusikan ke penerima. </h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/surmas.is.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Isi Dari Daftar Data </h1>
		 <h6>Di dalam daftar tadi apabila kita pilih salah satu nomor surat jalanya maka akan muncul daftar dari surat jalan/ langsir yang telah dipilih tadi. Pada daftar ini apabila akan memulai proses cek surat maka pilih tombol <kbd>CHECK SURAT MASUK</kbd> di sebelah tombol back, apabila ingin mencetak surat jalan tersebut juga telah di sediakan tombol untuk mendownload data ke format excel.<br/> Apabila sudah pilih tombol <kbd>BACK</kbd>.</h6><br/>
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/surmas.ceksur.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Cek Surat Masuk</h1>
		 <h6>Setelah memilih <kbd>CHECK SURAT</kbd> selanjutnaya akan di arahkan ke menu yang hampir mirip dengan cek surat pada surat langsir, begitu juga bagaimana tata cara untuk mengecek surat tersebut. Apabila pengecekan suart sudah selesai pilih tombol selesai.</h6><br/>
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lokal1=muat langsir.18.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Contoh Surat yang Berhasil Masuk Sesuai Dengan Barang yang Telah di Muat</h1><br/>
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lokal1=muat langsir.20.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Contoh Surat yang Berhasil Masuk Sesuai Dengan Barang yang Telah di Muat</h1><br/>
		 <h6>Dalam proses ini terlihat sama seperti pada <a href="langsir.php">proses cek surat langsir</a>, cara memproses nay pun hampir sama perbedaanya hanya untuk proses ini hanya untuk srat masuk dari cabang lain, sedangkan cek surat langsir hanya untuk surat jalan / surat jalan pengepul...</h6><br/>
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/surmas.acbong.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- ACC Bongkar Barang</h1><br/>
		 <h6>Dalam menu ini berguna untuk melanjutkan proses bongkar barang yang di lanjutkan oleh ceker, untuk melakukan cukup pilih tombol <kbd>ACCPROSES BONGKAR</kbd> yang terdapat di sebelah tombol <kbd>BACK</kbd>. kemudian akan di arahkan menuju menu utama yang sebelunya untuk di eksekusi. Untuk metode pembongkaran muat hampir sama juga dengan proses muat barang yang berada di menu <a href="muatbar.php">Tampilan Dalam Muat Surat Langsir / Surat Jalan</a></h6><br/>
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/surmas.sel.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Bongkar Barang Selesai</h1><br/>
		 <h6>Setelah semua proses telah di lakukan maka data yang tadi berada di <kbd>Surat Masuk</kbd> akan berpindah ke <kbd>SURAT SELESAI</kbd>.</h6><br/>
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
	<li class="page-item"><a class="page-link" href="langsir.php">Proses Sebelumnya</a></li>&nbsp&nbsp
    <li class="page-item"><a class="page-link" href="mudis.php">Proses Selanjutnya</a></li>
  </ul>
</footer>
</html>