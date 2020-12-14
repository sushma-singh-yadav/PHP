<?php 
include 'lock.php';
?>
<!DOCTYPE html>
<html>

<head>
	<!--
		seconds 
		1 min = 60 sec 
		15 = 15*60 =900
	-->
<!-- <meta http-equiv="refresh" content="60;url=logout.php" /> -->
</head>
<body>
<h4>Welcome to dashboard </h4>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	function checkUserTime()
	{
		$.ajax({
			url:"check-user-time.php",
			method:"post",
			success:function(response)
			{
				if(response=='Logout')
				{
					window.location.href="logout.php";
				}
			}
		});	
	}
	setInterval(function(){
		checkUserTime();
	},2000);
	
</script>
</body>

</html>