<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login-style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="center" >
        <h1>Login</h1>
        <form action="#" method="POST" autocomplete="off">
    <div class="loginform">
        <input type="text" name="username" class="textfield" placeholder="Username or Email Address">
        
        <input type="password" name="password" class="textfield" placeholder="Password">
    
    <div class="forgetpass">
        <a href="#" class="link" onclick="message()">Forget Password?</a>

    </div>
    <input type="submit" name="login" value="Login" class="btn">
    <div class="signup">New Member?
<a href="#" class="sign">Signup</a>
    </div>
    </div>
</form>
    </div>

    <script>
        function message(){
            alert("are u sure want to forget password")
        }
        </script>
        
</body>
</table>
</html>


<?php 
include('conn.php');
if(isset($_POST['login'])){

    $usrname = $_POST['username'];
    $pwd = $_POST['password'];

    $sql = "select * from registration where email='$usrname' && password='$pwd'";
    $qry=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($qry);

   // echo $total;

   if($total== 1){

    $_SESSION['user_name'] = "$usrname";
    header("Location:record.php");

   }
   else{
    echo"<script>alert('Please enter the valid email/password !!')</script>";
   }
}

?>
