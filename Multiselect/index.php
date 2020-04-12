<!DOCTYPE html>
<html>
<head>
	<title>Multiselect Tutorial</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" type="text/css" href="css/bootstrap-multiselect.css">
    <style type="text/css">
    	.multiselect-container{
    		width: 500px;
    	}
    	.multiselect-item > a,.multiselect-container >li>a{
    		color: black;
    	}
    </style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Multiselect Tutorial</h4>
			<form method="post" action="insert.php">
			<select class="form-control" name="category[]" id="selectoption" multiple="multiple">
				<option value="Fashion">Fashion</option>
				<option value="Books">Books</option>
				<option value="Electronics">Electronics</option>
				<option value="Furniture">Furniture</option>
			</select>
			<input type="submit" name="submit" class="btn btn-primary">
		</form>
		</div>
</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
	$('#selectoption').multiselect({
		includeSelectAllOption:true,
		nonSelectedText:'Select Option',
		enableFiltering:true,
		buttonWidth:'500px'
	});
</script>
</body>
</html>
