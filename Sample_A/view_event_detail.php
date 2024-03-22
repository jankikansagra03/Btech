<?php
include_once("guest_header.php");
$event_id = $_REQUEST['event_id'];

// echo $event_id;
$q = "select * from event_details where event_id=$event_id and status='Active'";
$result = mysqli_query($con, $q);
?>
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            while ($res = mysqli_fetch_array($result)) {

                $extra = explode(",", $res[7]);
            ?>
                <h3 style="text-decoration: underline;"> <?php echo $res[1]; ?></h3>
                <p><?php echo $res[2]; ?></p>
                <p>Event Date:: <?php echo $res[3]; ?></p>
                <p>Event Type:: <?php echo $res[4]; ?></p>
                <p>Event Place:: <?php echo $res[5]; ?></p>
                <div class=" row gy-10">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <img src="images/events/<?php echo $res[6]; ?>" alt="err" />
                    </div>
                    <?php

                    foreach ($extra as $e) {
                    ?>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <img src="images/events/<?php echo $e; ?>" alt="err" />
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>