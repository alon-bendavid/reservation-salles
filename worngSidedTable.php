    <table>

        <?php
        date_default_timezone_set('europe/paris');

        $start_date = date("Y-m-d ", strtotime("last Sunday"));
        var_dump($start_date);
        $end_date = date("Y-m-d ", strtotime("$start_date +6 day"));
        while (strtotime($start_date) <= strtotime($end_date)) {
            echo '<tr>';
        ?>

            <?php echo '<th>' . "$start_date" . '<th>';

            $start_date = date("Y-m-d ", strtotime("+1 days", strtotime($start_date)));
            ?>
            <?php
            $start = 8;
            $end = 19;
            for ($time = $start; $time <= $end; $time++) {
            ?>


                <?php
                echo '<td>' . date("H:00:00", mktime($time)) . '</td>';
                ?>



            <?php
            }
            ?>


            </tr>
        <?php } ?>



    </table>








    <!-- //////////////////////////// -->
    <table>
        <tr>
            <?php
            // var_dump($dates[4]);
            foreach ($dates as $date) {
            ?>

                <th> <?php print_r($date); ?></th>
        </tr>
        <?php
                for ($time = $start_time; $time <= $end_time; $time += 3600) { ?>
            <tr>
                <td> <?php echo date("H:00:00", $time); ?></td>
                <?php $dates[] = array(date("H:00:00", $time));
                    echo '<br>'; ?>
            <?php    } ?>
        <?php    } ?>

        // echo '<br>';
        }
        // var_dump($dates) . '<br>';
        // var_dump($dates[4])
            </tr>
    </table>
    <!-- ////////////////////////////////////// working nested loop to create table /////////////////////////////// -->

    <?php
    // Set start and end times for the table
    $start_time = strtotime('9:00am');
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
    </table>

    <?php

    // var_dump($dates[4]);
    foreach ($dates as $date) {
        echo $date->format('Y-m-d');
        // print_r($date);
        echo '<br>';
        for ($time = $start_time; $time <= $end_time; $time += 3600) {

            echo date("H:00:00", $time);
            // $dates[] = array(date("H:00:00", $time));
            echo '<br>';
        }
        // echo '<br>';
    }
    // var_dump($dates) . '<br>';
    // var_dump($dates[4])
    ?>

    </table>