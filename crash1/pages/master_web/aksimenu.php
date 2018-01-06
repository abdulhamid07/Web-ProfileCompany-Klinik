<?php
	include "../../../config/koneksi.php";
		function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}
		$id=$_GET['id'];
		$no=$_POST['no'];
		$menu=anti_injection($_POST['judul']);
		$tujuan=anti_injection($_POST['ling']);
		$link=str_replace(' ', '-', $tujuan);
		$akt=anti_injection($_POST['aktif']);
		$main=anti_injection($_POST['main']);
		$submenu=anti_injection($_POST['submenu']);
		$sub=$_POST['link'];
		$linksub=str_replace(' ', '-', $sub);
	if($_GET['aksi']=='aktif'){
		
		$st=$_GET['st'];
		if($st=='y'){
		$q=mysql_query("update main_menu set aktif='n' where no='$id'"); echo mysql_error();
		}else{
		$q=mysql_query("update main_menu set aktif='y' where no='$id'");	
		}
		header("location:../../media.php?fModule=menu&err=2");
	}else if($_GET['aksi']=='tambah'){
		$q=mysql_query("insert into main_menu(menu,aktif,link) values('".$menu."','".$akt."','".$link."')");
		header("location:../../media.php?fModule=menu&err=3");

	}else if($_GET['aksi']=='hapusmain'){
		$q=mysql_query("delete from main_menu where no='$id'");
		header("location:../../media.php?fModule=menu&err=1");

	}else if($_GET['aksi']=='tambahsub'){
		$main=anti_injection($_POST['main']);
		$sub=anti_injection($_POST['submain']);
		$q=mysql_query("insert into sub_services (kd_main,m_kategori,link) values('".$main."','".$sub."','".$linksub."')");
		header("location:../../media.php?fModule=menu&err=3");

	}else if($_GET['aksi']=='hapussub'){
		$q=mysql_query("delete from sub_services where no='$id'");
		header("location:../../media.php?fModule=menu&err=1");
	
	}else if($_GET['aksi']=='editmain'){
		$q=mysql_query("update main_menu set menu='$menu',aktif='$akt',link='$link' where no='$no'");
		header("location:../../media.php?fModule=menu&err=2");
	
	}else if($_GET['aksi']=='editsub'){
		$q=mysql_query("update sub_services set kd_main='$main',m_kategori='$submenu',link='$linksub' where no='$no'");
		header("location:../../media.php?fModule=menu&err=2");
	}
?>