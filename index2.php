<h2>List Kontak</h2>
<table border="1">
	<tr> <th> NO </th><th> ID </th><th> NAMA </th> <th>GENDER</th><th> EMAIL </th><th> ALAMAT </th> <th> KOTA </th><th> PESAN </th> </tr>
	<?php
	include 'koneksi.php';
	$kontak = mysqli_query($koneksi, "SELECT * from kontak");
	$no=1;
	foreach ($kontak as $row){ // membuat perulangan pada database kontak
		echo // menampilkan data dari DB kontak 
		"<tr> 
		<td>$no</td>
		<td>".$row['id']."</td>
		<td>".$row['nama']."</td>
		<td>".$row['jenis_kelamin']."</td>
		<td>".$row['email']."</td>
		<td>".$row['alamat']."</td>
		<td>".$row['kota']."</td>
		<td>".$row['pesan']."</td>
		</tr>";
	$no++;
}
?>
</table>