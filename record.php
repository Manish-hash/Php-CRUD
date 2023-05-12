<?php
//sesssion
session_start();
echo $_SESSION["user_name"]; ;
?>
<html>
<head>
    <title>Display</title>

    <style>
body{
    background-color: aquamarine;
}
table{
    background-color: aliceblue;
}
.update{
    
    background-color: green;
    color:white;
    border:0;
    outline:none;
    border-radius: 8px;
    height:23px;
    width:80px;
    font-weight: bold;
    cursor:pointer;
}
.delete{
     
    background-color: red;
    color:white;
    border:0;
    outline:none;
    border-radius: 8px;
    height:23px;
    width:80px;
    font-weight: bold;
    cursor:pointer;
}

.logout{
    text-align: right ;
    margin-right: 50px;
}

@media (max-width:250px)
{
    body{
        width:88%;
    }
}

        </style>

</head>
<body>
    <div class="logout" >
    <a href="logout.php"><input  type="submit" name="logout" value="Logout" style="background-color:red; color:white; border-radius:8px; padding:6px; border:1px solid red; cursor: pointer;"></a>
</div >
<table border=2 cellspacing=2 width=100%>
<tr>
    <th>S.N</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Password</th>
    <th>Confirm Password</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th colspan="2">Action</th>
    
</tr>
<h2 align="center"><mark>Display All Records</mark></h2>  
<?php

$c=1;
include('conn.php');

$userprofile = $_SESSION['user_name'];

if($userprofile == true){

}
else{
    header("Location: login.php");
}

$sql="select * from registration";
$qry=mysqli_query($conn,$sql);

while($r=mysqli_fetch_array($qry)){
?>

<tr>
    <td><?= $c; ?></td>
    <td><?php echo $r["firstName"]; ?></td>
    <td><?php echo $r["lastName"]; ?></td>
    <td><?php echo $r["password"]; ?></td>
    <td><?php echo $r["cPassword"]; ?></td>
    <td><?php echo $r["gender"];?></td>
    <td><?php echo $r["email"]; ?></td>
    <td><?php echo $r["phone"]; ?></td>
    <td><?php echo $r["address"]; ?></td>

<td>
 <a href="update.php?id=<?php echo $r["id"];?>"><input type='submit' value='Update' class='update'></a>
</td>
<td>
<a href="del.php?id=<?php echo $r["id"]; ?>"><input type='submit' value='Delete' class='delete' onclick='return checkDelete()'></a>
</td>
</tr>
<?php 
$c++;
}
?>

</table>
<script>
    function checkDelete(){
        return confirm('Are you sure you want to delete this record ?');
    }
    </script>
</body>
</html>