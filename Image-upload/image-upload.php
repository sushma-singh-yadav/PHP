<?php
include 'database.php';
if(isset($_POST['submit']))
{
	 $imgname=$_FILES['Image']['name'];
	echo '<br>';
	$extension = pathinfo($imgname,PATHINFO_EXTENSION);

	$randomno=rand(0,100000);
	$rename='Upload'.date('Ymd').$randomno;

	 $newname=$rename.'.'.$extension;

    $filename=$_FILES['Image']['tmp_name'];

	if(move_uploaded_file($filename, 'upload/'.$imgname))
	{
		echo "uploaded";
		/*$insertqry="INSERT INTO `image_upload`( `image_name`) VALUES ('$newname')";
		$insertes=mysqli_query($con,$insertqry);*/
	}
	else
	{
		echo "not uploaded";
	}
}
?>