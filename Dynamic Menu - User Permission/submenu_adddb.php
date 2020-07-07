<?php
include 'database.php';

if(isset($_POST['submenu_submit']))
{
	$menu_id=$_POST['menu_id'];
	$submenu_name=$_POST['submenu_name'];
	$submenu_url=$_POST['submenu_url'];
	$submenu_display=$_POST['submenu_display'];
	$submenu_order=$_POST['submenu_order'];

	if($submenu_name!='')
	{
		$insertqry="INSERT INTO `sub_menu`( `menu_id`, `submenu_name`, `submenu_url`, `submenu_display`, `submenu_order`) VALUES ('$menu_id','$submenu_name','$submenu_url','$submenu_display','$submenu_order')";
		$insertres=mysqli_query($con,$insertqry);
	}
}
echo '<script>alert("Sub Menu is added successfully.");
		window.location="submenu_add.php";
</script>';
?>