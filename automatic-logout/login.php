<?php
include("conn.php");
$error="";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=addslashes($_POST['username']); 
$mypassword=md5(addslashes($_POST['password'])); 
$sql="SELECT customer_id FROM customers WHERE customer_email='$myusername' and customer_password='$mypassword' and customer_status='Enable' ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$active=$row['active'];
$user_id=$row['user_id'];
$count=mysqli_num_rows($result);
if($count==1)
{
$_SESSION['login_user']=$myusername;
$_SESSION['login_user_time']=time();
header("location: index.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Automatic Logout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <body class="page-login">
        <main class="container text-center">
                    <div class="row">
                        <div class="col-md-4 center"></div>
                        <div class="col-md-4 center">
                            <div class="login-box">
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <form class="m-t-md" method="post">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
									<input type="submit" value=" Login "  class="btn btn-success btn-block"/>
                                 </form>
								 <br>
								 <span style="color: #ff0000;"> <?php echo $error; ?> </span>
								
                            </div>
                        </div>
                    </div><!-- Row -->
        </main><!-- Page Content -->
	  
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    </body>

</html>