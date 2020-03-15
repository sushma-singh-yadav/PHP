
<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorial</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!--    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>PHP Tutorial</h2>
        <hr>
        <form method="post" action="#">
          <div class="form-group row">
            <label class="col-md-4">Description</label>
            <div class="col-md-8">
              <textarea name="description" id="editor1"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-4"></label>
            <div class="col-md-8">
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script>
  var editor=CKEDITOR.replace( 'editor1',{
    extraPlugins : 'filebrowser',
    filebrowserBrowseUrl:'browser.php?type=Images',
    filebrowserUploadMethod:"form",
    filebrowserUploadUrl:"upload.php"
  });
</script>
</html>
