<?php
require("mysql1.php");
$r= "select * from room_manage ";
$t=mysql_query($r);
$m=mysql_fetch_array($t,MYSQL_ASSOC);
?>