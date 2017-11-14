<?php
	echo "<center>";
	echo "<br><br><h3 align=center>LAPORAN PENGEMBALIAN BARANG</h3> <br>";
	include 'koneksi.php';
	$tampil=mysql_query("select * from pasien order by id_pasien asc");
	echo"<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=#66CCCC>
		<th width=10%>No. Sewa</th>
		<th width=10%>Kode Pelanggan</th>
		<th width=15%>Nama Pelanggan</th>
		<th width=10%>Kode Barang</th>
		<th width=15%>Nama Barang</th>
		<th width=10%>Tanggal Sewa</th>
		<th width=10%>Tanggal Kembali</th>		
		<th width=10%>Lama Sewa</th>
		<th width=10%>Kode Petugas</th>
		
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
		echo "<center>999999999</center></td>";
		echo "<td><center>IR001</center></td>";
		echo"<td><center>XXXXXXXXXX</center></td>";
		echo "<td><center>BR00001</center></td>";
		echo"<td><center>XXXXXXXXXX</center></td>";
		echo"<td><center>99/99/9999</center></td>";
		echo"<td><center>99/99/9999</center></td>";
		echo"<td><center>99</center></td>";
		echo"<td><select name='kd_plgn' width=100>
            <option>PTIR001</option>
            <option>PTIR001</option>
            <option>PTIR001</option>
            <option>PTIR001</option>
            <option>PTIR001</option></select></td>";
		echo "</tr>";
	$x++;
	}
echo "</table>";
echo "<br>";
echo "<table>";
echo "<tr> <td> <center><a href=index.php?page=lihat_periksa><b>[Form Pengembalian]</b></a></center> </td>";
echo " <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td> <center><a href=index.php?page=#><b>[Cetak Laporan]</b></a></center> </td></tr>";
echo "</table>";
echo "</center>";
?>
