<?php
include('backend/hotel.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="logo"><img src="images/logo.avif" width="300" height="120">
            </div>

            <div class="toolbar">
                <button class="btnhome"><a href="index.php">HOME</a></button>
                <button class="btndest"><a href="destination.php">DESTINATION</a></button>
                <button class="btnpackages"><a href="package.php">PACKAGES</a></button>
                <button class="btncontact"><a href="about.php">ABOUT</a></button>
            </div>
        </div>
        <div class="hotel-list">

            <?php
            foreach ($hotels as $hotel) {
                ?>
                <div class="hotel">
                    <h2><?php echo $hotel['name']; ?></h2>
                    <p><?php echo $hotel['address']; ?></p>
                    <p>Rating: <?php echo $hotel['rating']; ?></p>
                    <!-- Add more hotel details as needed -->
                </div>
                <?php

            }

            ?>
        </div>


    </div>

    </div>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3><img src="images/logo.avif" width="300" height="160"></h3>

            <p class="footer-links">
                <a href="homepage.php" class="link-1">Home</a>

                <a href="destination.php">Destination</a>

                <a href="packages.php">Packages</a>

                <a href="about.php">About</a>

            </p>

            <p class="footer-company-name">TourOn © 2023</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>&#128205;Location: <br>NSU Campus, B Block</span> Bashundhara, Dhaka</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+88 019191919</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:contact@touron.org">contact@touron.org</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                This is a developing website that will help improve our customer handling efficiency.
            </p>


        </div>

    </footer>
</body>

</html>