<?php
include 'database.php';

if(isset($_POST['submit']))
{
	//print_r($_POST['category']);

	foreach ($_POST['category'] as $key => $value) {
		$category=$_POST['category'][$key];

		$insertqry="INSERT INTO `multiselect`(`category`) VALUES ('$category')";
		$insertres=mysqli_query($con,$insertqry);
	}
}
header('Location: index.php');
?>