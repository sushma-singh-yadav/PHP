<?php
include 'database.php';

$category=$_POST['category'];

if($category=='Fashion')
{
	echo '<option value="Top">Top</option>
	<option value="Jeans">Jeans</option>
	';
}
?>
