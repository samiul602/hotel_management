<?php

include('db.php');

function fetchHotels($db)
{
    $query = "Select * from hotels";

    $results = mysqli_query($db, $query);
    $hotels = array(); // Initialize an array to store hotel data

    while ($row = mysqli_fetch_assoc($results)) {
        $hotels[] = $row; // Add each hotel to the $hotels array
    }

    return $hotels;
}

$hotels = fetchHotels($db);

?>