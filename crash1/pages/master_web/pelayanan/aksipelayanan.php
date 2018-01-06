<?php
	include "../../../../config/koneksi.php";

	$no=$_POST['nolayanan'];
	$nm=$_POST['layanan'];
	$ket=$_POST['ket'];
	if($_GET['aksi']=='edit'){
		$q=mysql_query("update desc_serve set ket='$ket',kd_main_serve='$nm' where no='$no'");
		header("location:../../../media.php?fModule=pelayanan&err=2");
	
	}else if($_GET['aksi']=='delete'){
		$id=$_GET['id'];
		$q=mysql_query("delete from desc_serve where no='$id'");
		header("location:../../../media.php?fModule=pelayanan&err=1");
	}
?>