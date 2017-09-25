<?php
session_start();
?>
<?php
$con = mysqli_connect('localhost', 'root', '','datbase');
$id=$_POST['id'];

$medicine=$_POST['medicine'];
$diagnosis=$_POST['diagnosis'];
$instructions=$_POST['instructions'];
$doc_name=$_POST['doc_name'];
$str="insert into prescription values('$id','$medicine','$diagnosis','$instructions','$doc_name')";
$res=mysqli_query($con,$str);
 
$sql="SELECT*FROM patients WHERE id='$id'";
$result=mysqli_query($con,$sql);

while($row=$result->fetch_assoc()){
  $name=$row['name']; 
   $age=$row['age'];
 $mobile=$row['mobile']; $gender=$row['gender'];  
}
$sql1="select*from prescription where id='$id'";
$result1=mysqli_query($con,$sql1);


?>

<?php
$var=0; 
 while($row1=$result1->fetch_assoc()){
  $var=$var+1;
?>
<br><br>
Prescription <?php echo $var; ?>
<table>
<tr>
<td> 
Patient id: 
</td>
<td>
<?php echo $id; ?>
</td>
</tr>
<tr>
<td> 
Doctor name: 
</td>
<td>
<?php echo $row1['doctor name']; ?>
</td>
</tr>
<tr>
<td> 
Name: 
</td>
<td>
<?php echo $name; ?>
</td>
</tr>
<tr>
<td> 
Age: 
</td>
<td>
<?php echo $age; ?>
</td>
</tr>
<tr>
<td> 
Gender: 
</td>
<td>
<?php echo $gender; ?>
</td>
</tr>
<tr>
<td> 
Mobile: 
</td>
<td>
<?php echo $mobile; ?>
</td>
</tr>
<tr>
<td> 
Medicine: 
</td>
<td>
<?php echo $row1['medicine']; ?>
</td>
</tr>
<tr>
<td> 
diagnosis: 
</td>
<td>
<?php echo $row1['diagnosis']; ?>
</td>
</tr>

<tr>
<td> 
Additional Instructions: 
</td>
<td>
<?php echo $row1['instruction']; ?>
</td>
</tr>
</table>
<?php } ?>




<html>
<input type="button" onClick="window.print();" value="Print Prescription"/><br><br>
<a href="home.html"><b>HOME</b></a>
</html>
