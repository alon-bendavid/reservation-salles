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
            Title:<input type="text" name="title">
            Start hour: <select id="startHour" name="startHour">
                <?php for ($i = 8; $i + 1 < 20; $i++) {  ?>
                    <?php echo '<option value="' . $i . '"> ' . $i . ' H</option>'   ?>
                <?php } ?>
            </select>
            Finish hour: <select id="startHour" name="startHour">
                <?php for ($x = 9; $x + 1 < 21; $x++) {  ?>
                    <option value=""><?php echo $x . "H" ?></option>
                <?php } ?><br>

            </select>
            <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
            <br />

            description:
            <textarea name="description" id="" cols="30" rows="5"></textarea><br>

            <button class="sign" type="submit" name="subComment">Send</button>


        </form>
        <?php if (isset($_POST['subComment'])) {

            echo $_POST['startHour'];
        }
        echo "opa";
        ?>
        <form method="POST">
            <select name="dropdown">
                <?php
                for ($x = 1; $x <= 12; $x++) {
                    echo '    <option value="' . $x . '">' . $x . '</option>';
                }
                ?>
            </select>
            <input type="submit" value="Submit">

        </form>

    </div>
    <?php
    if (isset($_POST['dropdown'])) {
        // cast to integer to avoid malicious values
        $dropdown = (int)$_POST['dropdown'];
        echo $dropdown;
    }
    ?>

</body>

</html>