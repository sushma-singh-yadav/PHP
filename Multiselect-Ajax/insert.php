<?php
include 'database.php';

if(isset($_POST['submit']))
{
	//print_r($_POST['category']);
	$category = $_POST['category'];
	foreach ($_POST['subcategory'] as $key => $value) {
		$subcategory=$_POST['subcategory'][$key];

		$insertqry="INSERT INTO `multiselect`(`category`,`subcategory`) VALUES ('$category','$subcategory')";
		$insertres=mysqli_query($con,$insertqry);
	}
}
header('Location: index.php');
?>
