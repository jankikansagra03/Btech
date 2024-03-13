<?php
include_once("header.php");
?>
<br>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slider/65f00ed23867caria-slider.webp" alt="Los Angeles" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="images/slider/65f0110d1678enirf-ranking-slider.webp" alt="Chicago" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="images/slider/65f0110d1678enirf-ranking-slider.webp" alt="New York" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="images/slider/65f0111287bedswacch award.webp" alt="New York" class="img-fluid">
        </div>
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
