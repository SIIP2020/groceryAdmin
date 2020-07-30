<?php

require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';


if(($_GET['action'] == 'delete') && isset($_GET['uid']))
		{
			$uid=base64_decode($_GET['uid']);
			echo $uid;
			$sql = "DELETE  FROM users WHERE uid =$uid ";
			if(mysqli_query($conn,$sql))
			{
				echo 'Record deleted!';
				header("location: ../customers.php?user=deleteSuccess");
			}
		}
?>
