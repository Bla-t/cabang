<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php
	include ("heade.html");

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
<?php
	include ("navbar.html");
	?>

<div class="jumbotron text-center" style="background-image: url(image/bak.jpg);">
  <h1 class="display-3" style="color: #F7AE40; ">PANDUAN PENGGUNAAN APLIKASI</h1>
  <h4 style="color: #F7AE40;">BARCODE BARAKA EXPRESS</h4><br/><br/><br/>
</div>
<br/>

<div class="container" >
    <div class="row">
     <img src="image/step1-1.jpg" class="float-left" style="width:100%;">
      <div class="container" style="background-color: #B7B6B5;"><br/>
      <h3>Alamat Website Aplikasi</h3>
      <p></p>
      <p style="width: 80%">Untuk permulaan kita akan pergi menuju alamat Website dari aplikasi barcode Baraka Express yaitu https://basarta.com, atau https://www.basarta.com.</p>
    </div>
  </div><br/>
    <div class="row">
     <img src="image/step1-2.jpg" class="float-left" style="width:100%;">
     <div class="container" style="background-color: #B7B6B5;"><br/>
      <h3>Tampilan Menu Log In</h3>
      <p>Pada tampilan menu log in bisa kita lihat bahwa pada tampilan terdapat beberapa kolom untuk mengisikan data meliputi :</p>
      <p>1. type account/jenis instansi</p>
      <p>2. Nama dari instansi</p>
      <p>3. User name</p>
      <p>1. Password</p>
      <p style="width: 80%">Pada menu log in kita juga menentukan ingin masuk ke jenis instansi yang seperti apa, karena setiap jenis instansi memiliki kegunaan dan fitur - fitur tambahan yang belum tentu ada di jenis instansi yang lain.</p>
    </div>
  </div><br/>
    <div class="row">
     <img src="image/step1-3.jpg" class="float-left" style="width:100%;">
     <div class="container" style="background-color: #B7B6B5;"><br/>
      <h3>Type Account</h3>
      <p>Pada kolom Type Account kita d arahkan untuk memilih beberapa pilihan meliputi : Agen, Cabang, Pengepul, Pusat.</p>
      <p>Untuk kasus ini kita akan memillih Type Acccount Agen seperti pada lingkaran yang tertera di gambar.</p>
    </div>
  </div><br/>
    <div class="row">
     <img src="image/step1-4.jpg" class="float-left" style="width:100%;">
     <div class="container" style="background-color: #B7B6B5;"><br/>
      <h3>Nama Agen</h3>
      <p style="width: 80%">Seperti yang terlihat dari gambar di atas kita akan di arahkan untuk memilih nama dari Agen. Agen di sini adalah instansi yang di peruntukan hanya menerima data barang pada saat ini.</p>
      <p>untuk kasus ini saya memilih Nama Agen - Krekot.</p>
    </div>
  </div><br/>
    <div class="row">
     <img src="image/step1-5.jpg" class="float-left" style="width:100%;">
     <div class="container" style="background-color: #B7B6B5;"><br/>
      <h3>User</h3>
      <p style="width: 80%">User atau Pengguna adalah hal ke lima yang ingin saya jelaskan. untuk user sendiri di bedakan menjadi beberapa tipe, untuk beberapa instansi ada beberapa perbedaan pada user seperti : tipe user, hak akses user, dan jumlah user menyesuaikan di tempat instansi masing - masing.</p>
      <p style="width: 80%">Pertama kita masuk ke dalam kolom User, lalu isikan User Name sesuai yang telah di berikan oleh pihak yang menangani pengadaan user.</p>
      <p></p>
    </div>
  </div><br/>
    <div class="row">
     <img src="image/step1-6.jpg" class="float-left" style="width:100%;">
     <div class="container" style="background-color: #B7B6B5;"><br/>
      <h3>Password</h3>
      <p style="width: 80%">Setelah kita mengisikan User Name kita masuk pada kolom Password dan isikan Password juga kedalam, yang di mana Password tersebut di berikan oleh pihak yang sama dengan pengadaan user.</p>
    </div>
  </div><br/><br/>
    <div class="row">
     <img src="image/step1-7.jpg" class="float-left" style="width:100%;">
     <div class="container" style="background-color: #B7B6B5;"><br/>
      <h3>Log In</h3>
      <p>Setelah semua terisi kita klik tombol "LOGIN" untuk dapat masuk kedalam halaman utama agen.</p>
      <p>Pastikan untuk mengecek ulang isi data untuk dapat masuk kedalam user yang di inginkan.</p>
    </div>
  </div><br/><br/>
    <div class="row">
     <img src="image/step1-8.jpg" class="float-left" style="width:100%;">
     <div class="container" style="background-color: #B7B6B5;"><br/>
      <p>Contoh ketika salah memasukan beberapa data di menu login..</p>
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
    <li class="page-item"><a class="page-link" href="data baru.php">Proses Selanjutnya</a></li>
  </ul>
</footer>
</html>
