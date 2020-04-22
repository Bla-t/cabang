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
  <h1 class="display-1">Waiting List</h1></br>
  </div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/step9-1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Tabel Data Total</h1>
	     <h6>Pada Menu Waiting list ini terlihat hampir sama dengan Data total, namun kegunaan dan isi dari tabel ini berbeda dengan tabel data total. Jika data total untuk mengetahui berapa data yang telah di buat maka Waiting list adalah tabel yang berisi data barang yang "masih" berada di agen tersebut/ belum terkirim karena alasan tertentu. </h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/step9-2.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>-Waiting List Berdasarkan Tujuan Bandung</h1>
		 <br/>
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
	<li class="page-item"><a class="page-link" href="">Proses Sebelumnya</a></li>&nbsp&nbsp
    <li class="page-item"><a class="page-link" href="data total.php">Proses Selanjutnya</a></li>
  </ul>
</footer>
</html>
