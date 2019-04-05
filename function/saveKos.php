<?php 
	include "../koneksi/koneksi.php";

	$cmsave = $_GET['cmdsave'];

	if($cmsave == "savekos"){
		$nama = $_GET['nama'];
		$alamat = $_GET['alamat'];
		$jenis = $_GET['jenis'];
		$fasilitas = $_GET['fasilitas'];
		$jlh_lantai = $_GET['jlh_lantai'];
		$harga = $_GET['harga'];
		$jlh_kamar  =  $_GET['jlh_kamar'];
		$keterangan = $_GET['keterangan'];
		$image = $_GET['image'];
		$targetDir = "../assets/img/";
	  $targetFilePath = $targetDir .  basename($image);
  $fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
	$extensi = array('jpg','png','jpeg');

		$sql = "insert into tbkos (gmbr_kos,nama,alamat,jenis_kos,harga,fasilitas,jlh_kamar,keterangan) values ('$targetFilePath','$nama','$alamat','$jenis','$harga','$fasilitas','$jlh_kamar','$keterangan')";
		$query = mysqli_query($conn,$sql) or die("error $sql");
		header("location:../view/bukakos.php");
	}
 ?>