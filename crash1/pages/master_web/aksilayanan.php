<?php
	error_reporting();
	$aksi=$_GET['aksi'];

	include "../../../config/connection.php";
	function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}

	if(($aksi=='edit')||($aksi=='aktif')||($aksi=='hapus')){
		$id=$_GET['id'];
		$st=$_GET['st'];
	}
		
	 
	if($aksi=='edit'){
	  	$no=$_POST['id'];
		$judul=anti_injection($_POST['judul']);
	  	$desc=$_POST['desc'];

	  		$q=mysql_query("update service set nama_pel='$judul', ket='$desc' where id_service='$no'"); ("".mysql_error());
	  		header("location:../../media.php?fModule=layanan&err=2");

	  	}else if($aksi=='hapus'){
			
			$q=mysql_query("delete from service where id_service='$id'");
			header("location:../../media.php?fModule=layanan&err=1");

	}else if($aksi=='aktif'){
		if($st=='y'){
			$q=mysql_query("update service set aktif='n' where id_service='$id'"); echo mysql_error();
		}else{
			$q=mysql_query("update service set aktif='y' where id_service='$id'");	
		}
		header("location:../../media.php?fModule=layanan&err=2");
	}
?>