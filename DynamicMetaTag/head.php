<head>
	<?php
	include 'database.php';

	$url=basename($_SERVER['REQUEST_URI']);
	//get meta tag
	$metaqry="SELECT * from meta_tag where meta_url='$url'";
	$metares=mysqli_query($con,$metaqry);
	$metarow=mysqli_num_rows($metares);
	$metadata=mysqli_fetch_assoc($metares);

	$meta_title='';
	$meta_description='';
	$meta_keywords='';
	if($metarow>0)
	{
	$meta_title=$metadata['meta_title'];
	$meta_description=$metadata['meta_description'];
	$meta_keywords=$metadata['meta_keywords'];
	}else{
		//you can fetch by default index.php from database
	$meta_title='Dynamic Meta Tag';
	$meta_description='Dynamic Meta Tag';
	$meta_keywords='Dynamic Meta Tag';
	}
	?>
	<title><?php echo $meta_title;?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $meta_description;?>">
	<meta name="keywords" content="<?php echo $meta_keywords;?>">
	<meta name="author" content="Metatag">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>