<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOUSEHUNT - Find Verified PGs & Hostels | HOUSEHUNT</title>
    <meta name="description" content="Discover verified Houses accommodations and Hostels across top cities. No brokerage, 24/7 support, and easy search for boys, girls, and unisex PGs.">
    <meta name="keywords" content="House, Hostel, Boys PG, Girls PG, Unisex PG, Verified Listings, No Brokerage, Househunt, Accommodation, Top Cities">

    <?php
    include "head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Where Every Stay Feels Like Home</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for Houses and Hostels" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <div class="mt-4">
            <a href="property_list.php" class="btn btn-outline-light">View All Properties</a>
            <a href="contact.php" class="btn btn-outline-info ml-2">Contact Us</a>
        </div>
        <div class="mt-4">
            <span class="badge badge-success">Verified Listings</span>
            <span class="badge badge-info">24/7 Support</span>
            <span class="badge badge-warning">No Brokerage</span>
        </div>
    </div>


    <div class="featured-cities-section container py-5">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-semibold text-dark lh-sm">
        <i class="fas fa-map-marker-alt me-2 text-primary"></i> Explore Featured Cities in Uttarakhand
        </h2>
        <p class="fs-5 mt-5 mb-5 enhanced-description">
            Discover verified accommodations in scenic and student-friendly cities across Uttarakhand. <br>
            <span class="highlight">Comfort</span>, <span class="highlight">safety</span>, and <span class="highlight">modern living</span> await.
        </p>
    </div>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-3 col-sm-6">
        <div class="card border-0 shadow-sm h-100 text-center hover-card">
            <div class="card-body">
            <img src="img/dehradun.png" alt="PGs in Dehradun" class="squared-circle mb-5" style="height:100px; width:100px; object-fit:cover;" loading="lazy">
            <h5 class="fw-bold text-primary">Dehradun</h5>
            <p class="text-muted small">The education hub nestled in the Doon Valley.</p>
            <a href="property_list.php?city=Dehradun" class="btn btn-outline-primary btn-sm mt-2">Browse Properties</a>
            </div>
        </div>
        </div>

        <div class="col-md-3 col-sm-6">
        <div class="card border-0 shadow-sm h-100 text-center hover-card">
            <div class="card-body">
            <img src="img/srinagar.png" alt="PGs in Srinagar Garhwal" class="squared-circle mb-5" style="height:100px; width:100px; object-fit:cover;" loading="lazy">
            <h5 class="fw-bold text-primary">Srinagar (Garhwal)</h5>
            <p class="text-muted small">A peaceful town by the Alaknanda, ideal for students.</p>
            <a href="property_list.php?city=Srinagar" class="btn btn-outline-primary btn-sm mt-2">Browse Properties</a>
            </div>
        </div>
        </div>

        <div class="col-md-3 col-sm-6">
        <div class="card border-0 shadow-sm h-100 text-center hover-card">
            <div class="card-body">
            <img src="img/mussoorie.png" alt="PGs in Mussoorie" class="squared-circle mb-5" style="height:100px; width:100px; object-fit:cover;" loading="lazy">
            <h5 class="fw-bold text-primary">Mussoorie</h5>
            <p class="text-muted small">The Queen of Hills with cozy hillside stays.</p>
            <a href="property_list.php?city=Mussoorie" class="btn btn-outline-primary btn-sm mt-2">Browse Properties</a>
            </div>
        </div>
        </div>

        <div class="col-md-3 col-sm-6">
        <div class="card border-0 shadow-sm h-100 text-center hover-card">
            <div class="card-body">
            <img src="img/tehri.png" alt="PGs in Tehri" class="squared-circle mb-5" style="height:100px; width:100px; object-fit:cover;" loading="lazy">
            <h5 class="fw-bold text-primary">Tehri</h5>
            <p class="text-muted small">Lakeside serenity with modern living spaces.</p>
            <a href="property_list.php?city=Tehri" class="btn btn-outline-primary btn-sm mt-2">Browse Properties</a>
            </div>
        </div>
        </div>
    </div>
    </div>

    <?php
    include "signup.php";
    include "login.php";
    include "footer.php";
    ?>
</body>
</html>
