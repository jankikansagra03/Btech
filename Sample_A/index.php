<?php
include_once("guest_header.php");
include_once("connection.php");
$q = "select* from slider_images";
$result=mysqli_query($con,$q);
$count = mysqli_num_rows($result);
?>
<br>
<div class="container-fluid">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <?php
            for ($j = 1; $j <= $count;$j++)
            {
                ?>
                <li data-target="#demo" data-slide-to="0" class="<?php if($j==1)
                {
                    echo "active";
                }  ?>"></li>
                <?php
            }
            ?>
            
            
        </ul>
        <div class="carousel-inner">
<?php
$i = 0;
while($r=mysqli_fetch_array($result))
{

?>
 <div class="carousel-item <?php if ($i == 0) {
           echo "active";
       }
    ?>" >
                <img src="images/slider/<?php echo $r[1];?>" alt="Los Angeles" class="img-fluid" />
            </div>

<?php
$i++;
}
?>
        <!-- The slideshow -->
       
           
           
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>