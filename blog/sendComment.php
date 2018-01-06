<?php
include "../config/connection.php";
    header('Content-type: application/json');
        $status = array(
        'type'=>'success',
        'message'=>'Thank you for contact us. As early as possible  we will contact you '
    );
    
    $name = @trim(stripcslashes($_POST['nama'])); 
    $email = @trim(stripcslashes($_POST['email'])); 
    //$subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripcslashes($_POST['komentar'])); 
    $id=$_GET['id'];
    $tgl=date("Y-m-d");
    /*$email_from = $email;
    $email_to = 'hamyd.abdul6@gmail.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    */
    $success=mysql_query('insert into comment_blog (nama,email,komentar,id_article,tanggal_komen)
        values("'.$name.'","'.$email.'","'.$message.'","'.$id.'","'.$tgl.'")');
    /*
    $sql='INSERT INTO comment_blog SET';
    $sql.='nama="'.$name.'",';
    $sql.='email="'.$email.'"';
    $sql.='komentar="'.$message.'",';
    $sql.='id_article="'.$id.'",';
    $sql.='tanggal_komen="'.$tgl.'"';
    $rs=mysql_query($sql);
    $user_id=mysql_insert_id();
    */
    echo json_encode($status);
    die;
?>