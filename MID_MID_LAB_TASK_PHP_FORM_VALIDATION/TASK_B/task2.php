<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Task Email</title>
</head>

<body>
	<form method="get" action="#">
		<fieldset>
			<legend>Email</legend>
			<input type="email" name="myemail" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br>
               <?php

                if (isset($_REQUEST['submit'])) {
	            $email = $_REQUEST['myemail'];
	            if ($email == "") {
		        echo "Field Can't be Empty...!";
	            } else {
        		echo $email." Submitted";
	               }
                }

                ?>

		</fieldset>
	</form>
</body>

</html>