<?php
include('header.php');
include('../includes/connect.php');
// include('../includes/functions.php');
$id = $_GET['id'];

include('../includes/connect.php');
// Connect to the database

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the id of the reservation you are interested in
$reservation_id = 1;

// Prepare the SQL query
$sql = "SELECT  utilisateurs.login, reservations.titre, reservations.description, reservations.debut, reservations.fin
        FROM reservations
        JOIN utilisateurs ON utilisateurs.id = reservations.id_utilisateur
        WHERE reservations.id = $id";

// Execute the query and store the result
$result = mysqli_query($con, $sql);

// If the query returned a result, display the login (name) of the person who wrote the reservation
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo '<div class="details">';
    echo   '<h2>' . '<strong> Event creator is:</strong> ' . $row['login'] . '</h2>' . '<br>';
    echo   '<h2>' . '<strong> Event title is: </strong>' . $row['titre'] . '</h2>' . '<br>';
    echo   '<h2>' . ' <strong>Event description is: </strong>' . $row['description'] . '</h2>' . '<br>';
    echo   '<h2>' . '<strong> Event start at:</strong> ' . $row['debut'] . '</h2>' . '<br>';
    echo   '<h2>' . ' <strong>Event finish at:</strong> ' . $row['fin'] . '</h2>' . '<br>';
    echo '</div>';
} else {
    echo "No results found.";
}

// Close the connection
mysqli_close($con);
