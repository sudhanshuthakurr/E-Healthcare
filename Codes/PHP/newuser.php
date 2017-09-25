<?php
$username=$_POST["username"];
$password=$_POST["password"];

$con=mysqli_connect('localhost','root','','datbase');

$str="insert into register (username,password) values('".$username."','".$password."');";
$res=mysqli_query($con,$str);
if($res>=0)
{
echo'<br><br><b>Thank you for registeration !! <br>';
}

?>
<html>
<br>
<a href="index.html"><b>Click here to return to the main page</b></a>
</html>
