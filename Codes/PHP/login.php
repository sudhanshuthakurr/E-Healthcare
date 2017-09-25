<?php
session_start();
?>
<?php

require "demo.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM register WHERE username='$username' and password='$password'";

$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);

if($count<1){ header("Location:index.html");}
else
	{
		$_SESSION[user]=$username;
		header("location:home.html");
	}


?>
