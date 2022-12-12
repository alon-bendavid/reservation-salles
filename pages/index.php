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
            <p class="viedo_text"><?php echo '<strong>  ' . $_SESSION['user'][1] . '</strong> ' ?> Welcome to our <strong> Comment In a Bottle</strong> website, where you can share your thoughts and opinions with others. Our site is dedicated to providing a platform for people to post comments and engage in thoughtful discussions. Whether you have something to say about current events, personal experiences, or anything else, we invite you to join the conversation and share your voice. Thank you for visiting our site and we look forward to reading your comments.</p>

            <video class="video" autoplay loop muted src="..\media\video.mp4"></video>
        </div>
    </div>
</body>
<script>
    document.querySelector('video').playbackRate = 0.6;
</script>

</html>