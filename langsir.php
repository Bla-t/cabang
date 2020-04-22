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
  <h1 class="display-1">Surat Langsir</h1></br>
  <h3 style="color: #EEFF00 ;">Mencetak dan Memberangkatkan Data langsir/ Surat Jalan</h3>
</div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/lokal1=muat langsir.10.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Menu</h1>
		 <h6>Menu ini bertempat di sebelah <kbd>MUAT BARANG</kbd>. Menu <kbd>SURAT KELUAR</kbd> ini memiliki dua menu lagi di dalamnya, yaitu <kbd>MASIH PROSES</kbd> dan <kbd>SELESAI</kbd>. dimana pada menu masih proses terdapat dua tabel yang terdiri dari <kbd>DATA SURAT JALAN </kbd> yang memberi informasi bahwa data surat jalan / surat langsir telah melalui proses muat dan telah di acc oleh cheker. Sedangkan tabel <kbd>PROSES MUAT BARANG</kbd> berisi data barang yang masih/ belum selesai.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.11.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Acc Proses Muat</h1>
		 <h6>Pada menu acc proses muat dapat di lihat SPV yang berkaitan / kepala cabang. Di menu ini juga ada beberapa informasi data yang berkaitan dengan isi dari data tersebut, seperti nomor langsir, cheker, sopir, plat nomor kendaraan, asal, tujuan. untuk <kbd>tujuan</kbd> dapat di rubah apabila cheker terkait salah dalam memberikan data , misal salah tujuan. <kbd>untuk mengganti tujuan</kbd> centang pada ganti tujuan dan pilih tujuan di menu tujuan sebelahnya.<br/>di menu ini juga dapat di gunakan untuk mebnghapus data barang yang telah dimuat apabila barang tersebut salah tujuan / kendaraan yang mengangkut barang sudah melebihi kapasitas.<br/>untuk menghapus data barang cukup pilih tombol <kbd>X</kbd> di samping data barang yang tertampil pada menu.<br/> apabila semua data sudah memenuhi syarat dapat di lanjutkan untuk SPV / kepala yang bersangkutan agar surat bisa di acc<kbd>ACC Proses Muat.</kbd></h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.12.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Acc surat Sudah Berhasil</h1>
		 <p></p> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.13.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Data Proses Muat Setelah di ACC</h1>
		 <h6>pad tabel ini harap di cek kembali apabila terjadi kesalahan / "Salah pencet", segera hubungi operator pusat agar dapat di benahi kembali.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.14.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Proses Selesai Muat</h1>
		 <h6>Proses muat selesai bisa muncul / dapat di pilih apabila Spv/ Kepala yang bersangkutan telah meberi akses untuk menyelesaikan proses muat tersebut.<br/>untuk cheker di harapkan mengecek kembali apabila ada yang kurang / belum terdaftar pada data muat barang. Setelah di rasa sudah benar maka lanjutkan untuk memilih <KBD>PROSES SELESAI</KBD> pada menu muat barang.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.15.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Acc proses Selesai</h1>
		 <h6>Di dalam menu ini tertampil data dari barang yang telah termuat pada data surat jalan / surat langsir setelah di cek lagi maka lanjutkan memilih tombol <kbd>ok</kbd>.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.16.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Proses Pemberangkatan Data Barang</h1>
		 <h6>Apabila Proses muat sudah selesai maka data yang berada di tabel <kbd>PROSES MUAT BARANG</kbd> akan berpindah tempat kedalam tabel<kbd>DATA SURAT JALAN</kbd> seperti pada gambar. <br/>Di dalam daftar surat jalan tersebut terdapat beberapa informasi sepaerti : muat, surat, acc, yang bertujuan untuk mengetahui apakah data tersebut telah melaui proses sebelumnya / selanjutnya.<br/>Kemudian lanjutkan untuk mengecek surat yang akan di ikutkan berdasarkan data barang yang telah di muat sebelumnya. pilih tombol <kbd>CEK SURAT</kbd> di sebelah kanan dari daftar / nomor surat jalan.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.17.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Mencantumkan Data surat / Cek Surat</h1>
		 <h6>Dalam menu ini terlihat seperti menu muat barang, Untuk melakukan cek surat pilih scan manual, terdapat juga tombol untuk mereset kembali proses cek surat, menambahkan surat yang dimana barangnya tidak ikut dalam data/ sudah di kirim terlebih dahulu. <br/>apabila cek surat telah selesai maka pilih tombol cek surat selesai. </h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.18.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- halaman pengecekan</h1>
		 <h6>Dalam menu ini inputkan surat yang akan ikut serta dengan barang di dalam data surat jalan/ surat langsir yang bertempat di kolom kecil di bawah <kbd>Nomor Muat</kbd> dengan menggunakan scaner komputer .<br/> dekatkan surat barang yang akan di sertakan ke scaner komputer, maka secara otomatis data akan muncul di tebel apabila data sudah benar dengan barang yang akan di kirim. Apabila pengecekan sudah selesai maka pilih tombol kembali untuk menyelesaikan proses cek surat. </h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.19.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Contoh Surat yang Berhasil Masuk Sesuai Dengan Barang yang Telah di Muat</h1>
		 <p></p> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.20.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Acc Cek Surat</h1>
		 <h6>Setelah semua surat di rasa sudah sesuai dengan barang yang telah di muat, lanjutkan untuk menyelesaikan proses cek surat, apabila ada surat yang belum di cantumkan misal barang sudah di kirim terlebih dahulu, maka tambahkan surat di tombol <kbd>tambah hanya surat</kbd> setelah itu pilih<kbd>cek surat selesai </kbd>untuk menyelesaikan proses cek surat.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.21.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Acc Surat Jalan</h1>
		 <h6>Setelah proses cek usrat selesai maka lanjutkan untuk menyelesaikan, dan memberangkatkan kendaraaan yang akan mengangkut barang menuju pengepul / cabang tujuan.<br/> untuk menyelesaikan, pililh tombol <kbd>ACC SURAT</kbd>.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.22.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Detail Data Kendaraan</h1>
		 <h6>Setelah tombol acc telah di pilih, maka akan di arahkan ke menu ini. Di dalam menu ini tertera dari Kendaraan/ sopir, TKBM (Tenaga Khusus Bongkar Muat), Pengecekan barang / surat.<br/>Setalah semua dirasa sudah sesuai maka lanjutkan memilih tombol <kbd>simpan</kbd> yang berada di sebelah kiri bawah, kemudian di lanjutkan memilih tombol <kbd>selesai</kbd> yang berada di sebelah tombol simpan tadi.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.23.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Tombol Simpan dan Tombol Selesai</h1>
		 <p></p> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.24.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Pemberitahuan Data Sj/ Sl</h1>
		 <h6>Pada pemberitahuan ini bertulisakan apakah data yang telah di buat benar benar sudah sesuai dengan tujuan, dan data barang. Apabila sudah dirasa sesuai pilih tombol oke, untuk berjaga jaga pilih batal dan lanjutkan mengecek apakah data sudah sesuai dan bila sudah lakukan seperti proses sebelumnya dan di lanjutka memilih tombol oke.</h6> 
	   </div>
	</div></br></br>
	<div class="row">
	   <img src="image/lokal1=muat langsir.25.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Contoh Data Yang Sudah di Proses.</h1>
		 <p></p> 
	   </div>
	</div></br></br>
</div>


</body>
<br/>
<footer>
<?php
	include("button.html");
?>
  <ul class="pagination pagination-lg justify-content-center btn-dark">
	<li class="page-item"><a class="page-link" href="muatbar.php">Proses Sebelumnya</a></li>&nbsp&nbsp
    <li class="page-item"><a class="page-link" href="distribut.php">Proses Selanjutnya</a></li>
  </ul>
</footer>
</html>
