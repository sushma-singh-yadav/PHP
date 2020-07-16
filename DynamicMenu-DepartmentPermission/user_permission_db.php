<?php
include 'database.php';

if(isset($_POST['permissionsubmit']))
{
$user_id=$_POST['user_id'];
	if($user_id!='')
	{
		$deleteqry="DELETE FROM menu_useraccess where user_id='$user_id'";
		$delteres=mysqli_query($con,$deleteqry);
		
		foreach ($_POST['user_permission'] as $key => $value) {
			$user_permission=$_POST['user_permission'][$key];
			$menu_id=$_POST['menu_id'][$key];
			$submenu_id=$_POST['submenu_id'][$key];

			$insertqry="INSERT INTO `menu_useraccess`( `menu_id`, `sub_menu_id`, `user_id`, `user_permission`) VALUES ('$menu_id','$submenu_id','$user_id','$user_permission')";
			$insertres=mysqli_query($con,$insertqry);
		}
	}
}
echo '<script>alert(" Permission is added successfully.");
		window.location="index.php";
</script>';
?>