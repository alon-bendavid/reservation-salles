<?php
//conect into database in plesk
// $con = mysqli_connect("localhost", "book", "laplateforme", "ben-david-alon_livreor");
// if (!$con = mysqli_connect("localhost", "book", "laplateforme", "ben-david-alon_livreor")) {
//     die("failed to connect!");
// }


//connect to database in development
$con = mysqli_connect("localhost", "root", "", "reservationsalles");

if (!$con = mysqli_connect("localhost", "root", "", "reservationsalles")) {
    die("failed to connect!");
}
