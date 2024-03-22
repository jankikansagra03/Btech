<?php
include_once("guest_header.php");
$q = "select * from event_details where status='Active'";
$result = mysqli_query($con, $q);
?>
<br>
<div class="container">
    <div class="row gy-10">
        <?php
        while ($r = mysqli_fetch_array($result)) {
        ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <img class="card-img-top" src="images/events/<?php echo $r[6]; ?>" alt="Card image" class="img-fluid">
                    <div class=" card-body">
                        <h4 class="card-title"><?php echo $r[1]; ?></h4>
                        <p class="card-text"><?php echo $r[2]; ?></p>
                        <a href="view_event_detail.php?event_id=<?php echo $r[0]; ?>"> <input type="button" value="View Details" class="btn"></a>
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

http://localhost/btech/Sample_A/view_event_detail.php?event_id=8