<?php
include 'database.php';

$notes_desc=$_POST['notes_desc'];
$notes_id=$_POST['notes_id'];
if($notes_desc!=''){
	if($notes_id!='')
	{
		//when notes id not blank
		$updateqry="UPDATE daily_notes SET notes_desc='$notes_desc' WHERE notes_id='$notes_id'";
		$updateres=mysqli_query($con,$updateqry);
	}
	else
	{
	$notes_date=date('Y-m-d');
	$notes_createtime=date('Y-m-d H:i:s');
	$insertqry="INSERT INTO `daily_notes`( `notes_desc`, `notes_date`, `notes_createtime`) VALUES ('$notes_desc','$notes_date','$notes_createtime')";
	$insertres=mysqli_query($con,$insertqry);
	echo mysqli_insert_id($con);
	}
}
?>