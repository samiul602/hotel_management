<?php
include('../backend/hotel_details.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotel Details</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="logo"><img src="../images/logo.avif" width="300" height="120">
            </div>

            <div class="toolbar">
                <button class="btnhome"><a href="../index.php">HOME</a></button>
                <button class="btndest"><a href="destination.php">DESTINATION</a></button>
                <button class="btnpackages"><a href="package.php">PACKAGES</a></button>
                <button class="btncontact"><a href="about.php">ABOUT</a></button>
            </div>
        </div>
        <div class="room-list">

            <?php
            foreach ($hotel as $hotelRoom) {
                ?>
                <div class="room">
                    <h2><?php echo $hotelRoom['name']; ?></h2>
                    <p><?php echo $hotelRoom['floor_level']; ?></p>
                    <p><?php echo $hotelRoom['description']; ?></p>
                    <p><?php echo $hotelRoom['space']; ?></p>
                    <p><?php echo $hotelRoom['room_number']; ?></p>
                    <p><?php echo $hotelRoom['capacity']; ?></p>
                   </div>
                <?php

            }

            ?>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>