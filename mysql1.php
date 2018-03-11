<?php
$c=mysql_connect("localhost","root","");
if($c)
{

 }
 else{
  echo"connection error".mysql_error();
  }
  mysql_select_db('hotel_management');
  ?>