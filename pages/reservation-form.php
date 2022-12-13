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

    <div class="login-form">
        <h1>Reservation form</h1>
        <?php echo "User: " . $_SESSION['user'][1]; ?>
        <form action="" method="post">
            Start hour: <select id="startHour" name="startHour">
                <?php for ($i = 8; $i + 1 < 20; $i++) {  ?>
                    <option value="volvo"><?php echo $i . "H" ?></option>
                <?php } ?>
            </select>
            Finish hour: <select id="startHour" name="startHour">
                <?php for ($x = 9; $x + 1 < 21; $x++) {  ?>
                    <option value='$i'><?php echo $x . "H" ?></option>
                <?php } ?><br>

            </select>
            <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
            <br />

            description:
            <textarea name="description" id="" cols="30" rows="5" required></textarea><br>

            <button class="sign" type="submit" name="subComment">Send</button>


        </form>
    </div>


</body>

</html>