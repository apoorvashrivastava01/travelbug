<?php

$username = "root";
$password = "root";
$server = "localhost";
$db = "travelbug";

$con = mysqli_connect($server, $username, $password, $db);

if($con)
{
	//echo connection succces
	?>
	<script>
		alert('connection succesfull');
	</script>
	<?php
}else{
	//echo no connection
	die("no connection" . mysqli_connect_error());
}
?>
