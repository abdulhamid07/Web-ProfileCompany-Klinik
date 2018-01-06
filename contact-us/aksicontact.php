<?php
include "../config/connection.php";
function anti_injection($data){
$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
return $filter;
}

$nama=anti_injection($_POST['name']);
$email=anti_injection($_POST['email']);
$subjek=anti_injection($_POST['subject']);
$pesan=anti_injection($_POST['message']);
$date = date("Y-m-d");


$data = mysql_query('insert into pesan(nama,email,subjek,pesan,tgl)values("'.$nama.'","'.$email.'","'.$subjek.'","'.$pesan.'","'.$date.'")');
$email_from=$email;
$email_to ='hamyd.abdul6@gmail.com';//replace with your email

    $body = 'Name: ' . $nama. "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subjek . "\n\n" . 'Message: ' . $pesan;
    $success = @mail($email_to, $subjek, $body, 'From: <'.$email_from.'>');
header("location:../contact-9.html");
?>