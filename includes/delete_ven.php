<?php

require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';


if(($_GET['action'] == 'delete') && isset($_GET['vid']))
		{
			$vid=base64_decode($_GET['vid']);
			echo $uid;
			$sql = "DELETE  FROM vendor WHERE vid =$vid ";
			if(mysqli_query($conn,$sql))
			{
				echo 'Record deleted!';
				header("location: ../vendors.php?user=deleteSuccess");
			}
		}
?>
