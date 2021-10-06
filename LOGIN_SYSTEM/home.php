<?php 
	session_start();
	if(isset($_SESSION['flag'])){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
<center>
	<h1>Welcome Home!</h1>
	<a href="logout.php"> logout</a>
</center>
</body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>