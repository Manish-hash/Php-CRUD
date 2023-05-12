<?php 
include('conn.php');
$id=$_GET['id'];
echo $id;

$sql="delete from registration where id='$id'";
$qry=mysqli_query($conn,$sql);
// if($qry){
//   echo"<script>alert('Record deleted !!')</script>";
// }
// else{
//   echo"<script>alert('OoPs Something Went Wrong !!')</script>";
// }
 
header("Location:record.php");
?>