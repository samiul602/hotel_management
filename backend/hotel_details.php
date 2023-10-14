<?php

include('db.php');

function fetchHotel($db, $hotelId)
{
    $query =  "SELECT *
    FROM hotels
    JOIN room ON hotels.id = room.hotel_id
    JOIN roomtype ON room.room_type_id = roomtype.id
    WHERE hotels.id = " . $hotelId;
   

    $results = mysqli_query($db, $query);
    $hotel = array(); // Initialize an array to store hotel data
    while ($row = mysqli_fetch_assoc($results)) {
        $hotel[] = $row; // Add each hotel to the $hotels array
      
    }
    
    return $hotel;
}
$hotelId = isset($_GET['hotel'])?$_GET['hotel']:null;
$hotel = null;
if($hotelId){
    $hotel = fetchHotel($db, $hotelId);
}


?>