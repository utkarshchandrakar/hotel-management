<?php
require("mysql1.php");
$r= "select * from room_manage ";
$t=mysql_query($r);
?>
<html>
<head>
<title>FORM</title><br><br>
<link href="bootstrap.css" rel="stylesheet">
</head>
<body>
<a href="reservation.php">
<div class='panel panel-info'>
					<div class='panel-heading'>
  					<h3><CENTER>BOOKING TABLE</CENTER></h3>
					</div>
				</div>
</a>
<table class="table table-bordered">
<thead>
<th>Name</th>
<th>Email</th>
<th>Country</th>
<th>Contact</th>
<th>Room Type</th>
<th>Check in </th>
<th>Check out</th>
<TH>Options</th>
</thead>
<tbody>
<?php
while($row = mysql_fetch_array($t, MYSQL_ASSOC)){
	$a=$row['H_id'];
	
	
echo"<tr>
<td>".$row['H_name']."</td>
<td>".$row['H_email']."</td>
<td>".$row['H_address']."</td>
<td>".$row['H_contact']."</td>
<td>".$row['room_no']."</td>
<td>".$row['check_in']."</td>
<td>".$row['check_out']."</td>
<td><a href='edit1.php?uid=$a'>Edit</a>/<a href='emp_del.php?uid=$a'>Delete</a>/<a href='update1.php'>update</a></td>
</tr>";
  }
 ?>

</tbody>
</table>

