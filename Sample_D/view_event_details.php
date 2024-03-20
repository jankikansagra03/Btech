<?php
include_once("header.php");
$e_id = $_REQUEST['event_id'];
$q = "select * from event_details where event_id=$e_id";
$result = mysqli_query($con, $q);
while ($row = mysqli_fetch_array($result)) {
?>
    <div class="container">
        <div class="row gy-10">
            <div class="col-12">
                <h3><?php echo $row[1]; ?></h3>
                <p><?php echo $row[2]; ?></p>
                <p>Event Date: <?php echo $row[3]; ?></p>
                <p>Event Type: <?php echo $row[4]; ?></p>
                <p>Event Place: <?php echo $row[5]; ?></p>
                <h4>Images:</h4>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <img src="images/events/<?php echo $row[6]; ?>" class="img-fluid" />
                    </div>
                    <?php
                    $extras = explode(",", $row[7]);
                    foreach ($extras as $extra_image) { ?>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <img src="images/events/<?php echo $extra_image; ?>" class="img-fluid" />
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
}

?>

<?php
include_once("footer.php");
