<?php
include 'database.php';

if(isset($_POST['menu_submit']))
{
	$menu_name=$_POST['menu_name'];
	$menu_icon=$_POST['menu_icon'];

	if($menu_name!='')
	{
		$insertqry="INSERT INTO `menu`( `menu_name`, `menu_icon`) VALUES ('$menu_name','$menu_icon')";
		$insertres=mysqli_query($con,$insertqry);
	}
}
echo '<script>alert(" Menu is added successfully.");
		window.location="menu_add.php";
</script>';
?>