<?php

require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';


if(($_GET['action'] == 'approve') && isset($_GET['reqid']))
		{
			$reqid=base64_decode($_GET['reqid']);
			$verified="verified";
			
			$sql = "UPDATE shopreq SET verified=? where req_id=$reqid ";
                                     
             $stmt = mysqli_stmt_init($conn);
                    
            if (!mysqli_stmt_prepare($stmt, $sql))
             {
                header("Location: ../Shop_reqest.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s", $verified );
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
 
                header("Location: ../Shop_reqest.php?cat_id=".base64_encode($reqid));
                exit();
            }
        
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
		}
	else{
		if(($_GET['action'] == 'delete') && isset($_GET['reqid']))
		{
			$reqid=base64_decode($_GET['reqid']);
			$verified="not verified";
			
			$sql = "UPDATE shopreq SET verified=? where req_id=$reqid ";
                                     
             $stmt = mysqli_stmt_init($conn);
                    
            if (!mysqli_stmt_prepare($stmt, $sql))
             {
                header("Location: ../Shop_reqest.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s", $verified );
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
 
                header("Location: ../Shop_reqest.php?cat_id=".base64_encode($reqid));
                exit();
            }
        
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
		}

	}
?>
