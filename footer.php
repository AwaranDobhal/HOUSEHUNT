<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css"> 
</head>
<body>
    <div class="footer">
        <div class="page-container footer-container">
            <div class="footer-cities">
                <?php
                $cities = [
                    "Dehradun" => "House in Dehradun",
                    "Srinagar" => "House in Srinagar",
                    "Mussoorie" => "House in Mussoorie",
                    "Tehri" => "House in Tehri"
                ];
                foreach ($cities as $city => $label) {
                    echo '<div class="footer-city">
                            <a href="property_list.php?city=' . urlencode($city) . '">
                                <i class="fa fa-home"></i>' . $label . '
                            </a>
                        </div>';
                }
                ?>
            </div>

            <div class="footer-links">
                <span>
                    <i class="fa fa-lightbulb"></i> Useful Links:
                    <a href="faq.php">FAQ</a> |
                    <a href="contact_us.php">Contact Us</a> |
                    <a href="terms.php">Terms</a>
                </span>
            </div>

            <div class="footer-social">
                <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="img/twitter.png" alt="Twitter"></a>
                <a href="#"><img src="img/linkedin.png" alt="LinkedIn"></a>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>

</body>
</html>