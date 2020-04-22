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
  <h1 class="display-1">Proses Laporan Distribusi</h1></br>
</div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/cekdis.3.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Cek Surat Distribusi</h1>
	     <h6>Setal memilih tombol <kbd>CEK SURAT</kbd> maka akan di arahkan ke dalam menu ini untuk melakukan input surat / cek surat yang akan di ikutkan distribusi menuju penerima. Untuk menginput surat yang akan di ikutkan distribusi pilih kolom kecil di samping kiri tombol <kbd>QR SCAN</kbd> lalu cantumkan nomor resi barcode yang sesuai dengan barang yang telah di muat.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/cekdis.2.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Contoh Surat Berhasil Masuk</h1>
	     <h6>Apabila surat yang di masukan sesuai dengan barang yang telah di muat maka akan muncul notifikasi seperti dalam gambar yang bertempat di sebelah kanan tombol <kbd>QR SCAN</kbd>, apabila data surat tidak sama dengan data barang yang di muat sebelumnya maka notifikasi tersebut akan berubah menjadi <kbd>DATA BARANG SALAH</kbd>.<br/>apabila semua surat telah di cek dan sudah sesauai dengan barang yang di muat, maka lanjutkan untuk meproses selesai seperti meproses surat selesai pada surat jalan.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/cekdis.4.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Proses ACC dan Pembatalan Surat Jalan Distribusi</h1>
	     <h6>Setelah surat telah di cek seluruhnya maka lanjutkan untuk Acc surat tersebut kemudian di cetak di menu <kbd>laporan</kbd>. Apabila ada surat jalan distribusi yang tidak jadi di berangkatkan / barang turun kembali ke gudang , maka hapus data surat jalan tersebut seperti <a href ="muatbar.php">menghapus surat jalan langsir/ surat jalan</a>.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/cekdis.5.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- ACC Surat</h1>
	     <h6>Setelah memilih tombol <kbd>ACC</kbd> maka akan di teruskan ke menu ini untuk memberangkatkan surat jalan distribusi.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/berdis.1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Data Surat jalan</h1>
	     <h6>Setelah Surat Jalan distribusi telah di ACC maka data tersebut akan berpindah ke menu laporan. Di dalam menu ini terdapat tombol <kbd>SURAT JALAN</kbd>, tombol tersebut berguna jika sopir dari mobil yang akan mengirimkan barang ke penerima maka surat jalan tersebut harus di ikut sertakan sebagai bahan pengecekan pada saat barang di kirimkan ke penerima.</h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/berdis.2.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Cetak Surat jalan</h1>
	     <h6>Setelah memilih tombol <kbd>SURAT JALAN</kbd> maka kaan di arahkan ke menu ini di dalam menu ini petugas dapat mencetak, mengunduh data dari surat jalan distribusi tersebut untuk menjdadi laporan kas di cabang nantinya.<br/> Apabila ingin mencetak data tersebut pilih tombol <kbd>CETAK SURAT JALAN</kbd>, apabila ingin mengunduh data maka pilih tombol <kbd>DOWNLOAD KE EXCEL(xls.)</kbd></h6><br/> 
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
	<li class="page-item"><a class="page-link" href="mudis.php">Proses Sebelumnya</a></li>&nbsp&nbsp
	<li class="page-item"><a class="page-link" href="mudlap.php">Proses Selanjutnya</a></li>
    </ul>
</footer>
</html>
