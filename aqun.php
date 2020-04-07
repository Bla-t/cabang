<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
	include ("heade.html");
	include ("navbar.html");
	?>

</head>
<body>


<div class="jumbotron text-center" style="background: url(image/jala2.jpg) fixed;">
  <h1 class="display-1">Akun dan Tipe Akun</h1></br>
  </div>
<br/>

<div class="container">
	<div class="row">
	   <img src="image/step11-1.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>- Tipe Akun dan Fungsi</h1>
	     <h6><p>Akun adalah sebuah fitur untuk menentukan apakah membedakan user satu sama lain agar dapat menjalankan tugas sesuai deskripsi yang telah di tetapkan. Tipe akun sendiri di bedakan agar dapat menyesuaikan dengan kebutuhan user itu sendiri, pada gambar di atas terdapat beberapa perbedaan tipe user/ akun sebagai berikut :</p>
	     <p>Kepala Agen : adalah User/ akun yang dapat melaksanakan semua kegiatan di dalam aplikasi/ memiliki hak penuh.</p>
	     <p>Operator Terima : adalah User/ Akun yang hanya bisa menangani pembuatan data baru/ barang masuk.</p>
	     <p>Spv Entry: User/ Akun yang dapat menengani beberapa kegiatan yang menyangkut pengadaaan barang mulai dari proses sampai selesai.</p>
	     <p>Data Entry : User/ Akun yang hanya menangani bagian input barang baru, cek surat, dan barang dan dapat meberi akses untuk di proses selanjutnya.</p>
	     <p>Operator Barcode : User/ Akun yang hanya menangani bagian yang berhubungan dengan Barcode/ resi Barang dan resi surat.</p>
	     <p>checker : User/ Akun yang hanya menangani bagian pengecekan terhadap barang, dan surat saja.</p></h6><br/> 
	   </div>
	</div><br/>
	<div class="row">
	   <img src="image/step11-2.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>-Struktur Akun/User</h1>
		 <h6>
		 <p>No.1 : Nama Akun/User</p>
	     <p>No.2 : Jabatan Akun/User</p>
	     <p>No.3 : Agen Akun/User</p>
	     <p>No.4 : Editor Akun/User</p>
	     <p>Untuk menambahkan akun klik pada tombol "TAMBAH AKUN PENGGUNA"</p></h6>
		 <br/>
	   </div>
	</div>
	<div class="row">
	   <img src="image/step11-3.jpg" class="float-left" style="width:100%;">
	   <div class="container" style="background-color: #B7B6B5;">
		 <h1>-Tambah Pengguna</h1>
		 <h6><p>Pada tabel ini User/Akun Kepala Cabang dapat menambahkan User/ Akun yang lain untuk membantu proses proses yang ada di dalam aplikasi. Untuk menambahkan User/ Akun isikan data-data meliputi Jabatan, Nama Lengkap, Username, Password, Repassword/ketik ulang password untuk ferifikasi.
	     Kemudian tekan tombol"TAMBAH DATA USER"agar User/Akun yang telah di buat dapat segera di gunakan. </p></h6>
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
    <li class="page-item"><a class="page-link" href="index.php">Home</a></li>
  </ul>
</footer>
</html>