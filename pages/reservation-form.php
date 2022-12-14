<?php
// session_start();

include('header.php');
include('../includes/connect.php');
date_default_timezone_set('europe/paris');
//fetch information
// if (isset($_SESSION['user'])) {
// }
// if (isset($_POST['subComment'])) {
//     $comment = $_POST['comment'];
//     $usrId = $_POST['usrId'];
//     $date = $_POST['date'];


//     $sql = "SELECT * FROM commentaires ";
//     $query = mysqli_query($con, $sql);
//     $comments = mysqli_fetch_array($query);






//     //insert information into databse
//     $sql = "INSERT INTO `commentaires`(`id`, `commentaire`, `id_utilisateur`, `date`) VALUES (null,'$comment','$usrId','$date')";
//     $query = mysqli_query($con, $sql);
//     echo "<p class='message'>Comment hes been sent!</p>";
// }
$con->close();


?>


<body>

    <div class="login-form">
        <h1>Reservation form</h1>
        <?php echo "User: " . $_SESSION['user'][1]; ?>
        <form action="" method="post">
            Title:<input type="text" name="title" required>


            Start time: <select name="startHour">
                <?php
                for ($i = 8; $i <= 18; $i++) {
                    echo '    <option value="' . $i . '">' . $i . ' H</option>';
                }
                ?>
            </select>
            finsh time: <select name="finishHour">
                <?php
                for ($x = 9; $x <= 19; $x++) {
                    echo '    <option value="' . $x . '">' . $x . ' H</option>';
                }
                ?>
            </select>
            <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
            <br />
            description:
            <textarea name="description" id="" cols="30" rows="5" required></textarea><br>

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
    ?>

</body>

</html>