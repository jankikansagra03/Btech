<?php
include_once("guest_header.php");
$q = "select * from image_slider where status='Active'";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result);
?>
<br>
<div class="container-fluid">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <?php
            for ($i = 0; $i < $count; $i++) {
            ?>
                <li data-target="#demo" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) {
                                                                                    echo "active";
                                                                                } ?>"></li>
            <?php
            }

            ?>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="carousel-item <?php if ($i == 1) {
                                                echo "active";
                                            } ?>">
                    <img src="images/slider/<?php echo $row[1]; ?>" alt="Los Angeles" class="img-fluid">
                </div>
            <?php
                $i++;
            }
            ?>

        </div>

        <!-- Left and right controls -->
        <a class=" carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</div>

<?php
include_once("footer.php")
?>