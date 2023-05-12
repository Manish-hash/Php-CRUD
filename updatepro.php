<?php 
include("conn.php");
$id = $_POST['id'];
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$pw = $_POST['pwd'];
$cp = $_POST['cpwd'];
$g  = $_POST['gender'];
$e  = $_POST['email'];
$ph = $_POST['phone'];
$ad = $_POST['address'];

$sql = "update registration set firstName = '$fn',lastName = '$ln',password = '$pw',
cPassword= '$cp',gender='$g',email = '$e', phone='$ph', address='$ad' where id = '$id'";//update code
$qry = mysqli_query($conn,$sql);
if($qry){
    // echo "<script>alert('Record Updated ')</script>";
header("location:record.php");
}
?>