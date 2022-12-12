<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live On Mars</title>
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<header>
    <nav>
        <ul>
            <img class="logoHeader" src="..\media\logo-01.png" alt="">
            <div class="navBar" method="post">
                <li> <a href="index.php">Home</a> </li>
                <li> <a href="livre-or.php">Livre d'or</a> </li>


                <!-- <li> <a href="connexion.php">Log In</a> </li> -->
                <!-- <li> <a href="profile.php">Profile</a> </li> -->



                <?php
                if (isset($_SESSION['user'])) {
                    echo "<li> <a href='commentaire.php'> Write a comment</a> </li>";
                    echo "<li> <a href='profil.php'>Profil</a> </li>";
                    echo "<li> <a href='logout.php'> Logout</a> </li>";
                } else {
                    echo "<li> <a href='inscription.php'>Sign Up</a> </li>";
                    echo "<li> <a href='connexion.php'>Login</a> </li>";
                }
                // if (isset($_SESSION['user'])) {

                //     echo  '<li class="message"> Welcome <br>  ' . $_SESSION['user'][1] . '   </li>';
                // }
                ?>

                <table>

                </table>




            </div>

        </ul>
    </nav>

</header>