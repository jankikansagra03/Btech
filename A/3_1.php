    <form action="3_1.php" method="post">
        Enter number: <input type="number" name="n" id="">
        <br>
        <input type="submit" value="Generate textboxes" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {
        $n = $_POST['n'];
    ?>
        <form action="3_1.php" method="post">
            <?php
            for ($i = 1; $i <= $n; $i++) {
            ?>
                Enter number <?php echo $i; ?>:: <input type="text" name="n1[]" id=""><br>
            <?php
            }
            ?>
            <input type="submit" value="Sort data" name="sort_btn">
        </form>
    <?php
    }

    if (isset($_POST['sort_btn'])) {
        $a = $_POST['n1'];
        $count = count($a);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($a[$i] > $a[$j]) {
                    $temp = $a[$i];
                    $a[$i] = $a[$j];
                    $a[$j] = $temp;
                }
            }
        }
        foreach ($a as $k) {
            echo $k . "<br>";
        }
    }
