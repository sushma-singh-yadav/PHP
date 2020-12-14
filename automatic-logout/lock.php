<?php
include('conn.php');
session_start(); 

$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select * from customers where customer_email='$user_check' ");
$row=mysqli_fetch_array($ses_sql);

$login_session=$row['customer_email'];

if(!isset($login_session))
{
header("Location: login.php");
}
?>