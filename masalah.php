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
  <h1 class="display-1" style="color: #FFC320 ;">Sta/Bta, Barang Bermasalah</h1></br>
  </div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/bermasalah.1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Menu Barang Bermasalah</h1>
	     <h6>Di dalam menu ini menampilkan data barang yang apabila waktu cek barang turun dari cabang lain mengalami masalah seperti jumlah barang yang kurang / surat yang tidak ikut serta dengan pengiriman.<br/> Pada menu ini juga tertera beberapa tombol untuk menyelesaikan barang yang bermasalah. <kbd>cari</kbd> pada kolom ini bertujuan untuk menemukan barang bermasalah sesuai dengan nomor resi tertentu, dan apabila list / daftar data terlalu banyak, <kbd>tambah surat</kbd> tombol ini di gunakan untuk melengkapi data surat dari barang yang telah ada sebelumnya, <kbd>Tambah Barang</kbd> tombol ini di gunakan untuk mengecek barcode barang yang kurang / nyasar menggunakan foto QR code, <kbd>+ brng dngn scan manual</kbd> sama seperti Tambah barang hanya saja menggunakan scan manual seperti biasa. Apabila ingin mengetahui data lebih lengkap dari barang yang bermasalah tersebut, pilih pada nomor resi yang di inginkan (berwarna merah).</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/bermasalah.2.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Isi Data Barang Bermasalah</h1>
		 <h6>Setelah nomor resi yang di inginkan telah di pilih, maka akan muncul menu seperti pada gambar di atas. Dapat di lihat bahwa dari data yang telah di pilih akan memberikan informasi yang lebih, seperti detil data bongkar di tujuan dan detil data bongkar di cabang / pengepul lain apabila barang yang bermasalah tersebut nyasar.<br/> Selain itu di dalam detil scan bongkar di tujuan juga menampilkan detil barang saat tiba di tujuan pada proses bongkar barang.</h6><br/>
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/bermasalah.3.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Tambah Hanya Surat di Menu Sta/Bta</h1>
		 <h6>Apabila barang yang di bongkar sudah  lengkap tetapi masih masuk di menu bermasalah kemungkinan barang tersebut tidak di ikutsertakan juga surat resi yang sesuai dengan barang tersebut, masalah tersebut bisa di atasi dengan mengcopy nomor resi dan mencetaknya lagi kemudian di lampirkan di data barang yagn berada di menu bermasalah (Sta/ Bta).<br/>Untuk memasukan data surat ke dalam data barang cukup pilih tombol <kbd>TAMBAH SURAT</kbd> kemudian akan muncul menu tambahan seperti yang tertera pada gambar dan pilih di bilah kolomnya, setelah itu masukan nomor resi yang tertera di surat kemudian tekan <kbd>enter</kbd> / nila menggunakan scaner komputer cukup dekatkan code barcode seperti biasa.<br/> Berlaku juga untuk scan barang.</h6><br/>
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
	<li class="page-item"><a class="page-link" href="data total.php">Proses Sebelumnya</a></li>&nbsp&nbsp
    <li class="page-item"><a class="page-link" href="nyasar.php">Proses Selanjutnya</a></li>
  </ul>
</footer>
</html>
