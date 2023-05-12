<?php 
session_start();
?>

<?php
include('conn.php');

$id = $_GET['id'];

$updateprofile = $_SESSION['user_name'];

if($updateprofile == true){

}
else{
 header("Location:login.php");
}

$sql="select * from registration where id='$id'";
$qry=mysqli_query($conn,$sql);
$r=mysqli_fetch_array($qry);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update</title>
</head>

<body>
    <form action="updatepro" method="POST" >
    <input type="hidden" name="id" value="<?php echo $r["id"]; ?>"><br>
        <div class="container">
            <div class="title">
                Update Form
            </div>
            
            <div class="form">
                <div class="input_field">
                    <label>First Name:</label>
                    <input type="text" class="input" name="fname" value="<?php echo $r['firstName']; ?>">
                </div>
                <div class="input_field" >
                    <label>Last Name:</label>
                    <input type="text" class="input" name="lname" value="<?php echo $r['lastName']; ?>">
                </div>
                <div class="input_field" >
                    <label>Password:</label>
                    <input type="password" value="<?php echo $r['password']; ?>" class="input" name="pwd">
                </div>
                <div class="input_field">
                    <label>Confirm Password:</label>
                    <input type="password" value="<?php echo $r['cPassword']; ?>" class="input" name="cpwd" >
                </div>
                <div class="input_field">
                    <label>Gender:</label>
                    <select class="selectbox" name="gender" value="<?php echo $r['gender']; ?>" >
                        <option value="">Select</option>
                        <option value="Male"
                        <?php 
                        if($r['gender'=='Male']){
                            echo"selected";
                        }
                        ?>
                        >
                        Male
                    </option>
                        <option value="Female"
                        <?php 
                        if($r['gender'=='Female']){
                            echo"selected";
                        }
                        ?>
                        >
                        Female</option>

                        <option 
                         <?php 
                        // if($r['gender'=='Other']){
                        //     echo"selected";
                        //}
                        ?> 
                        >
                        Other</option>
                    </select>
                </div>
                <div class="input_field">
                    <label>Email:</label>
                    <input type="text" class="input" name="email" value="<?php echo $r['email']; ?>" >
                </div>
                <div class="input_field">
                    <label>Phone:</label>
                    <input type="text" class="input" name="phone" value="<?php echo $r['phone']; ?>">
                </div>
                <div class="input_field">
                    <label>Address:</label>
                    <textarea class="textarea" name="address"><?php echo $r['address']; ?></textarea>
                </div>

                <div class="input_field_terms">
                    <label class="check">
                        <input type="checkbox" name="checkbox" required>
                        <span class="checkmark"></span>
                        </label>
                    <p >Agree to Terms & Conditions</p>
                </div>

                <div class="input_fields">
                    <input type="submit" class="btn"  value="Register" name="reg">
                </div>


            </div>
        </div>
    </form>

</body>

</html>


