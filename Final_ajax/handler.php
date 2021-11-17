<?php 

	//echo "response from server: ".$_REQUEST['name'];
$username =$_REQUEST['name'];
    require_once('usersModel.php');
    $status = getUserByName($username);
				
	    if($status){
	    	?>
			<table border="1" align="center">
				<tr>
					<th>ID</th>
					<th>USER NAME</th>
					<th>Password</th>
					<th>Email</th>
				</tr>
		      <tr>
				<td><?= $status['id'] ?></td>
				<td><?= $status['username'] ?></td>
				<td><?= $status['password'] ?></td>
				<td><?= $status['email'] ?></td>
		      </tr>
	        </table>
				<?php }else{
					 echo "invalid username";
				 } ?>

	


