<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa
                WHERE
              nama LIKE '%$keyword%' OR 
              jurusan LIKE '%$keyword%' OR
              email LIKE '%$keyword%'
    ";
$mahasiswa = query($query);

?>

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