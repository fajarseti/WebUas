<?php
	echo "<center>";
	echo "<br>
<br><h3 align=center>LAPORAN PERSEWAAN BARANG</h3> <br>";
	include 'koneksi.php';
	$tampil=mysql_query("select * from pasien order by id_pasien asc");
	echo"
	<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=#66CCCC align=center>
		<th width=10%><b>No. Sewa</b></th>
		<th width=10%><b>Kode Pelanggan</b></th>
		<th width=10%><b>Nama Pelanggan</b></th>
		<th width=10%><b>Alamat Pelanggan</b></th>
		<th width=10%><b>Kode Barang</b></th>
		<th width=10%><b>Nama Barang</b></th>
		<th width=10%><b>Harga Barang</b></th>
		<th width=10%><b>Tanggal Sewa</b></th>
		<th width=10%><b>Tanggal Kembali</b></th>
		<th width=10%><b>Lama Sewa</b></th>
	</tr>";
	$x=1;
	while ($data=mysql_fetch_array($tampil))
	{
	if ($x%2==0)
	{
		$bg='#FFFFFF';
	}
	else
	{
		$bg='#FFFFFF';
	}
	echo "<tr bgcolor=$bg>";
	echo "<td>";
		echo "<center>99999999</center></td>";
		echo "<td><center>IR001</center></td>";
		echo"<td><center>XXXXXXXXX</center></td>";
		echo"<td><center>XXXXXXXXX</center></td>";
		echo"<td><center>BR00001</center></td>";
		echo"<td><center>XXXXXXXXX</center></td>";
		echo"<td><center>99999999</center></td>";
		echo"<td><center>99/99/9999</center></td>";
		echo"<td><center>99/99/9999</center></td>";
		echo"<td><center>99</center></td>";
		echo "</tr>";
	$x++;
	}
	
echo "</table>";
echo "<br>";
echo "<table>";
echo "<tr> <td> <center><a href=index.php?page=input_sewa><b>[Input Persewaan]</b></a></center> </td>";
echo " <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td> <center><a href=index.php?page=#><b>[Cetak Laporan]</b></a></center> </td></tr>";
echo "</table>";
echo "</center>";
?>
<!-- <tr bgcolor=white align=center>
		<td>999999999</td>
		<td>IR001</td>
		<td>XXXXXXXXXX</td>
		<td>XXXXXXXXXX</td>
		<td>BR00001</td>
		<td>XXXXXXXXXX</td>
		<td>999999999</td>
		<td>99/99/9999</td>
		<td>99/99/9999</td>
		<td>99</td>
		<td>999999999</td>
		<td>999999999</td>
	</tr>
	<tr bgcolor=white align=center>
		<td>999999999</td>
		<td>IR001</td>
		<td>XXXXXXXXXX</td>
		<td>XXXXXXXXXX</td>
		<td>BR00001</td>
		<td>XXXXXXXXXX</td>
		<td>999999999</td>
		<td>99/99/9999</td>
		<td>99/99/9999</td>
		<td>99</td>
		<td>999999999</td>
		<td>999999999</td>
	</tr>
	<tr bgcolor=white align=center>
		<td>999999999</td>
		<td>IR001</td>
		<td>XXXXXXXXXX</td>
		<td>XXXXXXXXXX</td>
		<td>BR00001</td>
		<td>XXXXXXXXXX</td>
		<td>999999999</td>
		<td>99/99/9999</td>
		<td>99/99/9999</td>
		<td>99</td>
		<td>999999999</td>
		<td>999999999</td>
	</tr>
	<tr bgcolor=white align=center>
		<td>999999999</td>
		<td>IR001</td>
		<td>XXXXXXXXXX</td>
		<td>XXXXXXXXXX</td>
		<td>BR00001</td>
		<td>XXXXXXXXXX</td>
		<td>999999999</td>
		<td>99/99/9999</td>
		<td>99/99/9999</td>
		<td>99</td>
		<td>999999999</td>
		<td>999999999</td>
	</tr>
	<tr bgcolor=white align=center>
		<td>999999999</td>
		<td>IR001</td>
		<td>XXXXXXXXXX</td>
		<td>XXXXXXXXXX</td>
		<td>BR00001</td>
		<td>XXXXXXXXXX</td>
		<td>999999999</td>
		<td>99/99/9999</td>
		<td>99/99/9999</td>
		<td>99</td>
		<td>999999999</td>
		<td>999999999</td>
	</tr>" -->