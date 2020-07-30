<?php

require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';


if(($_GET['action'] == 'delete') && isset($_GET['pid']))
		{
			$pid=base64_decode($_GET['pid']);
			echo $uid;
			$sql = "DELETE  FROM product WHERE Pid =$pid ";
			if(mysqli_query($conn,$sql))
			{
				echo 'Record deleted!';
				header("location: ../products.php?user=deleteSuccess");
			}
		}
?>
