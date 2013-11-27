<html>
<head>
<title>
Student Portal
</title>
<script>
function st_details()
{
window.open("register.php", "_parent");
return true;
}
function stats()
{
window.open("statistics.php", "_parent");
return true;
}
</script>
</head>
<?php
 function br($x)
  {
   for($y=0;$y<$x;$y=$y+1)
    {
	 echo "</br>";
	}
  }
echo "<center><h1 style=background-color:grey;font-size:80px;margin-top:0px;color:white;font-family:sans-serif; >Welcome to students portal</h1></center>";
br(6);
?>
<center>
<input type=button name=reg value=Register onclick="st_details()" style="width:200px;height:50px;font-size:25px;"/><input type=button name=statistics  onclick="stats()" value=Statistics style="width:200px;height:50px;font-size:25px;margin-left:20px;" /></center></html>
