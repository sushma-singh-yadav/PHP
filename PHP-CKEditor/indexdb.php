<?php
include 'database.php';

if(isset($_POST['submit']))
{
	$description=addslashes($_POST['description']);

	$insertqry="INSERT INTO `user_task`( `description`) VALUES ('$description')";
	$insertres=mysqli_query($con,$insertqry);
}
header('Location: index.php');
?>
