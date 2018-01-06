<?php
	session_start();
	include "../../../../config/connection.php";
	include "../../../../config/fungsi_seo.php";

	function anti_injection($data){
	$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	return $filter;
	}
	$id=$_GET['id'];
	if(($_GET['aksi']=='tambah')||($_GET['aksi']=='edit')){
	  $dir="../../../../images/blog/";
	  $Lfile1    = $_FILES['image2']['tmp_name'];
	  $TipeFile1      = $_FILES['image2']['type'];
	  $NamaFile1      = $_FILES['image2']['name'];
	  $acak1           = rand(1,99);
	  $NamaFileUnik1 = $acak1.$NamaFile1;
	  $size1= $_FILES['image2']['size'];
	  $UkuranMax=1000000; 
	  $gambar=$NamaFile1;

	  $judul=anti_injection($_POST['judul']);
	  $seo_title = seo_title($judul);
	  $desc=$_POST['desk'];
	  $date=date('Y-m-d');
	  $penulis=$_SESSION['kd_user'];

	    $vfile_upload2 = $dir . $NamaFileUnik1;
	  	move_uploaded_file($Lfile1, $vfile_upload2);
	  if($_GET['aksi']=='tambah'){
	  	if($size1>$UkuranMax){
	  		header("location:../../../media.php?fModule=news&err=9");
	  	}else{
	  	$q=mysql_query('INSERT INTO blog (img,judul,judul_seo,desk,tgl,admin) 
	  					values("'.$NamaFileUnik1.'","'.$judul.'","'.$seo_title.'","'.$desc.'","'.$date.'","'.$penulis.'")');
		header("location:../../../media.php?fModule=news&err=3");
	  	}
	  }else if($_GET['aksi']=='edit'){
	  $no=$_POST['id'];
	  		if($gambar==''){
	  			$q=mysql_query("update blog set judul='$judul',judul_seo='$seo_title',desk='$desc',tgl='$date',admin='$penulis' where no='$no'");	
	  		}else{
	  			$q=mysql_query("update blog set img='$NamaFileUnik1',judul='$judul',judul_seo='$seo_title',desk='$desc',tgl='$date',admin='$penulis' where no='$no'");	
	  		}
	  			header("location:../../../media.php?fModule=news&err=2");
	  }
	}else if($_GET['aksi']=='hapus'){
		$q=mysql_query("delete from blog where no='$id'");
		header("location:../../../media.php?fModule=news&err=1");
	}

?>