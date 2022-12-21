<?php
// session_start();
include('header.php');

?>

<body>
    <div>
        <div class="home">
            <?php
            // echo "<p class='message'> welcome " . $_SESSION['user'][1] . " you are now logged in! </p>";

            ?>
            <h1 class="viedo_text">Reservation site</h1>
            <p class="viedo_text">

                <?php if (isset($_SESSION['user'][1])) {  ?>
            <h2> Welcome <?php echo  $_SESSION['user'][1]; ?> , you can make a reserve now!</h2>


        <?php } else {
                    echo " <h3 >Welcome guest, connect to make a reservation</h3>";
                } ?>

        <video class="video" autoplay loop muted src="..\media\video.mp4"></video>
        </div>
    </div>
</body>

</html>