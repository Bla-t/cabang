<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
	include ("heade.html");
	include ("navbar.html");

// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:admin/index.php");
}else{
  header("location:index.php?pesan=gagal");
}

	?>

</head>
<body>


<div class="jumbotron text-center" style="background: url(image/jala2.jpg) fixed;">
  <h1 class="display-1">Data Total</h1></br>
  </div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/step8-1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Tabel Data Total</h1>
	     <h6>Di menu ini dapat di lihat bahwa semua data yang di buat di instansi ini(Agen Krekot) di tampilkan dalam menu Data total. Untuk mengetahui berapa Data yang telah di buat di tempat tersebut, klik pada kolom Waktu Tampil dan pilih Semua, dan jika ingin mengetahui berapa data yang telah di buat berdasarkan tujuan klik Select tujuan dan pilih tujuan yang ingin di tampilkan.</h6>
	     <h6>Untuk Waktu Tampil Dan Select tujuan dapat di rubah sesuai keinginan. Misal ingin melihat dalam jangka waktu 7 hari berapa data barang yang telah di buat di tempat tersebut, maka pada waktu tampil set pada 7 hari, dan bila ingin mengetahui berapa data barang berdasarkan tujuan Semarang maka pada kolom Select tujuan pilih tujuan Semarang.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/step8-1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Gambar Berdasarkan Waktu 30 Hari, Semua Tujuan</h1>
		 <h6>Pada tabel terlihat bahwa dalam 30(tiga puluh) hari terdapat 4(empat) data barang yang telah di buat dengan status 2(dua) data barang di proses dan 2(dua) data barang dibatalkan.dan jika data dari tabel tertsebut ingin di cetak atau di gunakan sebagai arsip internal klik pada tombol"Export Data ke Excel".</h6><br/>
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
	<li class="page-item"><a class="page-link" href="waiting.php">Proses Sebelumnya</a></li>&nbsp&nbsp
    <li class="page-item"><a class="page-link" href="masalah.php">Proses Selanjutnya</a></li>
  </ul>
</footer>
</html>
