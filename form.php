<?php 
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP CRUD Operation</title>
</head>

<body>
    <form action="insert.php" method="POST" autocomplete="off">
        <div class="container">
            <div class="title">
                Registration Form
            </div>
            <div class="form">
                <div class="input_field">
                    <label>First Name:</label>
                    <input type="text" class="input" name="fname" required>
                </div>
                <div class="input_field" >
                    <label>Last Name:</label>
                    <input type="text" class="input" name="lname" required>
                </div>
                <div class="input_field" >
                    <label>Password:</label>
                    <input type="password" value="" class="input" name="pwd" required>
                </div>
                <div class="input_field">
                    <label>Confirm Password:</label>
                    <input type="password" value="" class="input" name="cpwd" required>
                </div>
                <div class="input_field">
                    <label>Gender:</label>
                    <select class="selectbox" name="gender" required>
                        <option value="">Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="input_field">
                    <label>Email:</label>
                    <input type="text" class="input" name="email" value="" required>
                </div>
                <div class="input_field">
                    <label>Phone:</label>
                    <input type="text" class="input" name="phone" required>
                </div>
                <div class="input_field">
                    <label>Address:</label>
                    <textarea class="textarea" name="address" required></textarea>
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