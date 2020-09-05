<?php
include 'database.php';
if(isset($_POST['submit']))
{
	$metatag_url=$_POST['metatag_url'];
	$metatag_title=$_POST['metatag_title'];
	$metatag_keywords=addslashes($_POST['metatag_keywords']);
	$metatag_description=addslashes($_POST['metatag_description']);

	if($metatag_url!='')
	{
		$insertqry="INSERT INTO `meta_tag`( `meta_url`, `meta_title`, `meta_keywords`, `meta_description`) VALUES ('$metatag_url','$metatag_title','$metatag_keywords','$metatag_description')";
		$insertres=mysqli_query($con,$insertqry);

		echo '<script>alert("Meta tag added successfully");
		window.location="metatag-add.php";
		</script>';
	}
}
?>