<div class="footer" style="background: linear-gradient(90deg, #23395d 0%, #1e2a38 100%); color: #f5f5f5; padding: 40px 0 0 0; font-family: 'Segoe UI', Arial, sans-serif;">
    <div class="page-container footer-container" style="max-width: 1200px; margin: auto;">
        <div class="footer-cities" style="display: flex; justify-content: center; gap: 100px; flex-wrap: wrap;">
            <?php
            $cities = [
                "Dehradun" => "House in Dehradun",
                "Srinagar" => "House in Srinagar",
                "Mussoorie" => "House in Mussoorie",
                "Tehri" => "House in Tehri"
            ];
            foreach ($cities as $city => $label) {
                echo '<div class="footer-city" style="background: rgba(35,57,93,0.10); border-radius: 12px; padding: 18px 28px; box-shadow: 0 2px 8px rgba(30,42,56,0.10); transition: transform 0.2s;">
                        <a href="property_list.php?city='.urlencode($city).'" style="color: #f5f5f5; text-decoration: none; font-size: 1.1em; font-weight: 500;">
                            <i class="fa fa-home" style="margin-right:8px;"></i>'.$label.'
                        </a>
                    </div>';
            }
            ?>
        </div>
        <div style="text-align:center; margin-top:40px; font-size: 1em; opacity: 0.90;">
            <span style="display:inline-block; background:rgba(35,57,93,0.15); padding:8px 20px; border-radius:8px;">
            <i class="fa fa-lightbulb" style="color:#ffc107;"></i> Useful Links: 
            <a href="faq.php" style="color:#f5f5f5; text-decoration:underline; margin:0 8px;">FAQ</a> | 
            <a href="contact_us.php" style="color:#f5f5f5; text-decoration:underline; margin:0 8px;">Contact Us</a> | 
            <a href="terms.php" style="color:#f5f5f5; text-decoration:underline; margin:0 8px;">Terms</a>
            </span>
        </div>
        <div style="text-align:center; margin-top:10px;">
            <a href="#" style="color:#f5f5f5; margin: 0 10px; display: inline-flex; align-items: center; gap: 6px;">
                <img src="img/facebook.png" style="height:50px; width:50px;">
            </a>
            <a href="#" style="color:#f5f5f5; margin: 0 10px; display: inline-flex; align-items: center; gap: 6px;">
                <img src="img/twitter.png" style="height:50px; width:50px;">
            </a>
            <a href="#" style="color:#f5f5f5; margin: 0 10px; display: inline-flex; align-items: center; gap: 6px;">
                <img src="img/linkedin.png" style="height:50px; width:50px;">
            </a>
        </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
