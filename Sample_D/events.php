<?php
include_once("header.php");
$q = "select * from event_details";
$result = mysqli_query($con, $q);
?>
<br>
<div class="container">
    <div class="row">

        <?php
        while ($a = mysqli_fetch_array($result)) {
        ?>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="container">
                    <h2><?php echo $a[1]; ?></php>
                    </h2>
                    <p><?php echo $a[2]; ?></p>
                    <div class="card">
                        <img class="card-img-top" src="images/events/<?php echo $a[6]; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">

                            <a href="view_event_details.php?event_id=<?php echo $a[0]; ?>">
                                <input type="button" value="See Details">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>

<br>

<?php
include_once("footer.php");
?>