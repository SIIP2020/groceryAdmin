<!DOCTYPE html>
<html lang="en">

<head>
	
</head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
            <a class="navbar-brand logo-brand" href="index.php">In-Gro Supermarket</a>
			<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a href="http://In-Grolthemes.net/html-items/In-Gro_supermarket_demo/index.html" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
            <ul class="navbar-nav ml-auto mr-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>



                    <?php
                        if (isset($_SESSION['AId'])) {
                        echo'
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <ul class="dropdown-item admin-dropdown-item">
                            <a class="dropdown-item admin-dropdown-item" href="logout.php">Logout</a>
                            </ul>
                        </div>';
                        }

                         else{
                                header("Location: /groceryAdmin/login.php");
                                exit();
                             }

                    ?>


                    
                </li>
            </ul>
        </nav>
    </body>

</html>