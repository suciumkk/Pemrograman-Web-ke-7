<h2>List Mahasiswa</h2>
<table border="1">
	<tr> <th> NO </th> <th> NIM </th> <th> NAMA </th> <th> GENDER</th> <th> JURUSAN </th> <th> ALAMAT </th>
	<?php
	include 'koneksi.php';
	$mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
	$no=1;
	foreach ($mahasiswa as $row){
		$jenis_kelamin = $row['jens_kelamin']=='P'?'Perempuan':'Laki-laki';
		echo "<tr>
		<td>$no</td>
		<td>".$row['nim']."</td>
		<td>".$row['nama']."</td>
		<td>".$jenis_kelamin."</td>
		<td>".$row['jurusan']."</td>
		</tr>";
	$no++;
}
?>
</table>