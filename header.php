<?php
    //session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseHunt Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/header.css"> 
</head>
<body>

    <div class="header sticky-top bg-white shadow-sm">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand d-flex align-items-center" href="Home.php">
                <img src="img/logo.png" alt="HouseHunt Logo" class="logo-img" />
                <span class="brand-text">HOUSEHUNT</span>
            </a>
            <span class="navbar-text tagline d-none d-md-block">
                Best Way to Find Your Perfect PG/Hostel And Houses
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav align-items-center">
                    <?php if (!isset($_SESSION["user_id"])) { ?>
                        <li class="nav-item">
                            <a class="nav-link btn signup-btn" href="#" data-toggle="modal" data-target="#signup-modal">
                                <i class="fas fa-user-plus"></i> Signup
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a class="nav-link btn login-btn" href="#" data-toggle="modal" data-target="#login-modal">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                    <?php } else { ?>
                        <div class="nav-name">
                            Hi, <a href="./Home.php"><?php echo $_SESSION["full_name"] ?></a>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link btn dashboard-btn" href="dashboard.php" title="Go to your dashboard">
                                <i class="fas fa-user"></i> Dashboard
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a class="nav-link btn logout-btn" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>

    <div id="loading"></div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>