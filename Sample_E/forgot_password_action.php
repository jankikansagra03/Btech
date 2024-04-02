<?php
include_once("guest_header.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');

if (isset($_POST['btn'])) {
    $em = $_POST['email'];
    $q2 = "select * from registration where email='$em'";
    $result = mysqli_query($con, $q2);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $q1 = "select * from token where Email='$em'";
        $countem = mysqli_num_rows(mysqli_query($con, $q1));
        if ($countem == 1) {
            setcookie('error', "OTP for resetting password is sent to your registered email address. New OTP will be generated if old OTP expires", time() + 2, "/");
?>
            <script>
                window.location.href = "Forgot_password_otp.php";
            </script>
            <?php
        } else {
            date_default_timezone_set("Asia/Kolkata");
            $s_time = date("Y-m-d G:i:s");

            $token = hash('sha512', $s_time);
            $otp = mt_rand(100000, 999999);
            $ins_token = "INSERT INTO token VALUES ('','$em','$s_time','$token',$otp)";
            // echo "$ins_token";
            if (mysqli_query($con, $ins_token)) {

                $mail = new PHPMailer();
                try {

                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'jankikansagra12@gmail.com';
                    $mail->Password = 'your password';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
                    // $mail->SMTPDebug = 2;
                    $_SESSION['forgot_em'] = $em;
                    $_SESSION['forgot_token'] = $token;
                    $mail->setFrom('jankikansagra12@gmail.com', 'Janki Kansagra');
                    while ($row = mysqli_fetch_array($result)) {
                        $mail->addAddress($em, $row[0]);
                    }

                    $mail->isHTML(true);
                    $mail->Subject = 'Password Reset';
                    $mail->Body = 'Your otp to reset your account password is ' . $otp;

                    // Send the email
                    if ($mail->send()) {
                        setcookie("success", "OTP to reset your password is sent to your registered email address", time() + 2, "/");
            ?>
                        <script>
                            //alert("hello")
                            window.location.href = "Forgot_password_otp.php";
                        </script>
                    <?php
                    } else {
                        setcookie("error", "Error in sending OTP. Please try again later.", time() + 2, "/");
                    ?>
                        <script>
                            window.location.href = "Forgot_password.php";
                        </script>
                <?php
                    }
                } catch (Exception $e) {
                    echo "Email sending failed. Error: {$mail->ErrorInfo}";
                }
            } else {
                setcookie('error', "Email is not registered", time() + 2, "/");
                ?>
                <script>
                    window.location.href = "Forgot_password.php";
                </script>
<?php
            }
        }
    }
}
