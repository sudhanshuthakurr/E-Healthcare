<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect('localhost','root','','datbase');
$sql = 'SELECT * from patients';

$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "PATIENT ID :{$row['id']}  <br> ".
         "NAME 		 : {$row['name']} <br> ".
         "AGE		 : {$row['age']} <br> ".
         "GENDER	 : {$row['gender']} <br> ".
         "OCCUPATION : {$row['occupation']} <br> ".
         "MOBILE	 : {$row['mobile']} <br> ".
         "ADDRESS	 : {$row['address']} <br> ".
         "--------------------------------<br>";
} 

mysqli_close($conn);
?>
