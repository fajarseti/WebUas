<?php
echo"
<div style='margin:5px;'>
<br>
<br>
<br>
<form action='save_pasien.php' method='post'>
	<fieldset>
	<legend align='center'>Form Petugas</legend>
	<table col=3 row=8>
		<tr>
		<td>Kode Petugas</td>
		<td> : </td>
		<td><input type='text' name='nirm' value='PTIR001' disabled></td>
		</tr>	
		<tr>
		<td>Nama Petugas</td>
		<td> : </td>
		<td><input type='text' name='nama_pasien' value='XXXXXXXXXX'></td>
		</tr>
		<tr>
		<td>Password</td>
		<td> : </td>
		<td><input type='Password' name='nama_pasien' value='XXXXXXXXXX'></td>
		</tr>
		<tr>
		<td>Alamat</td>
		<td> : </td>
		<td><input type='text' name='alamat_pasien' value='XXXXXXXXXX'></td>	
		</tr>
		<tr>
		<td>Kota</td>
		<td> : </td>
		<td><input type='text' name='alamat_pasien' value='XXXXXXXXXX'></td>	
		</tr>
		<tr>
		<td>Jenis Kelamin</td>
		<td> : </td>
		<td><select name='jns_kelamin'>
        	<option>XXXXXX</option>
            <option>XXXXXX</option></select></td>
         </tr>   
         <tr>
		<td>No. Hp</td>
		<td> : </td>
		<td><input type='text' name='nama_pasien' value='999999999999'></td>
		</tr>
		<tr>
		<td>E-mail</td>
		<td> : </td>
		<td><input type='text' name='nama_pasien' value='XXXXXX@XXXXX.XXX'></td>
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