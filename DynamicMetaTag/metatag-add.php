<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'menu.php';?>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Add Meta Tag</h2>
<hr>
<form method="post" action="metatag-adddb.php">
<div class="form-group">
<label>Url</label>
<input type="text" name="metatag_url" class="form-control">
</div>
<div class="form-group">
<label>Title</label>
<input type="text" name="metatag_title" class="form-control">
</div>
<div class="form-group">
<label>Keywords</label>
<textarea name="metatag_keywords" class="form-control"></textarea>
</div>
<div class="form-group">
<label>Description</label>
<textarea name="metatag_description" class="form-control"></textarea>
</div>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>
