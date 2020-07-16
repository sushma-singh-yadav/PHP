<!DOCTYPE html>
<html>
<?php include 'head.php';
include 'database.php';
$user_id=$_POST['user_id'];
?>
<body>
<?php include 'menu.php';?>

<div class="container">
<div class="row">
<div class="col-md-12">
<h4>User Permission</h4>

<form method="post" action="user_permission_db.php">
<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
<table class="table">
<thead>
<tr>
<th>Menu</th>
<th>Sub Menu</th>
<th>Permission</th>
</tr>
</thead>
<tbody>
<?php
$menuqry="SELECT * from sub_menu 
		 inner join menu on menu.menu_id=sub_menu.menu_id 
		 where submenu_status='Enable'";
$menures=mysqli_query($con,$menuqry);
while ($menudata=mysqli_fetch_assoc($menures)) {
?>
<input type="hidden" name="menu_id[]" value="<?php echo $menudata['menu_id'];?>">
<input type="hidden" name="submenu_id[]" value="<?php echo $submenuid=$menudata['submenu_id'];?>">
<tr>
	<td><?php echo $menudata['menu_name'];?></td>
	<td><?php echo $menudata['submenu_name'];?></td>
	<td>
		<?php
		$permissionqry="SELECT user_permission from menu_useraccess where sub_menu_id='$submenuid' AND user_id='$user_id'";
		$permissionres=mysqli_query($con,$permissionqry);
		$permissiondata=mysqli_fetch_assoc($permissionres);
		$user_permission=$permissiondata['user_permission'];
		?>
		<select name="user_permission[]" class="form-control">
			<?php
			if($user_permission)
			{
			?><option value="<?php echo $user_permission;?>"><?php echo $user_permission;?></option>
			<?php
			}?>
			<option value="False">False</option>
			<option value="True">True</option>
		</select>
	</td>
</tr>
<?php
}
?>
</tbody>
</table>
<input type="submit" name="permissionsubmit" class="btn btn-primary" value="Update">
</form>
</div>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>