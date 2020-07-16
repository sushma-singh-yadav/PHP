<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'menu.php';?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4>Menu List</h4>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Menu Name</th>
						<th>Menu Icon</th>
					</tr>
				</thead>
				<tbody>
						<?php
						include 'database.php';
						$menulistqry="SELECT * from menu where menu_status='Enable'";
						$menulistres=mysqli_query($con,$menulistqry);
						while ($menudata=mysqli_fetch_assoc($menulistres)) {
						?>
						<tr>
							<td><?php echo $menudata['menu_id'];?></td>
							<td><?php echo $menudata['menu_name'];?></td>
							<td><?php echo $menudata['menu_icon'];?></td>
							</tr>
						<?php
						}
						?>
					
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<h4>Menu Add</h4>
			<hr>
			<form method="post" action="menu_adddb.php">
				<div class="form-group">
					<input type="text" name="menu_name" placeholder="Menu Name" class="form-control" />
				</div>
				<div class="form-group">
					<input type="text" name="menu_icon" placeholder="Menu Icon" class="form-control" />
				</div>
				<div class="form-group">
					<input name="menu_submit" class="btn btn-primary" type="submit" value="Add Menu"/>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
</body>
</html>