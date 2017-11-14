<?php
echo"
<div style='margin:5px;'>
<br>
<br>
<br>
<form action='save_pasien.php' method='post'>
	<fieldset>
	<legend align='center'>Form Barang</legend>
	<table col=3 row=8>
		<tr>
		<td>Kode Barang</td>
		<td> : </td>
		<td><input type='text' name='nirm' value='BR00001' disabled></td>
		</tr>	
		<tr>
		<td>Nama Barang</td>
		<td> : </td>
		<td><input type='text' name='nama_pasien' value='XXXXXXXXXX'></td>
		</tr>
		<tr>
		<td>Harga Barang</td>
		<td> : </td>
		<td><input type='text' name='alamat_pasien' value='9999999999'></td>	
		</tr>
		<tr>
		<td>Jenis Barang</td>
		<td> : </td>
		<td><input type='text' name='alamat_pasien' value='XXXXXXXXXX'></td>	
		</tr>
		</table>
		<table col=2 row=1>
	    <tr>
		<td><button input type='submit' value='Simpan' class=btn>Simpan</button></td>
		<td><button input type='reset' value='Batal' class=btn>Batal</button></td>
		</tr>
		</table>	
	</fieldset>
	</form>
	
</div>";
?>