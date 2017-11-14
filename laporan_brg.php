<?php
	echo "<center>";
	echo "<br><br><h3 align=center>LAPORAN DATA BARANG</h3> <br>";
	include 'koneksi.php';
	$tampil=mysql_query("select * from pasien order by id_pasien asc");
	echo"<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=#66CCCC>
		<th width=25%>Kode Barang</th>
		<th width=25%>Nama Barang</th>
		<th width=25%>Harga Barang</th>
		<th width=25%>Jenis Barang</th>		
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
		echo "<center>BR00001</center></td>";
		echo "<td><center>XXXXXXXXXX</center></td>";
		echo"<td><center>999999999</center></td>";
		echo"<td><center>XXXXXXXXXX</center></td>";
		echo "</tr>";
	$x++;
	}
echo "</table>";
echo "<br>";
echo "<table>";
echo "<tr> <td> <center><a href=index.php?page=input_brg><b>[Input Barang]</b></a></center> </td>";
echo " <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td> <center><a href=#><b>[Cetak Laporan]</b></a></center> </td></tr>";
echo "</table>";
echo "</center>";
?>
