<?php
include('connect.php');
$sql = "SELECT * FROM reservations";
$query = mysqli_query($con, $sql);
$testEvents = mysqli_fetch_all($query, MYSQLI_ASSOC);
