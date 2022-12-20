<?php
include('../includes/connect.php');
include('header.php');
include('../includes/functions.php');

// $new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
// echo $new_date;



?>


<body>

    <table>
        <?php
        // Set start and end times for the table
        $start_time = strtotime('8:00am');
        $end_time = strtotime('7:00pm');

        // Use current date as the starting day of the week
        $date = new DateTime();
        $monday = clone $date;
        $monday->modify('last sunday');

        // Create an array of dates for the week
        $dates = array();
        for ($i = 0; $i < 7; $i++) {
            $dates[] = clone $monday;
            $monday->modify('+1 day');
        }
        ?>
        <?php
        $event = false;
        ?>

        <table>
            <tr>
                <th>&nbsp;</th>
                <?php foreach ($dates as $day) {  ?>
                    <th><?php echo $day->format('l d-M Y'); ?></th>


                <?php }  ?>
            </tr>
            <?php
            // Loop through the hours
            for ($time = $start_time; $time <= $end_time; $time += 3600) {   ?>
                <tr>
                    <?php if (date("H:00", $time)) ?>
                    <th><?php echo  date("H:00", $time) . " H"; ?></th><?php
                                                                        ?>

                    <?php foreach ($dates as $day) {  ?>

                        <?php

                        $eventDate = $day->format('Y-m-d ') .  date("H:00:00", $time);

                        $hour = (int)date("H:00", $time);
                        $date = date($day->format('Y-m-d '));
                        $weekend = date($day->format('Y-m-saturday '));


                        $day_of_event = false;
                        $reserved = false;
                        foreach ($testEvents as $event) {
                            $db_start_hour = str_split($event['debut'], 10);
                            $db_finish_hour = str_split($event['fin'], 10);
                            $db_start_date = str_split($event['debut'], 10);
                            // $_GET = array();
                            // if (date($eventDate) == date($event['debut']) or date($eventDate) <= date($event['fin'])) { //01 half working

                            if (date($eventDate) >= date($event['debut']) && date($eventDate) < date($event['fin'])) { // condition to check if event exist
                                // $_GET['titre'] = $event['titre'];
                                // array_push($_GET['titre'], $event);
                                $reserved = true;
                                echo '  <td class="event"><a href="reservation.php">    ' . $event["titre"] . '   </a></td>';
                            }
                        } ?>
                        <?php if ($reserved) : ?>

                        <?php elseif (date($hour == 19)) : ?>
                            <td class="closed">closed</td>

                        <?php else : ?>
                            <td class="">Disponible</td>
                        <?php endif; ?>
                    <?php } ?>
                <?php } ?>
                </tr>

        </table>
        <!-- ////////////////////////////////////////// testing area //////////////////////////////////////// -->
        <?php


        // var_dump($testEvents);
        // echo '<br>';
        ?>
</body>
<!-- <?php var_dump((int)$event['debut']);
        $arr2 = str_split($event['debut'], 10);
        print_r((int)$db_start_date[1]);


        ?> -->
<!-- &nbsp; -->
<?php
// var_dump($_GET);
?>

</html>