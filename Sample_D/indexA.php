<?php
include_once("header.php");
$con = mysqli_connect("localhost", "root", "", "btech_e");
$q = "select * from slider_images";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result); ?>
<br>
<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <?php

        for ($j = 0; $j <= $count - 1; $j++) {
        ?>
            <li data-target="#demo" data-slide-to="<?php echo $j; ?>" class="
            <?php if ($j == 0) {
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
        while ($res = mysqli_fetch_array($result)) {
        ?>
            <div class="carousel-item <?php if ($i == 1) {
                                            echo "active";
                                        } ?>">
                <img src="images/slider/<?php echo $res[1]; ?>" alt="Los Angeles" class="img-fluid">
            </div>

        <?php
            $i++;
        }
        ?>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<br>
<?php
include_once("footer.php");
