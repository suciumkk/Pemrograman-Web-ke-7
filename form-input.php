<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<form method="post" action="simpan.php">
	<table></table>
	</form>
	<p></p>
			<tr> <!-- membuat form tr-->
				<td>NIM</td> <!--membuat cell pd baris teks-->
				<td><input type="text" onkeyup="isi_otomatis()" name="nim"></td> <!-- membuat cell input text-->
			</tr>
				<tr>
				<p></p>
					<td>Nama</td> <!-- membuat cell pd teks nama-->
				<td><input type="text" name="nama"></td> 
			</tr>
			<tr>
			<p></p>
				<td>Jenis Kelamin</td> <!--membuat cell pd teks jenis kelamin-->
				<td><input type="radio" name="jenis_kelamin" value="L">Laki laki
				<td><input type="radio" name="jenis_kelamin" value="P">Perempuan
			</td>
			</tr>
			<p></p>
			<tr><td>Jurusan</td><td>
				<select name="jurusan">
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="Teknik Kimia">Teknik Kimia</option>
				</select>
			</td></tr>
			<p></p>
			<tr><td>Alamat</td><input type="text" name="alamat"></td></tr>
			<tr><td colspan="2"><button type="submit" value="simpan">Simpan</button></td></tr>
			
			 <!--membuat cell isi-->
		</table>
	</form>
</body>
</html>