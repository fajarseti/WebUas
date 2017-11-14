<?php
echo"
<div style='margin:10px;'>
<br>
<br>
<center>
<table border=0 col=2 row=6>
<h3>Form Input Data Mobil</h3>
<br>
<form action='save_dokter.php' method='post'>
	<tr>
		<td>NO ID</td>
		<td><input type='text' name='noid'></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type='text' name='nama_dokter'></td>
	</tr>
	<tr>
		<td>Jenis</td>
		<td><input type='text' name='nama_dokter'></td>
	</tr>
	<tr>
		<td>Nomor Polisi</td>
		<td><input type='text' name='nama_dokter'></td>
	</tr>
	<tr>
		<td>Harga Sewa</td>
		<td><input type='text' name='tarif_dokter'></td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td><button input type='submit' value='Simpan' class=btn>Browse</button></td>
	</tr>
    <tr>
    <td>&nbsp </td>
	<td>&nbsp </td>
    </tr>
	<tr>
		<td><button input type='submit' value='Simpan' class=btn>Simpan</button></td>
        <td><button input type='reset' value='Batal' class=btn>Batal</button></td>
	</tr>
	</form>
</table></center>
</div>";
?>