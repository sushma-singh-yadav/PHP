<?php
$con=mysqli_connect('localhost','root','','erptest');

if(mysqli_connect_errno())
{
	echo 'Fail to connect '.mysqli_connect_error();
}
?>