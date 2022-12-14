<?php
include('../includes/connect.php');
include('header.php');

// $new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
// echo $new_date;



?>


<body>
    <?php
    // $today = date('d-m-y h:i:s');
    // echo $today . '<br>';

    // $day = date('3');
    // echo $day . '<br>';
    // $date =  date('d-m-y h:i:s'); // monday
    // echo date("Y-m-d", strtotime('monday this week', strtotime($date))), "\n";
    // $startDate = new \DateTime('2020-06-01');
    // $endDate = new \DateTime('2020-06-30');

    // $interval = \DateInterval::createFromDateString('1 day');
    // $period = new \DatePeriod($startDate, $interval, $endDate);

    // foreach ($period as $date) {
    //     echo $date->format(\DateTime::ATOM) . '<br>';
    // }
    // $startDate = new DateTime('20221214');
    // $endDate = new DateTime('20221225');

    // while ($startDate <= $endDate) {
    //     // your code here
    //     echo $startDate;

    //     // go to the next day
    //     $startDate->add(new DateInterval('P1D'));
    // }
    // date_default_timezone_set("europe/paris");
    // $today = date("Y/m/d h:i:s");
    // $week = strtotime($today);
    // $week = strtotime("+7 day", $week);
    // echo (date('Y/m/d h:i:s', $week))  . '<br>';
    // var_dump($today) . '<br>';
    // echo $date;
    // while (strtotime($today) <= strtotime("+7 day", $week)) {
    //     echo "day";
    // }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    // date_default_timezone_set('europe/paris');

    // $start_date = date("Y/m/d ");
    // $end_date = date("Y-m-d ", strtotime("$start_date +7 day"));


    // while (strtotime($start_date) <= strtotime($end_date)) {
    //     echo "$start_date" . '<br>';
    //     $start_date = date("Y-m-d ", strtotime("+1 days", strtotime($start_date)));

    //     $start = 8;
    //     $end = 19;
    //     for ($time = $start; $time <= $end; $time++) {
    //         echo date("H:00:00", mktime($time)) . '<br>';
    //     }
    // }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    // $start_hour = date("h:i:s ");
    // $end_hour = date("h:i:s ", strtotime("$start_hour +7 hours"));

    // echo $start_hour . '<br>';
    // echo $end_hour . '<br>';
    // while (strtotime($start_hour) <= strtotime($end_hour)) {
    //     echo "$start_hour" . '<br>';
    //     $start_hour = date("h:i:s ", strtotime("+1 hours", strtotime($start_hour)));
    // }

    ?>
    <table>

        <?php
        date_default_timezone_set('europe/paris');

        $start_date = date("Y/m/d ");
        $end_date = date("Y-m-d ", strtotime("$start_date +7 day"));
        while (strtotime($start_date) <= strtotime($end_date)) {
        ?>
            <tr>

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
</body>

</html>