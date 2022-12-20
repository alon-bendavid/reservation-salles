<?php
// session_start();

include('header.php');
include('../includes/connect.php');







//fetch information
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];


    //secure password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //make query to check if username already exist
    $sql = "SELECT * FROM utilisateurs WHERE login='$username'";
    // $query = $con->query($sql);
    $query = mysqli_query($con, $sql);
    $printUser = mysqli_fetch_array($query);
    // var_dump($query);
    // print_r($printUser[2]);
    // var_dump($printUser);
    //create the user and insert into databasse if username dosent exist
    if ($printUser == null) {
        if ($password == $repass) {

            // echo "Acount hes successfully created!";
            //insert information into databse
            $sql = "INSERT INTO `utilisateurs`(`id`, `login`, `password`) VALUES (null,'$username','$hashed_password')";
            $query = mysqli_query($con, $sql);
            $_SESSION['message'] = 'Account successfully created!';
            header('Location: ' . 'connexion.php');
        } elseif ($password != $repass) {
            echo "<p class='error_2'>Password doesnt match, please retype password</p>";
        }
    } else {
        echo "<p class='error_2'>Username already taken, please choose another username</p>";
    }
}


$con->close();

?>


<body>
    <div>
        <div>
            <h1>sign up page</h1>
            <form class="signup-form" action="inscription.php" method="post">
                <input type="text" placeholder="username" name="username"><br required>
                <input type="password" placeholder="password" name="password" required><br>
                <input type="password" placeholder="retype password" name="repass" required><br>
                <button type="submit" name="submit">
                    <h2 class="sign">Sign Up!</h2>
                </button>


            </form>
        </div>
        <!-- </div> -->
</body>

</html>