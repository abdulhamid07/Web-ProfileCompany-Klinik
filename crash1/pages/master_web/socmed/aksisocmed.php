<?php
	error_reporting();
	include "../../../../config/koneksi.php";
	//include "../../../../config/gambar.php";
	function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}
	

	if(($_GET['aksi']=='tambahsocmed')||($_GET['aksi']=='editsocmed')){
	  $dir="../../../../images/socmed/";
	  $Lfile1    = $_FILES['image2']['tmp_name'];
	  $TipeFile1      = $_FILES['image2']['type'];
	  $NamaFile1      = $_FILES['image2']['name'];
	  $acak1           = rand(1,99);
	  $NamaFileUnik1 = $acak1.$NamaFile1;
	  $size1= $_FILES['image2']['size'];
	  $UkuranMax=100000; // Dalam bytes
	  $gambar=$NamaFile1;
	  $nama=anti_injection($_POST['nama']);
	  $link=anti_injection($_POST['link']);

	 
	  	$vfile_upload2 = $dir . $NamaFileUnik1;
	  	move_uploaded_file($Lfile1, $vfile_upload2);
	  		if($_GET['aksi']=='tambahsocmed'){
	  			if($size1>$UkuranMax){
	  				exit("<script>alert('Ukuran maksimal gambar 10 mb'); window.history.back();</script>");
	  			}else{
	  			$q=mysql_query('insert into socmed (img,n_socmed,link) values("'.$NamaFileUnik1.'","'.$nama.'","'.$link.'")');
	  			header("location:../../../media.php?fModule=cabang&err=3");
	  			}
	  		}else if($_GET['aksi']=='editsocmed'){
	  		$no=$_POST['no'];
	  		if($gambar==''){
	  			$q=mysql_query("update socmed set n_socmed='$nama',link='$link' where no='$no'");	
	  		}else{
	  			if($size1>$UkuranMax){
	  				exit("<script>alert('Ukuran maksimal gambar 10 mb'); window.history.back();</script>");
	  			}else{
	  			$q=mysql_query("update socmed set img='$NamaFileUnik1', n_socmed='$nama',link='$link' where no='$no'");	
	  			}
	  		}
	  			header("location:../../../media.php?fModule=cabang&err=2");
	  	}

	}else if($_GET['aksi']=='hapus'){
		$id=$_GET['id'];
		$q=mysql_query("delete from socmed where no='$id'");
		header("location:../../../media.php?fModule=cabang&err=1");
	}
?>