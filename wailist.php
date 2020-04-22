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
  <h1 class="display-1">Waiting List/Ambil Gudang/Pending/Data Total</h1></br>
</div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/waitdis.1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Waiting List Distribusi</h1>
	     <h6>Pada menu waiting list distribusi ini tercantum barang barang yang sudah di proses <a href="distribut.php">bongkar muat</a> yang kemudian di lanjutkan di proses <a href=""></a>. Apabila ada barnag yang belum di distribusikan akan terlihat di daftar menu ini. Jika penerima ingin mengambil barang di gudang bersangkutan maka pilih tombol ambil gudang yang berada di sebelah kiri layar monitor, untuk mengetahui nomor resi yang sesuai dengan barang yang di ambil tersebut cukup tekan tombol <kbd>ctrl + f</kbd> pada browser yang di gunakan kemudian cantumkan nomor resi yang akan di ambil di gudang. <br/>jika barang yang di kirim / di distribusikan tadi kembali ke gudang lagi/ tidak terkirim maka pilih tombol <kbd>PENDING</kbd> di sebelah tombol <kbd>AMBIL GUDANG</kbd>, dan jangan lupa untuk mengisikan alasan kenapa barang tersebut di pendng / tidak terkirim.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/waitdis.2.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Waiting List Ambil Gudang</h1>
	     <h6>Setelah data di dalam waiting lst telah di pilih / di ambil oleh penerima di gudang, maka data tersebut akan berpindah di dalam tabel ini. Kemudian lanjutkan untuk menginput data resi yang terdapat pad nomor resi dan di isikan ke dalam kolom <kbd>cari</kbd> untuk mempermudah dalam pemrosesan barang ambil gudang.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/dispend.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Data Pending</h1>
	     <h6>Di dalam menu ini berisikan data data dari pengiriman disribusi yang tidak terkirim ke penerima, dan kemudian di pilah dan di tempatkan di dalam menu ini. <br/>dalam data tersebut berisikan informasi / alasan kenapa barang tersebut tidak terkirim apabila barang tersebut ingin di kirim kembali maka pilih tombol kembali ke distribusi untuk mengembalikan data tersebut untuk di kirim kembali ke alamat penerima.</h6><br/> 
	   </div>
	</div>
	<br/>
	<div class="row">
	   <img src="image/waitdis.3.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Data Total</h1>
	     <h6>Pada menu data total di tampilkan data dari seluruh penerimaan barang yang sudah masuk / di proses sebelumnya. apabila ingin mengetahui jumblah seluruh data yang telah di terima, maka pilih kolom <kbd>WAKTU TAMPIL</kbd> di dalam kolom tersebut berisi ingin melihat data dari berapa hari, minggu, atau kostum tanggal sesuai keinginan.</h6><br/> 
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
	<li class="page-item"><a class="page-link" href="mudsel.php">Proses Sebelumnya</a></li>&nbsp&nbsp
	<li class="page-item"><a class="page-link" href="amgud.php">Proses Selanjutnya</a></li>
    </ul>
</footer>
</html>
