<?php
if(isset($_FILES['upload']['name']))
{
	$file=$_FILES['upload']['name'];
	$filetmp=$_FILES['upload']['tmp_name'];

	move_uploaded_file($filetmp,'upload/'.$file);
	$function_number=$_GET['CKEditorFuncNum'];
	$url='upload/'.$file;
	$message='';
	echo "<script>window.parent.CKEDITOR.tools.callFunction('".$function_number."','".$url."','".$message."');</script>";     
}
?>
