<?php
include('connect.php');
$sql = "SELECT * FROM reservations";
$query = mysqli_query($con, $sql);
$testEvents = mysqli_fetch_all($query, MYSQLI_ASSOC);

// function eventHour($hour)
// {

//     $queryDate = $hour;

//     $fullDate = new DateTime($queryDate);

//     // $date = $fullDate->format('Y-m-d');
//     $time = $fullDate->format('H:i:s');

//     return $time;
// }
// function eventDate($date)
// {
//     $queryDate = $date;

//     $fullDate = new DateTime($queryDate);

//     $date = $fullDate->format('Y-m-d');
//     // $time = $fullDate->format('H:i:s');

//     return $date;
// }

// function checkEvents($testEvents)
// {

//     foreach ($testEvents as $start) {

//         return ($start);
//         echo '<br>';
//     }
// }
