<?php
    //header('Content-type: application/json');
    include "config/connection.php";
        function anti_injection($data){
    $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
    return $filter;
    }
       
    $name = anti_injection($_POST['name']); 
    $email = anti_injection($_POST['email']); 
    $message =anti_injection($_POST['message']); 

    $date=date("Y-m-d");

    if($_GET['act']=="saveComment"){
    
    $kd=anti_injection($_POST['id']);
    $id=$_GET['id'];
    $comment=mysql_query('insert into comment_blog (nama,email,komentar,id_article,tanggal_komen)
        values("'.$name.'","'.$email.'","'.$message.'","'.$id.'","'.$date.'")');
    header('location:blog-'.$kd.'.html');

    }else if($_GET['act']=="saveMessage"){

    $subjek=anti_injection($_POST['subject']);
    $data = mysql_query('insert into pesan(nama,email,subjek,pesan,tgl)values("'.$nama.'","'.$email.'","'.$subjek.'","'.$message.'","'.$date.'")');
    $email_from=$email;
    $email_to ='hamyd.abdul6@gmail.com';//replace with your email

        $body = 'Name: ' . $nama. "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subjek . "\n\n" . 'Message: ' . $pesan;
        $success = @mail($email_to, $subjek, $body, 'From: <'.$email_from.'>');
    header("location:contact-9.html");

    }else if($_GET['act']=="saveTestimoni"){
        $testimoni=mysql_query('insert into testimoni (nama,email,pesan,tgl)
        values("'.$name.'","'.$email.'","'.$message.'","'.$date.'")');
        header('location:index.html');
    }
?>