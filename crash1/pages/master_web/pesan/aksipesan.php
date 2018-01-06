<?php
	include "../../../../config/koneksi.php";
	error_reporting();
		function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}
	$qs=mysql_query("select link from socmed where no in(4)");
	$ds=mysql_fetch_assoc($qs);

	$no=$_POST['no'];
	$sub=anti_injection($_POST['subjek']);
	$tgl=date('Y-m-d');
	$pes=anti_injection($_POST['pesan']);
	$email=anti_injection($_POST['email']);
	
	if($_GET['aksi']=='reply'){
		$q=mysql_query('insert into bls_email (id_pesan,subjek,pesan,tgl)
						values("'.$no.'","'.$sub.'","'.$pes.'","'.$tgl.'")');
		$email_to=$email;
		$email_from = '$ds[link]';//replace with your email
    		//$body = 'Name: ' . $nama. "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subjek . "\n\n" . 'Message: ' . $pesan;
    		$isi='Message: ' . $pes;
    		$success = @mail($email_to, $sub, $isi, 'From: <'.$email_from.'>');
		header("location:../../../media.php?fModule=pesan&err=2");
	}else if($_GET['aksi']=='hapus'){
		$id=$_GET['id'];
		$q=mysql_query("delete from pesan where no='$id'");
		$qbc=mysql_query("delete from bls_email where no='$id'");
		header("location:../../../media.php?fModule=pesan&err=1");
	}else if($_GET['aksi']=='updatereply'){
		$q=mysql_query("update bls_email set subjek='$sub',pesan='$pes',tgl='$tgl' where no='$no'");
		header("location:../../../media.php?fModule=pesan&err=2");	
	}
	