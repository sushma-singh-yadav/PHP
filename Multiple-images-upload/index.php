<!DOCTYPE html>
<html>
<head>
	<title>Multiple Image Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-12">
	<h4>Multiple Image Upload</h4>
	<hr>
	<form method="post" enctype="multipart/form-data" action="file-upload.php">
		<div class="form-group">
			<label>Image One</label>
			<input type="file" name="image[]" class="form-control" multiple />
		</div>
		<!-- <div class="form-group">
			<label>Image Two</label>
			<input type="file" name="image[]" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Image Three</label>
			<input type="file" name="image[]" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Image Four</label>
			<input type="file" name="image[]" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Image Five</label>
			<input type="file" name="image[]" class="form-control"/>
		</div> -->
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</form>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>