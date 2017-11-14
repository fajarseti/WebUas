<?php
echo"
<div style='margin:10px;'>
<br>
<br>
<center>
<table border=0 col=2 row=7>
<h3>Form Input Data Sopir</h3>
<br>
<form action='index.php?page=lihat_sopir' method='post'>
	<tr>
		<td>NO ID</td>
		<td><input type='text' name='nirm'></td>
	</tr>
	<tr>
		<td>Nama Sopir</td>
		<td><input type='text' name='nama_pasien'></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type='text' name='alamat_pasien'></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type='date' name='tgl_lahir'></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><select name='jns_kelamin'>
        	<option>Pria</option>
            <option>Wanita</option></select></td>
	</tr>
	<tr>
		<td>NO HP</td>
		<td><input type='text' name='nirm'></td>
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