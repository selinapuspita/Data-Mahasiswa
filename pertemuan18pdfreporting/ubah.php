<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//konek ke sql

//cek apa tombol submit udh diteken apa blom
if ( isset($_POST["submit"])) {
	//ambil data dari tiap elemen dalam form

     
    //query insert data
    

//cek apakah data berhasil diubah
if (ubah ($_POST) > 0 ) {
	echo "
	       <script>
	       alert ('Data Berhasil Diubah!');
	       document.location.href = 'index.php';
           </script>
	      ";
} else {
	echo "
          <script>
	       alert ('Data Gagal Diubah!');
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
	<title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    	<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    	<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
    	<ul>
    		<li>
    			<label for="nama">Nama : </label>
    			<input type="text" name="nama" id="nama" | required value="<?= $mhs["nama"]?>">
    		</li>
    		<li>
    			<label for="jurusan">Jurusan : </label>
    			<input type="text" name="jurusan" id="jurusan" | required value="<?= $mhs["jurusan"]?>">
    		</li>
    		<li>
    			<label for="email">Email : </label>
    			<input type="text" name="email" id="email" | required value="<?= $mhs["email"]?>">
    		</li>
    		<li>
    			<label for="gambar">Gambar : </label>
    			<br>
    			<img src="img/<?= $mhs['gambar']; ?>" width="60"> 
    			<br>
    			<input type="file" name="gambar" id="gambar">
    		</li>
    		<li>
    			<button type="submit" name="submit">Ubah Data</button>
    		</li>
    	</ul>


    </form>
<style> body {background-image : url(img/tiedye.jpg);} </style>

</body>
</html>