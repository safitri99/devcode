<?php
	include_once 'koneksidb.php';  //file koneksi ke data
	$sql = "select*from sddb";  //data pada table namaku disimpan dalam variable sql
	$ps = $db -> prepare($sql);   //buat objek statement
	$ps->execute();  //eksekusi objek statement
	$rs = $ps->fetchAll();
	
?>
<html>
<head>
</head>
<body>

	<table align="center" border="1" cellpadding="5px">
	<tr>
		<th>No.</th><th>Nama Distributor</th><th>Jumlah Hutang</th><th>Tanggal Jatuh Tempo</th><th>Nama Sales</th><th>Chat ID</th>
	</tr>
	<?php
	$nomor=1;
	foreach($rs as $isi)
	{
		echo '<tr>
				<td>'.$nomor.'</td>
				<td>'.$isi['distri_name'].'</td>
				<td>'.$isi['hutang'].'</td>
				<td>'.$isi['tgl_due'].'</td>
				<td>'.$isi['salesman'].'</td>
			    <td>'.$isi['chat_id'].'</td>
			  </tr>';
			  $nomor++;
	
	}
	?>
	</table>
	<a href="index.php"><input type="submit" value="back"> </a>
</body>
</html>
