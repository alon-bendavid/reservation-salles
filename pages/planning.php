<?php
include('../includes/connect.php');
include('header.php');

$new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
echo $new_date;



?>


<body>
    <?php

    if (!isset($_SESSION['user'])) {
        echo "You have to be connected in order to write a comment.";
    }
    //create the query 
    $result = mysqli_query($con, "SELECT * FROM reservations ");
    //echo the table with comments including user infomation
    echo "<table class='post' >
<tr>
<th>Date</th>
<th class='date'>From user</th>
<th class='comment'>Comment</th>

</tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td class='date'>"   . $row['date'] . "</td>";
        echo "<td >" . '<img src="..\media\profile.png" alt="">' . $row['id_utilisateur'] . "</td>";


        echo "<td>" . $row['commentaire'] . "</td>";



        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>




</body>

</html>