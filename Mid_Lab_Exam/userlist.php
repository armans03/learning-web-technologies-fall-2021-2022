<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>

<body>
	<table border="1" align="center">
		<tr>
			<td colspan="3">Users</td>
		</tr>
		<tr>
			<th>ID</th>
			<th></th>
			<th></th>
		</tr>
		<?php
		$myfile = fopen('user.txt', 'r');
		$counter = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
	
				echo '<tr>
					<td>' . ++$counter . '</td>
					<td>' . $user[0] . '</td>
					<td>' . $user[1] . '</td>
					<td>' . $user[2] . '</td>
					<td>
						<a href="edit.php?id='.$counter.'"> EDIT</a> |
						<a href="delete.php?id='.$counter.'"> DELETE</a>
					</td>
				</tr>';
			}
		}
		fclose($myfile);
		?>
	</table>
</body>

</html>