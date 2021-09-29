<?php

//print_r($_GET);

if (isset($_REQUEST['submit'])) {
	$name = $_REQUEST['myname'];
	if ($name == "") {
		echo "null value...";
	} else {
		echo $name;
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Task Email</title>
</head>

<body>
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="email" name="myname" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>

</html>