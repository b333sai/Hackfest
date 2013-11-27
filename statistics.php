<html>
<head>
<title>
Statistics
</title>
</head>
<?php
$con=mysql_connect('localhost','root','iiitdm') or die("Could not connect".mysql_error());
mysql_select_db("Student");
 function br($x)
  {
   for($y=0;$y<$x;$y=$y+1)
    {
	 echo "</br>";
	}
  }
echo "<center><h1 style=background-color:grey;font-size:80px;margin-top:0px;color:white;font-family:sans-serif; >Welcome to students portal</h1></center>";
echo "<div align=right style=font-size:30px ><a href=register.php >Register</a></div>";

 $res1=mysql_query("SELECT * FROM `details` WHERE department='Computer Science and Engineering' ");
 $res2=mysql_query("SELECT * FROM `details` WHERE department='Mechanical Engineering' ");
 $res3=mysql_query("SELECT * FROM `details` WHERE department='Electrical and Electronics Engineering' ");
 $res4=mysql_query("SELECT * FROM `details` WHERE department='Civil Engineering' ");
 $res5=mysql_query("SELECT * FROM `details` WHERE department='Biotechnical Engineering' ");
 $res6=mysql_query("SELECT * FROM `details` WHERE department='Chemical Engineering' ");
 $cs=mysql_num_rows($res1);
 $mec=mysql_num_rows($res2);
 $eee=mysql_num_rows($res3);
 $civ=mysql_num_rows($res4);
 $bio=mysql_num_rows($res5);
 $che=mysql_num_rows($res6);
br(3);
?>
<center>
<h1>Statistics</h1>
<form action="student_details.php" method="get" ></br>
<table border=1 cellpadding=5 style="border-collapse:collapse;">
<tr><th>Department</th><th>Students</th></tr>
<tr><td>Computer Science and Engineering</td><td><?php echo $cs ?></td></tr>
<tr><td>Mechanical Engineering</td><td><?php echo $mec ?></td></tr>
<tr><td>Electrical and Electronics Engineering</td><td><?php echo $eee ?></td></tr>
<tr><td>Civil Engineering</td><td><?php echo $civ ?></td></tr>
<tr><td>Biotechnical Engineering</td><td><?php echo $bio ?></td></tr>
<tr><td>Chemical Engineering</td><td><?php echo $che ?></td></tr>
</center></html>
