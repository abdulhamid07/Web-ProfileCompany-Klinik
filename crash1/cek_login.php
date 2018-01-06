<?php
include "../config/connection.php";

	$psw = md5($_POST['password']);
require_once "../config/functionSession.php";
	function anti_injection($data){
		$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter;
		}

	$username = anti_injection($_POST['username']);
	$password = anti_injection ($psw);
	$ip = $_SERVER['REMOTE_ADDR']; 
	$bs = $_SERVER['HTTP_USER_AGENT'];

	if (!(ctype_alnum($username)) OR !(ctype_alnum($password))){
		header("location:../config/notify.php?tanda=tipe_data");
		} else {
		// query untuk mendapatkan record dari username
		$query = "SELECT * FROM admin WHERE username = '$username' AND password='$password'";
		$hasil = mysql_query($query); ("".mysql_error());
		$data = mysql_fetch_array($hasil);
		$q = mysql_num_rows($hasil);
		 

		// cek kesesuaian password
		if ($data['password'] == $password && $data['username'] == $username){
			$datetime = mysql_query("update admin set ip='$ip', browser='$bs', logout='no', status='on', lastlogin=now() where username = '$username'");
    		// menyimpan username dan level ke dalam session
    		$_SESSION['id']=session_id();
			$_SESSION['kd_user'] = $data['id_admin'];
			$_SESSION['level']=$data['level'];
		    $_SESSION['username'] = $data['username'];
		    $_SESSION['lastlogin'] = $data['lastlogin'];
		    $_SESSION['browser'] = $data['browser'];
		   

				login_validate();
				header('location: media.php');
		} else {
				header("location:login.php?err=7");
			}
		}
	?>