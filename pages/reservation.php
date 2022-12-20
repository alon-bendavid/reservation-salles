<?php
include('header.php');
include('../includes/connect.php');
// include('../includes/functions.php');
$id = $_GET['id'];
$sql = "SELECT * FROM reservations where id=$id";
$query = mysqli_query($con, $sql);
$testEvents = mysqli_fetch_all($query, MYSQLI_ASSOC);
// echo $_GET['id'];
// print_r($testEvents);

// $request = "SELECT login FROM utilisateurs where id=$id";
// SELECT login FROM utilisateurs JOIN reservations ON utilisateurs.id = reservations.id_utilisateur WHERE reservations.id = 11
// $request = "SELECT login
// FROM utilisateurs
// JOIN reservations ON login.id = reservations.id_utilisateur
// WHERE reservations.id = $id;";
// $query2 = mysqli_query($con, $request);
// $user = mysqli_fetch_array($query2);

?>
<table>
    <?php
    foreach ($testEvents as $info) :
    ?>
        <div>

            <!-- <h2><?php var_dump($user); ?></h2> -->

            <h2><?php print_r('Title: ' . $info['titre']); ?></h2>
            <h2><?php print_r('Description: ' . $info['description']); ?></h2>
            <h2><?php print_r('Start time: ' . $info['debut']); ?></h2>
            <h2><?php print_r('Finish time: ' . $info['fin']); ?></h2>



        </div>

    <?php endforeach; ?>


</table>

</html>