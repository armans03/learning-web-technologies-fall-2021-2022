<?php 
	require_once('db.php');

	function getUserByName($username){
		$con = getConnection();
		$sql= "select * from users where username like '%{$username}%'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		if($user){
			return $user;
		}else{
			return false;
		}
	}

?>