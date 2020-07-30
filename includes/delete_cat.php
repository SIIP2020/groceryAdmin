<?php

require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';


if(($_GET['action'] == 'delete') && isset($_GET['cat_id']))
		{
			$cid=base64_decode($_GET['cat_id']);
			echo $uid;
			$sql = "DELETE  FROM category WHERE cat_id =$cid ";
			if(mysqli_query($conn,$sql))
			{
				echo 'Record deleted!';
				header("location: ../category.php?user=deleteSuccess");
			}
		}
?>
