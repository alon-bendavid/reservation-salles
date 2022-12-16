<?php
include('connect.php');
$sql = "SELECT * FROM reservations ";
$query = mysqli_query($con, $sql);
$events = mysqli_fetch_array($query);
$testEvents = mysqli_fetch_all($query);

function eventHour($hour)
{

    $queryDate = $hour;

    $fullDate = new DateTime($queryDate);

    // $date = $fullDate->format('Y-m-d');
    $time = $fullDate->format('H:i:s');

    return $time;
}
function eventDate($date)
{
    $queryDate = $date;

    $fullDate = new DateTime($queryDate);

    $date = $fullDate->format('Y-m-d');
    // $time = $fullDate->format('H:i:s');

    return $date;
}

function checkEvents($arg)
{

    foreach ($arg as $eve) {
        var_dump($eve);
        echo '<br>';
    }
}
