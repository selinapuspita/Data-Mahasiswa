<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
//konek ke sql

//cek apa tombol submit udh diteken apa blom
if ( isset($_POST["submit"])) {
	//ambil data dari tiap elemen dalam form

     
    //query insert data
    

//cek apakah data berhasil ditambahkan
if (tambah ($_POST) > 0 ) {
	echo "
	       <script>
	       alert ('Data Berhasil Ditambahkan!');
	       document.location.href = 'index.php';
           </script>
	      ";
} else {
	echo "
          <script>
	       alert ('Data Gagal Ditambahkan!');
	       document.location.href = 'index.php';
           </script>
	    ";
}




}
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    	<ul>
    		<li>
    			<label for="nama">Nama : </label>
    			<input type="text" name="nama" id="nama" | required>
    		</li>
    		<li>
    			<label for="jurusan">Jurusan : </label>
    			<input type="text" name="jurusan" id="jurusan" | required>
    		</li>
    		<li>
    			<label for="email">Email : </label>
    			<input type="text" name="email" id="email" | required>
    		</li>
    		<li>
    			<label for="gambar">Gambar : </label>
    			<input type="file" name="gambar" id="gambar">
    		</li>
    		<li>
    			<button type="submit" name="submit">Tambah Data</button>
    		</li>
    	</ul>


    </form>

<style> body {background-image : url(img/tiedye.jpg);} </style>

</body>
</html>