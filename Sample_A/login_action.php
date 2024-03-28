<?php
session_start();
include_once("connection.php");

if (isset($_POST['lgn_btn'])) {
    $em = $_POST['email'];
    $pwd = $_POST['pswd'];

    $q = "select * from registration where email='$em' and password='$pwd'";
    $result = mysqli_query($con, $q);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        while ($a = mysqli_fetch_array($result)) {
            $status = $a[8];
            if ($status == "Active") {
                $role = $a[7];
                if ($role == "Admin") {
                    $_SESSION['admin_uname'] = $em;
?>
                    <script>
                        window.location.href = "admin_dashboard.php";
                    </script>
                <?php
                } else {
                    $_SESSION['user_uname'] = $em;
                ?>
                    <script>
                        window.location.href = "user_dashboard.php";
                    </script>
                <?php
                }
            } else {
                $_SESSION['error'] = "Account is not activated. Kindly activate your account by clicking on the activation link sent to your email address.";
                ?>
                <script>
                    window.location.href = "login.php";
                </script>
        <?php
            }
        }
    } else {
        $_SESSION['error'] = "Incorrect username or password.";
        ?>
        <script>
            window.location.href = "login.php";
        </script>
<?php
    }
}
