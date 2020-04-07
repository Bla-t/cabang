<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php
	include ("heade.html");
?>
</head>
<body>
<?php
	include ("navbar.html");
	?>

<div class="jumbotron text-center" style="background: url(image/karton2.jpg) fixed;">
  <h1 class="display-1" style="color: #F7AE40;">Isi Data Baru</h1>
  <h4 style="color: #F7AE40;">Pembuatan Data Resi Baru Dan Pencetakan Label</h4><br/><br/><br/>
</div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/lokal1=brg masuk.1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #E9E8E6;"><br/>
		 <h1>- Menu Utama</h1>
		 <h6>Pada menu utama ini dapat di lihat terdapat dua menu lagi yaitu menu <kbd>DATA BARU</kbd> dan <kbd>ISI DATA BARANG</kbd>. Pada menu Data Baru terdapat tabel untuk mengisi data untuk pembuatan label dan surat, <br/> yang pertama :<br/><br/> <kbd>Data Barang Baru</kbd> di dalam tabel ini dapat di isi dengan data/ informasi dari pengirim meliputi : <br/><br/> 1.Tujuan <br/> 2. Wilayah / Area dari Tujuan tesebut <br/>3. Kecamatan (yang tercover / jangkauan tujuan yang bersangkutan)<br/> 4. Dari / Nama Pengirim<br/> 5. Kepada / Nama Penerima<br/> 6. Banyaknya/ Coly (jumlah barang yang akan di kirim).<br/><br/> Apabila semua data di atas sudah benar sesuai permintaan konsumen maka di lanjutkan menekan tombol <kbd>-SAVE-</kbd>.<br/><br/>Kemudian <kbd>Cetak Ulang Label Barcode</kbd> di tabel ini dapat di gunakan untuk mencetak ulang Label Barcode apabila terjadi kesalahan pada pencetakan label sebelumnya / dapat juga di gunakan untuk mengganti isi dari data yang telah di buat dalam menu <kbd>Isi Data Barang</kbd>.<br/><br/><br/></h6> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/lokal1=brg masuk.2.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #E9E8E6;">
		 <h1>- Isi Data Barang</h1>
		 <h6>Pada tabel ini isikan informasi yang sesuai dengan deskripsi dari pengirim.<br/><br/>Untuk memulai, masuk pada tabel <kbd>Isi Data Lengkap</kbd> dalam tabel tersebut terdapat kolom <kbd>Nomor Resi</kbd> yang dapat di isi dengan nomor resi yang terdapat pada label yang sudah di cetak sebelumnya.<br/>Setelah nomor resi telah di cantumkan, lanjukan pengisian data di <kbd>Data Pengirim</kbd>, dalam tabel ini isikan Data mulai dari nomor telepon, alamat pengirim lengkap. (untuk kolom Dari dan kolom Kota Asal sudah terisi secara otomatis)<br/><br/>Selanjutnya masuk di dalam tabel <kbd>Data Penerima</kbd>, di tabel ini isikan data yang sama sesuai dengan informasi yang di berikan oleh pihak pengirim.<br/><br/></h6>
		 <h6>Selanjutnya masuk ke dalam tabel sebelah kanan untuk mengisikan data berupa tarif / biaya yang di keluarkan untuk melakukan pengiriman barang tersebut.<br/>Untuk beberapa agen masih menggunakan daftar harga berdasarkan koli, untuk yang lainya hanya menggunakan tarif berdasarkan Berat(Kg) / Kubik(m3).<br/><br/>tarif berdassar <kbd>Kilogram(Kg)</kbd>.<br/>Pada kolom banyak barang(Q) berisi banyaknya jumlah barang yang akan di kirim (terisi otomatis).<br/>Pada kolomberat Barang (kilo) isikan secara manual berat dari keseluruhan barang yang akan dikirim.<br/>Pada kolom Ongkos Berdasar kilo isikan jumlah harga dari berat barang yang akan di kirim.<br/> </h6> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/step4-5.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #E9E8E6;">
		 <h1>- Tabel Perhitungan Biaya Kirim Berdasarkan Coly Harga Global(Q)</h1>
		 <h6>Pada Tabel Harga ini isikan jumlah harga dari keseluruhan barang yang akan di kirim, dan ikuti langkah selanjutnya seperti langkah sebelumnya.</h6> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/step4-6.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #E9E8E6;">
		 <h1>- Tabel Perhitungan Biaya Kirim Berdasarkan Berat(KG)</h1>
		 <h6>Pada Tabel Harga ini isikan data berapa jumlah barang, Berat barang, dan harga berdasarkan berat..</h6> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/step4-7.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #E9E8E6;">
		 <h1>- Tabel Perhitungan Biaya Kirim Berdasarkan Berat Kubik(M3)</h1>
		 <h6>Pada Tabel Harga ini isikan data berapa jumlah barang, Ukuran barang Kubik(M3), dan harga berdasarkan Kubik(M3).</h6> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/step4-8.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #E9E8E6;">
		 <h1>-Contoh Tabel yang Sudah Terisi</h1>
	  </div>
	</div><br/>
	<div class="row">
	   <img src="image/step4-9.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #E9E8E6;">
		 <h1>-Contoh Pencetakan Surat Resi/Barcode</h1>
	  </div>
	</div>
</div>


</body>
<br/>
<footer>
<?php
	include ("button.html");
?>
  <ul class="pagination pagination-lg justify-content-center btn-dark">
    <li class="page-item"><a class="page-link" href="index.php">Sebelumnya</a></li>&nbsp &nbsp
    <li class="page-item"><a class="page-link" href="muatbar.php">Proses Selanjutnya</a>
  </ul>
</footer>
</html>