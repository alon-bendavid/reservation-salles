<?php
//conect into database in plesk
// $con = mysqli_connect("localhost", "reserveMeToday50", "laplateforme", "ben-david-alon_reservationsalles");
// if (!$con = mysqli_connect("localhost", "reserveMeToday50", "laplateforme", "ben-david-alon_reservationsalles")) {
//     die("failed to connect!");
// }


//connect to database in development
$con = mysqli_connect("localhost", "root", "", "reservationsalles");

if (!$con = mysqli_connect("localhost", "root", "", "reservationsalles")) {
    die("failed to connect!");
}
