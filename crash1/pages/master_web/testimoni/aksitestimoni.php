<?php
	error_reporting();
	include "../../../../config/koneksi.php";
	//include "../../../../config/gambar.php";
	function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}
	

	if(($_GET['aksi']=='tambahtest')||($_GET['aksi']=='edittest')){
	  $dir="../../../../images/testimoni/";
	  $Lfile1    = $_FILES['image2']['tmp_name'];
	  $TipeFile1      = $_FILES['image2']['type'];
	  $NamaFile1      = $_FILES['image2']['name'];
	  $acak1           = rand(1,99);
	  $NamaFileUnik1 = $acak1.$NamaFile1;
	  $size1= $_FILES['image2']['size'];
	  $UkuranMax=1000000; // Dalam bytes
	  $gambar=$NamaFile1;
	  $nama=anti_injection($_POST['nama']);
	  $jab=anti_injection($_POST['jabatan']);
	  $pesan=$_POST['pesan'];
	 
	  	$vfile_upload2 = $dir . $NamaFileUnik1;
	  	move_uploaded_file($_FILES['image2']['tmp_name'], $vfile_upload2);
	  		if($_GET['aksi']=='tambahtest'){
	  			if($size1>$UkuranMax){
	  				exit("<script>alert('Ukuran maksimal gambar 10 mb'); window.history.back();</script>");
	  			}else{
	  			$q=mysql_query('insert into testimoni (img,nama,jabatan,pesan) values("'.$NamaFileUnik1.'","'.$nama.'","'.$jab.'","'.$pesan.'")');
	  			header("location:../../../media.php?fModule=pesan&err=3");
	  			}
	  		}else if($_GET['aksi']=='edittest'){
	  		$no=$_POST['no'];
	  		if($gambar==''){
	  			$q=mysql_query("update testimoni set nama='$nama',jabatan='$jab',pesan='$pesan' where no='$no'");	
	  		}else{
	  			if($size1>$UkuranMax){
	  				exit("<script>alert('Ukuran maksimal gambar 10 mb'); window.history.back();</script>");
	  			}else{
	  			$q=mysql_query("update testimoni set img='$NamaFileUnik1', nama='$nama',jabatan='$jab',pesan='$pesan' where no='$no'");	
	  			}
	  		}
	  			header("location:../../../media.php?fModule=pesan&err=2");
	  	}

	}else if($_GET['aksi']=='hapus'){
		$id=$_GET['id'];
		$q=mysql_query("delete from testimoni where no='$id'");
		header("location:../../../media.php?fModule=pesan&err=1");
	}
?>