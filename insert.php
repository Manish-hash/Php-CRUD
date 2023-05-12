<?php 
include('conn.php');
if($_POST['reg']){
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $pass=$_POST['pwd'];
    $confirmpwd=$_POST['cpwd'];
    $g=$_POST['gender'];
    $e=$_POST['email'];
    $p=$_POST['phone'];
    $a=$_POST['address'];

    $sql="insert into registration(firstName,lastName,password,cPassword,gender,email,phone,address) values('$fn','$ln','$pass','$confirmpwd','$g','$e','$p','$a')";
    $qry=mysqli_query($conn,$sql);
    header("LOcation:form.php");

}
?> 