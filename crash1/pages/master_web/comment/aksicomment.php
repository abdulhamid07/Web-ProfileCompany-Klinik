<?php
	session_start();
	include "../../../../config/connection.php";


	$nokomen=$_POST['nokomen'];
	$nama=$_SESSION['kd_user'];
	$balas=$_POST['balas'];
	$tgl=date('Y-m-d');
	$id=$_GET['id'];

	if($_GET['aksi']=='reply'){
		$q=mysql_query('insert into bls_comment (id_comment,id_penulis,pesan,tgl)
						values("'.$nokomen.'","'.$nama.'","'.$balas.'","'.$tgl.'")');
		header("location:../../../media.php?fModule=comment&err=2");

	}else if($_GET['aksi']=='updatereply'){

		$q=mysql_query("update bls_comment set id_penulis='$nama',pesan='$balas',tgl='$tgl' where no='$no' ");
		header("location:../../../media.php?fModule=comment&err=2");
	
	}else if($_GET['aksi']=='hapus'){
		$q=mysql_query("delete from comment_blog where id_comment='$id'");
		$qbc=mysql_query("delete from bls_comment where id_comment='$id'");
		header("location:../../../media.php?fModule=comment&err=1");
	}
	
?>