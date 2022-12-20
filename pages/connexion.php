<?php
// session_start();
// include('header.php');
include('header.php');
include('../includes/connect.php');


if (mysqli_connect_errno()) {
    die('conecnection error' . mysqli_connect_error());
}
if (isset($_SESSION['message'])) {
    echo "<p class='message'>account successfully created!</p>";
}
if (isset($_POST['loginSub'])) {
    // echo "it works";
    $username = $_POST['loginUsr'];
    $password = $_POST['loginPwd'];

    $sql = "SELECT * FROM utilisateurs WHERE login='$username'";
    $query = mysqli_query($con, $sql);
    $printUser = mysqli_fetch_array($query);
    if (!$printUser == null) {
        $hashed_password = "SELECT password FROM utilisateurs WHERE login='$username'";

        $rquest = mysqli_query($con, $hashed_password);
        $hash = mysqli_fetch_array($rquest);
        // $hash = $con->query($hashed_password);
        // var_dump($hash);
        // echo $hash[0];

        if (password_verify($password, $hash[0])) {
            // if ($password == $printUser[2]) {
            echo "Welcome $printUser[1] You are now logged in";
            $_SESSION['user'] = $printUser;
            header('Location: ' . 'index.php');
        } else {
            echo "<p class='error'>Password is worng, please try again</p>";
            // echo $hashed_password;
            // var_dump($hash);
        }
    } else {
        echo "<p class='error'>No user found with that name</p>";
    }
}

if (isset($_SESSION['message'])) {
    usleep(1000);
    session_destroy();
    // session_start();
}
$con->close();

?>

<body>

    <div class="login-form">

        <h2>Sign in!</h2>
        <form action="connexion.php" method="post">
            <input type="text" placeholder="username" name="loginUsr"><br required>

            <input type="password" placeholder="password" name="loginPwd" required><br>

            <button type="submit" name="loginSub">
                <h2 class="sign">Sign in</h2>
            </button>

        </form>
        <h3 class="small_link"><a href="inscription.php">
                Not a member yet? <strong>Sign Up!</strong>


    </div>

</body>

</html>