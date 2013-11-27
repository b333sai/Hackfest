<html>
<head>
<title>
Student Registration
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
echo "<div align=right style=font-size:30px ><a href=statistics.php >Statistics</a></div>";
if(isset($_GET['register']))
{
 $name=$_GET['st_name'];
 $insti=$_GET['institute'];
 $year=$_GET['year'];
 $department=$_GET['department'];
 $interests=$_GET['interests'];

 mysql_query("INSERT INTO `details` SET name='$name', institute='$insti', year='$year', department='$department', interests='$interests'");
 echo "<center><p>You have been successfully registered!</p></center>";
}
else
{
br(3);
?>
<center>
<h1>Student Details</h1>
<form action="student_details.php" method="get" ></br>
<table>
<tr><td align=right><strong>Name:</strong></td><td align=left ><input type=text name=st_name size=30 maxlength=100/></td></tr>
<tr><td align=right><strong>Institute:</strong></td><td align=left ><input type=text name=institute  size=60 maxlength=200/></td></tr>
<tr><td align=right><strong>Year:</strong></td><td align=left ><select name=year >
<?php
$x=1;
while($x<=4)
{
echo "<option name=year value=".$x." >".$x."</option>";
$x=$x+1;
}
?>
</select></td></tr>
<tr><td align=right><strong>Department:</strong></td><td align=left ><select name=department >
<option value="Computer Science and Engineering" >Computer Science and Engineering</option>
<option value="Mechanical Engineering" >Mechanical Engineering</option>
<option value="Electrical and Electronics Engineering" >Electrical and Electronics Engineering</option>
<option value="Civil Engineering" >Civil Engineering</option>
<option value="Chemical Engineering" >Chemical Engineering</option>
<option value="Biotechnical Engineering" >Biotechnical Engineering</option>
</select></td></tr>
<tr><td align=right><strong>Interests:</strong></td><td align=left ><textarea style="min-height:100px;min-width:300px;max-height:100px;max-width:300px;"maxlength=300 name=interests   ></textarea></td></tr>
<tr><td></td><td align=center ><input type=submit value=Register name=register /></td></tr></form></table></center>
</center>
<?php
}
?></html>
