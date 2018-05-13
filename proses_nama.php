<?php
include_once 'koneksidb.php'; //file koneksi ke database
$proses = $_POST['proses'];

//tangkap request dari file form_nama.php untuk dimasukkan ke table di database
$nd = $_POST['nd'];
$jh = $_POST['jh'];
$tj = $_POST['tj'];
$ns = $_POST['ns'];
$nc = $_POST['nc'];

//semua variable diatas disimpan dalam array
$data[]=$nd;
$data[]=$jh;
$data[]=$tj;
$data[]=$ns;
$data[]=$nc;

//definisi sql : insert
if($proses=='Simpan') //Jika diklik tombol simpan
	{
		$inputdb="insert into sddb(distri_name,hutang,tgl_due,salesman,chat_id) value('$nd','$jh','$tj','$ns','$nc')";
	
	}
if(!empty($inputdb))
	{
		$st=$db->prepare($inputdb); //buat objek statement;
		$st->execute($data);   //eksekusi data
		header('Location:daftar_nama.php'); //tujuan setelah pengisian form_nama
	}
else
	{
		header('Location:index.php');
	}
?>
