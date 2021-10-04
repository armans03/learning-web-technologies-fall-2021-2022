<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		$email = $_REQUEST['myemail'];
		$uname = $_REQUEST['myuname'];
		if($name == "" && $email == "" && $uname == ""){
			echo "null value...";
		}else{
			'location: login.html';
		}	
	}
?>