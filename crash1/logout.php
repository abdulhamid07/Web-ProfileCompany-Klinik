<?php
	session_start();
	//session_id();

	include "../config/connection.php";
	$datetime=date('Y-m-d H:m:s');
	$bs = $_SERVER['HTTP_USER_AGENT'];
				
	
	if(!empty($_SESSION['kd_user']) && !empty($_SESSION['password'] ))
	{
	unset($_SESSION['id']);
	}
	else if(($_GET['tanda']=='time')||($_GET['tanda']=='oke')) {
			$datetime = mysql_query("update admin set status='off', browser='$bs', logout='$datetime' where username ='{$_SESSION['username']}'"); 
			session_destroy();
	
		if ($_GET['tanda']=='time'){
			exit("<script>alert('Silahkan Login Kembali'); window.location='index.php';</script>");	
		}else if ($_GET['tanda']=='oke'){
		header("location:index.php");
		}
	}else if ($_GET['tanda']=='sess'){
		
		exit("<script>alert('Anda Belum Login'); window.location='index.php';</script>");
	}
?>
