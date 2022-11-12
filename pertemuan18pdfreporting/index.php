<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");


// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>

</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">
    
      <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">

      <button type="submit" name="cari" id="tombol-cari">Cari!</button>


</form>

<br>
<div id="container">

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
        <th>gambar</th>
        <th>nama</th>
        <th>jurusan</th>
        <th>email</th>
	</tr>

<?php $i = 1; ?>
<?php foreach($mahasiswa as $row) : ?>
<tr>
	<td><?= $i; ?></td>
    <td>
    	<a href="ubah.php?id=<?= $row ["id"]; ?>">ubah</a> |
    	<a href="hapus.php?id=<?= $row ["id"]; ?>" onclick="return confirm ('Apakah anda ingin menghapus data ini?');">hapus</a>
    </td>
    <td><img src="img/<?= $row ["gambar"]; ?>" width="60"></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
    <td><?= $row["email"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>
</div>

 <style> body {background-image : url(img/tiedye.jpg);} </style>


<script src="js/script.js"></script>

</body>
</html>