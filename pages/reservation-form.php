<?php
// session_start();

include('header.php');
include('../includes/connect.php');
// date_default_timezone_set('europe/paris');

if (isset($_POST['subComment'])) {
    $title = $_POST['title'];
    $startHour = $_POST['startHour'];
    $finishHour = $_POST['finishHour'];
    $date = $_POST['dateFrom'];
    $description = $_POST['description'];
    $userName = $_SESSION['user'][1];

    // $userIdQuery = "SELECT id FROM `utilisateurs` WHERE login='$userName'";
    $userIdQuery = "SELECT id FROM utilisateurs WHERE login='$userName'";
    $request = mysqli_query($con, $userIdQuery);
    $userId = mysqli_fetch_array($request);

    $start_time = sprintf("%s %02d:%02d:00", $date,  $startHour, 00);
    $finish_time = sprintf("%s %02d:%02d:00", $date,  $finishHour, 00);

    $title_char =  Htmlspecialchars($title, ENT_QUOTES);
    $description_char =  Htmlspecialchars($description, ENT_QUOTES);
    // echo $start_time . '<br>';
    // echo $finish_time;


    $sql = "INSERT INTO `reservations`(`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES (null,' $title_char',' $description_char','$start_time','$finish_time','$userId[0]')";
    $query = mysqli_query($con, $sql);
    echo "<h2 class='message'>Reservation has been signed </h2>";
}


?>


<body>

    <div class="login-form">
        <h1>Reservation form</h1>
        <h3><?php echo "User: " . $_SESSION['user'][1]; ?></h3>
        <form action="" method="post">
            <h3>Title:</h3><input type="text" name="title">


            <h3> Start time:</h3> <select name="startHour">
                <?php
                for ($i = 8; $i <= 18; $i++) {

                    echo '    <option value="' . $i . '">' . $i . ' H</option>';
                }
                ?>
            </select>
            <h3> finsh time: </h3><select name="finishHour">
                <?php
                for ($x = 9; $x <= 19; $x++) {
                    echo '    <option value="' . $x . '">' . $x . ' H</option>';
                }
                ?>
            </select>
            <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
            <br />
            <h3> description:</h3>
            <textarea name="description" id="" cols="30" rows="5"></textarea><br>

            <button class="sign" type="submit" name="subComment">Send</button>




        </form>


    </div>
    <?php
    if (isset($_POST['subComment'])) {
        // cast to integer to avoid malicious values
        echo $_POST['title'] . '<br>';
        echo $_POST['startHour'] . '<br>';
        echo $_POST['finishHour'] . '<br>';
        echo $_POST['dateFrom'] . '<br>';
        echo $_POST['description'] . '<br>';
    }



    $con->close();



    ?>

</body>

</html>