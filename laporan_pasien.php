<?php
	echo "<center>";
	echo "<br><br><h3 align=center>LAPORAN DATA MEMBER</h3> <br>";
	include 'koneksi.php';
	$tampil=mysql_query("select * from pasien order by id_pasien asc");
	echo"<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=#66CCCC>
		<th width=5%>Kode Pelanggan</th>
		<th width=20%>Nama</th>
		<th width=15%>No. Identitas</th>
		<th width=20%>Alamat</th>
		<th width=10%>Kota</th>
		<th width=5%>Jenis Kelamin</th>
		<th width=10%>No. HP</th>
		<th width=5%>E-mail</th>
		<th width=10%>Tanggal Pendaftaran</th>
		
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
		echo "<center>IR001</center></td>";
		echo "<td><center>XXXXXXXXXX</center></td>";
		echo"<td><center>999999999</center></td>";
		echo"<td><center>XXXXXXXXXX</center></td>";
		echo"<td><center>XXXXXXXXXX</center></td>";
		echo"<td><center>XXXXXX</center></td>";
		echo"<td><center>999999999999</center></td>";
		echo"<td><center>XXXXXX@XXXXX.XXX</center></td>";
		echo"<td><center>99/99/9999</center></td>";
		echo "</tr>";
	$x++;
	}
echo "</table>";
echo "<br>";
echo "<table>";
echo "<tr> <td> <center><a href=index.php?page=input_pasien><b>[Input Member]</b></a></center> </td>";
echo " <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td> <center><a href=#><b>[Cetak Laporan]</b></a></center> </td></tr>";
echo "</table>";
echo "</center>";
?>
