<?php
	include "../../../config/connection.php";

		function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}

		
		$nama=anti_injection($_POST['nama']);
		$user=anti_injection($_POST['usr']);
		$pass=md5($_POST['pass']);
		$psw=anti_injection($pass);
		$level=$_POST['level'];

		if($_GET['aksi']=='edituser'){
		$q=mysql_query("update admin set nama='$nama',username='$user',password='$psw'"); ("".mysql_error());
		header("location:../../media.php?fModule=index&err=3");
		
		}else if($_GET['aksi']=='adduser'){
		
		$q=mysql_query('insert into admin (nama,username,password,level)
						values("'.$nama.'","'.$user.'","'.$psw.'","'.$level.'")'); ("".mysql_error());	
		header("location:../../media.php?fModule=index&err=3");
		
		}else if($_GET['aksi']=='edit'){
		$id=$_POST['adminno'];
		$q=mysql_query("update admin set nama='$nama',username='$user',password='$psw',level='$level' where id_admin='$id'");
		
		header("location:../../media.php?fModule=index&err=2");	

		}else if($_GET['aksi']=='hapus'){
		$id=$_GET['id'];
		$q=mysql_query("delete from admin where id_admin='$id'");
		header("location:../../media.php?fModule=index&err=1");
	}
?>