<?php
	include "../../../../config/koneksi.php";
	include "../../../../config/gambar.php";

	$desc=$_POST['desc'];
	$akt=$_POST['aktif'];
	$idslider=$_POST['id'];
	$idaktif=$_GET['id'];
	
	if(($_GET['aksi']=='tambah')||($_GET['aksi']=='editslider')){
	  $dir="../../../../images/slider/";	
	  $Lfile1    = $_FILES['image3']['tmp_name'];
	  $TipeFile1      = $_FILES['image3']['type'];
	  $NamaFile1      = $_FILES['image3']['name'];
	  $acak1           = rand(1,99);
	  $NamaFileUnik1 = $acak1.$NamaFile1;
	  $size1= $_FILES['image3']['size'];
	  $UkuranMax=100000; // Dalam bytes
	  $gambar=$NamaFile1;

	 	if($size1>$UkuranMax){
	  		header("location:../../../media.php?fModule=comment&err=9");
	  	}else{
	  	$vfile_upload2 = $dir . $NamaFileUnik1;
	  	move_uploaded_file($Lfile1, $vfile_upload2);

	  		if($_GET['aksi']=='tambah'){
	  		$q=mysql_query('insert into slider (img,cap,aktif)
	  						values("'.$NamaFileUnik1.'","'.$desc.'","'.$akt.'")');
			header("location:../../../media.php?fModule=comment&err=3");
			
			}else if($_GET['aksi']=='editslider'){
				$no=$_POST['id'];
				$cap=$_POST['cap'];

		  		if($gambar==''){
		  			$q=mysql_query("update slider set cap='$cap' where no='$no'");	
		  		}else{
		  			$q=mysql_query("update slider set img='$NamaFileUnik1', cap='$cap' where no='$no'");	
		  		}
		  			header("location:../../../media.php?fModule=comment&err=2");
			}
		}
	}else if($_GET['aksi']=='hapus'){
		$id=$_GET['id'];
			$q=mysql_query("delete from slider where no='$id'");
			header("location:../../../media.php?fModule=comment&err=1");
	}else if($_GET['aksi']=='aktif'){
		
		$st=$_GET['st'];
		if($st=='y'){
		$q=mysql_query("update slider set aktif='n' where no='$idaktif'"); echo mysql_error();
		}else{
		$q=mysql_query("update slider set aktif='y' where no='$idaktif'");	
		}
		header("location:../../../media.php?fModule=comment&err=2");
	}
?>