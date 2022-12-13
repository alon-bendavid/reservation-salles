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
            <h1 class="viedo_text">Home page</h1>
            <p class="viedo_text">

                <?php if (isset($_SESSION['user'][1])) {  ?>
            <p> Welcome <?php echo  $_SESSION['user'][1]; ?> , you can reserve your room now!</p>


        <?php } else {
                    echo "welcome guest please connect";
                } ?>

        <video class="video" autoplay loop muted src="..\media\video.mp4"></video>
        </div>
    </div>
</body>
<script>
    document.querySelector('video').playbackRate = 0.6;
</script>

</html>