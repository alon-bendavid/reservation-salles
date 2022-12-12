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

        <div class="navbar" method="post">
            <a href="index.php">Home</a>
            <a href="livre-or.php">Livre d'or</a>


            <!--  <a href="connexion.php">Log In</a>  -->
            <!--  <a href="profile.php">Profile</a>  -->



            <?php
            if (isset($_SESSION['user'])) {
                echo " <a href='commentaire.php'> Write a comment</a> ";
                echo " <a href='profil.php'>Profil</a> ";
                echo " <a href='logout.php'> Logout</a> ";
            } else {
                echo " <a href='inscription.php'>Sign Up</a> ";
                echo " <a href='connexion.php'>Login</a> ";
            }
            // if (isset($_SESSION['user'])) {

            //     echo  '<li class="message"> Welcome <br>  ' . $_SESSION['user'][1] . '   ';
            // }
            ?>

            <table>

            </table>




        </div>


    </nav>

</header>