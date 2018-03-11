<?php
require("mysql1.php");
$a=$_POST['fname'];
$b=$_POST['uemail'];
$d=$_POST['country'];
$e=$_POST['phone'];
$f=$_POST['troom'];
$g=$_POST['cin'];
$h=$_POST['cout'];



$sql = "insert INTO room_manage(H_name,H_email,H_address,H_contact,room_no,check_in,check_out) VALUES('$a','$b','$d','$e','$f','$g','$h')";
mysql_query($sql);
header('location:r3.php');

?>