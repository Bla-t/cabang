<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	include ("heade.html");
	include ("navbar2.html");
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

<div class="jumbotron text-center" style="background: url(image/back.jpg) fixed;">
  <h1 class="display-1">Pengiriman Distribusi</h1></br>
</div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/setar.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Seting Area</h1>
	     <h6>Di dalam menu ini terdapat menu untuk menambahkan area tujuan dari barang yang akan di distribusikan ke alamat. Tujuan di buat set area ini bertujuan untuk cabang atau petugas pengiriman agar dapat mengetahui bahwa barang yang di di bawa sudah sesuai dengan tujuan yang di tempuh oleh pengiriman distribusi.<br/>Pada area tersebut juga dapat di hapus atau di edit / rubah dengan cara menekan tombol <br/><kbd>x HAPUS</kbd> untuk menghapus data dan <kbd>EDIT</kbd>. Untuk merubah data cukup edit dengan data yang di inginkan kemudian tekan tombol <kbd>enter</kbd> pada keyboard untuk menyimpan perubahan. Dan apabila ingin menambahkan area distribusi cukup tekan tombol <kbd>TAMBAH AREA</kbd>.</h6><br/> 
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
	<li class="page-item"><a class="page-link" href="pend.php">Proses Sebelumnya</a></li>&nbsp&nbsp
    </ul>
</footer>
</html>
