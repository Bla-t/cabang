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
  <h1 class="display-1">Data Laporan Distribusi Selesai</h1></br>
</div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/dissel.1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>-Laporan Distribusi Selesai</h1>
	     <h6>Setelah Semua Proses laporan Distribusi telah di laksanakan maka data laporan distribusi akan muncul di menu <kbd>SELESAI</kbd>.</h6><br/> 
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
	<li class="page-item"><a class="page-link" href="mudlap.php">Proses Sebelumnya</a></li>&nbsp&nbsp
	<li class="page-item"><a class="page-link" href="wailist.php">Proses Selanjutnya</a></li>
    </ul>
</footer>
</html>
