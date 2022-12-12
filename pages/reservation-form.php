<?php
// session_start();

include('header.php');
include('../includes/connect.php');
date_default_timezone_set('europe/paris');
//fetch information
if (isset($_SESSION['user'])) {
}
if (isset($_POST['subComment'])) {
    $comment = $_POST['comment'];
    $usrId = $_POST['usrId'];
    $date = $_POST['date'];
    // echo $comment;
    // echo $usrId;
    // echo $date;
    //make query to check if username already exist
    $sql = "SELECT * FROM commentaires ";
    // $query = $con->query($sql);
    $query = mysqli_query($con, $sql);
    $comments = mysqli_fetch_array($query);
    // var_dump($query);
    // print_r($comments[2]);
    // var_dump($comments);
    //create the user and insert into databasse if username dosent exist





    //insert information into databse
    $sql = "INSERT INTO `commentaires`(`id`, `commentaire`, `id_utilisateur`, `date`) VALUES (null,'$comment','$usrId','$date')";
    $query = mysqli_query($con, $sql);
    echo "<p class='message'>Comment hes been sent!</p>";
}
$con->close();




?>


<body>
    <div>
        <div class="profil">
            <h1>Send a comment!</h1>
            <form action="" method="post">
                <textarea name="comment" id="" cols="30" rows="10" required></textarea>
                <input type="hidden" name="usrId" value="<?php echo $_SESSION['user'][1] ?>"><br>
                <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s') ?>"><br>

                <button class="sign" type="submit" name="subComment">Send</button>


            </form>
        </div>
    </div>
</body>

</html>