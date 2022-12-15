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