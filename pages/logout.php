<?php
include('header.php');
// session_start();
session_unset();
session_destroy();
header('Location: ' . 'index.php');

?>

<body>
    <!-- <h1>You are now logged off!</h1> -->
</body>
<?php
// sleep(5);



?>

</html>