<?php
include 'database.php';

if(isset($_POST['submenu_submit']))
{
	$menu_id=$_POST['menu_id'];
	$submenu_name=$_POST['submenu_name'];
	$submenu_url=$_POST['submenu_url'];
	$submenu_display=$_POST['submenu_display'];
	$submenu_order=$_POST['submenu_order'];
	//$department_id=$_POST['department_id'];

	if($submenu_name!='')
	{
		$insertqry="INSERT INTO `sub_menu`( `menu_id`, `submenu_name`, `submenu_url`, `submenu_display`, `submenu_order`) VALUES ('$menu_id','$submenu_name','$submenu_url','$submenu_display','$submenu_order')";
		$insertres=mysqli_query($con,$insertqry);

		$lastid=$con->insert_id;
	
	foreach ($_POST['department_id'] as $key => $value) {
		$department_id=$_POST['department_id'][$key];

		$subdeptqry="INSERT INTO `submenu_department`( `menu_id`, `sub_menu_id`, `department_id`) VALUES ('$menu_id','$lastid','$department_id')";
		$subdeptres=mysqli_query($con,$subdeptqry);
	}
}
}
echo '<script>alert("Sub Menu is added successfully.");
		window.location="submenu_add.php";
</script>';
?>