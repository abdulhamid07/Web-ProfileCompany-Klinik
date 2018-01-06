<?php
	include '../../../../config/koneksi.php';
	function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}
	$id=$_POST['id'];
	$ket=$_POST['ket'];
	$no=$_GET['id'];
	if($_GET['aksi']=='edit'){
		$q=mysql_query("update about set ket='$ket' where no='$id'");
		header('location:../../../media.php?fModule=about&err=2');
	}else if($_GET['aksi']=='hapus'){
		$q=mysql_query("delete from about where no='$no'");
		header('location:../../../media.php?fModule=about&err=1');
	}else if(($_GET['aksi']=='tambahcs')||($_GET['aksi']=='editcs')){
	  $dir="../../../../images/cs_profile/";	
	  $Lfile1    = $_FILES['image1']['tmp_name'];
	  $TipeFile1      = $_FILES['image1']['type'];
	  $NamaFile1      = $_FILES['image1']['name'];
	  $acak1           = rand(1,99);
	  $NamaFileUnik1 = $acak1.$NamaFile1;
	  $size1= $_FILES['image1']['size'];
	  $UkuranMax=100000; // Dalam bytes
	  $gambar=$NamaFile1;
	  $atas=anti_injection($_POST['j_atas']);
	  $bawah=anti_injection($_POST['j_bawah']);

	 	if($size1>$UkuranMax){
	  		header("location:../../../media.php?fModule=about&err=9");
	  	}else{
	  	$vfile_upload2 = $dir . $NamaFileUnik1;
	  	move_uploaded_file($Lfile1, $vfile_upload2);
	  	if($_GET['aksi']=='tambahcs'){
	  	$q=mysql_query('insert into cs_profile(judul_atas,img,judul_bawah)
	  					values("'.$atas.'","'.$NamaFileUnik1.'","'.$bawah.'")');
	  	header("location:../../../media.php?fModule=about&err=2");
	    }else if($_GET['aksi']=='editcs'){
	    	if($gambar==''){
		  			$q=mysql_query("update cs_profile set judul_atas='$atas',judul_bawah='$bawah' where no='$id'");	
		  		}else{
		  			$q=mysql_query("update cs_profile set judul_atas='$atas',img='$NamaFileUnik1',judul_bawah='$bawah' where no='$id'");	
		  		}
		  			header("location:../../../media.php?fModule=about&err=2");
	   	}
	   }
	}else if($_GET['aksi']=='hapuscs'){
		$q=mysql_query("delete from cs_profile where no='$no'");
		header('location:../../../media.php?fModule=about&err=1');
	}
?>