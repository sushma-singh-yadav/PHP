<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'menu.php';?>
<?php include 'database.php';?>
<div class="container">
<div class="row">
<div class="col-md-6">
<h4>Sub Menu List</h4>
<hr>
<div class="table-responsive">
<table class="table table-bordered">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Menu Name</th>
						<th>Sub Menu Name</th>
						<th>Sub Menu Url</th>
						<th>Sub Menu Order</th>
						<!-- <th>Department</th> -->
					</tr>
				</thead>
				<tbody>
						<?php
						include 'database.php';
						$menulistqry="SELECT sub_menu.*,menu.menu_name from sub_menu inner join menu on menu.menu_id=sub_menu.menu_id 
						where submenu_status='Enable'";
						$menulistres=mysqli_query($con,$menulistqry);
						while ($menudata=mysqli_fetch_assoc($menulistres)) {
						?>
						<tr>
							<td><?php echo $menudata['submenu_id'];?></td>
							<td><?php echo $menudata['menu_name'];?></td>
							<td><?php echo $menudata['submenu_name'];?></td>
							<td><?php echo $menudata['submenu_url'];?></td>
							<td><?php echo $menudata['submenu_order'];?></td>
							<!-- <td><?php echo $menudata['department_name'];?></td> -->
							</tr>
						<?php
						}
						?>
					
				</tbody>
			</table>
</div>
</div>

<div class="col-md-6">
<h4>Sub Menu Add</h4>
<hr>
	<form method="post" action="submenu_adddb.php">
	<div class="form-group">
	<select class="form-control" name="menu_id">
		<option value="">Select Menu</option>
		<?php
		$menulistqry="SELECT * from menu where menu_status='Enable'";
		$menulistres=mysqli_query($con,$menulistqry);
		while ($menudata=mysqli_fetch_assoc($menulistres)) {
		?>
		<option value="<?php echo $menudata['menu_id'];?>"><?php echo $menudata['menu_name'];?></option>
	<?php } ?>
	</select>
	</div>
	<div class="form-group">
	<input type="text" name="submenu_name" placeholder="Sub Menu Name" class="form-control" />
	</div>
	<div class="form-group">
	<input type="text" name="submenu_url" placeholder="Sub Menu Url" class="form-control" />
	</div>
	<div class="form-group">
	<select class="form-control" name="submenu_display">
		<option value="Yes">Yes</option>
		<option value="No">No</option>
	</select>
	</div>
	<div class="form-group">
	<select class="form-control" name="submenu_order">
		<?php
		for ($i=0; $i < 10; $i++) { 
		?>
		<option value="<?php echo $i;?>"><?php echo $i;?></option>
	<?php } ?>
	</select>
	</div>
	<div class="form-group">
	<select class="form-control" name="department_id[]" multiple>
		<option value="">Select Department</option>
		<?php
		$deptlistqry="SELECT * from department where department_status='Enable'";
		$deptlistres=mysqli_query($con,$deptlistqry);
		while ($deptdata=mysqli_fetch_assoc($deptlistres)) {
		?>
		<option value="<?php echo $deptdata['department_id'];?>"><?php echo $deptdata['department_name'];?></option>
	<?php } ?>
	</select>
	</div>
	<div class="form-group">
	<input name="submenu_submit" class="btn btn-primary" type="submit" value="Add Sub Menu"/>
	</div>
	</form>
</div>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>