<div class="header sticky-top bg-white shadow-sm">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="img/logo.png" alt="HouseHunt Logo" style="height:50px; width:100px; margin-right:16px;" />
                <span class="fw-bold fs-5" style="color:#068201; font-weight: bold;">HOUSEHUNT</span>
        </a>
        <span class="navbar-text d-none d-md-block ml-2" style="font-size:1em; color:#800080;">
            Best Way to Find Your Perfect PG/Hostel And Houses
        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                        <a class="nav-link btn px-4 py-2" style="background-color:#2980B9; color:#fff;" href="explore.php">
                            <i class="fas fa-search-location"></i> Explore
                        </a>
                </li>
                </li>
                    <a class="nav-link btn px-4 py-2" style="background-color:#34495E; color:#fff;" href="about.php">
                        <i class="fas fa-info-circle"></i> About
                    </a>
                </li>
                <?php
                //Check if user is logged in or not
                if (!isset($_SESSION["user_id"])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link btn px-4 py-2" style="background-color:#27AE60; color:#fff;" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user-plus"></i> Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link btn px-4 py-2" style="background-color:#8E44AD; color:#fff;" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                <?php
                } 
                
                else {
                ?>
                    <div class='nav-name font-weight-bold mr-2'>
                        Hi, <a href="./index.php" style="text-decoration: none; color: #007bff;"><?php echo $_SESSION["full_name"] ?></a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link btn px-4 py-2" style="background-color:#F39C12; color:#fff;" href="dashboard.php" title="Go to your dashboard">
                            <i class="fas fa-user"></i> Dashboard
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link btn px-4 py-2" style="background-color:#C0392B; color:#fff;" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</div>

<div id="loading"></div>
