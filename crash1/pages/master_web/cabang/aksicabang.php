<?php
	error_reporting();
	include "../../../../config/koneksi.php";
	function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}
	$kota=anti_injection($_POST['kota']);
	$alt=anti_injection($_POST['alamat']);
	$telp=anti_injection($_POST['telp']);
	$id=$_GET['id'];

	if($_GET['aksi']=='tambah'){
		$q=mysql_query('insert into cabang (kota,alamat,telp) values("'.$kota.'","'.$alt.'","'.$telp.'")');
		header("location:../../../media.php?fModule=cabang&err=3");
	}else if($_GET['aksi']=='edit'){
		$no=$_POST['no'];
		$q=mysql_query("update cabang set kota='$kota',alamat='$alt',telp='$telp' where no='$no' ");
		header("location:../../../media.php?fModule=cabang&err=2");
	}else if($_GET['aksi']=='hapus'){

		$q=mysql_query("delete from cabang where no='$id'");
		header("location:../../../media.php?fModule=cabang&err=1");	
	}
?>