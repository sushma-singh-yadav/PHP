<?php
include 'database.php';

if(isset($_POST['submenu_submit']))
{
	$menu_id=$_POST['menu_id'];
	$submenu_name=$_POST['submenu_name'];
	$submenu_url=$_POST['submenu_url'];
	$submenu_display=$_POST['submenu_display'];
	$submenu_order=$_POST['submenu_order'];
	$department_id=$_POST['department_id'];

	if($submenu_name!='')
	{
		$insertqry="INSERT INTO `sub_menu`( `menu_id`, `submenu_name`, `submenu_url`, `submenu_display`, `submenu_order`,`submenu_department`) VALUES ('$menu_id','$submenu_name','$submenu_url','$submenu_display','$submenu_order','$department_id')";
		$insertres=mysqli_query($con,$insertqry);
	}
}
echo '<script>alert("Sub Menu is added successfully.");
		window.location="submenu_add.php";
</script>';
?>