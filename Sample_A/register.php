<?php
include_once("guest_header.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');

?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Registration Form</h2>
            <form action="register.php" method="post" enctype="multipart/form-data" id="form1">
                <div class="form-group">
                    <label for="fn1"><b>Fullname:</b></label>
                    <input type="text" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                    <span id="fn_err"></span>
                </div>
                <div class="form-group">
                    <label for="email1"><b>Email:</b></label>
                    <input type="email" class="form-control" id="email1" placeholder="Enter email" name="email" onblur="check_email(document.getElementById('email1').value)">
                    <span id="em_err"></span>
                </div>
                <div class="form-group">
                    <label for="pwd"><b>Password:</b></label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    <span id="pswd_err"></span>
                </div>
                <div class="form-group">
                    <label for="repwd"><b>Confirm Password: </b></label>
                    <input type="password" class="form-control" id="repwd" placeholder="Enter password" name="repswd">
                    <span id="repswd_err"></span>
                </div>
                <div class="form-group">
                    <label for="gen1"><b>Select Gender:</b></label>
                    <br>
                    <input type="radio" id="gen1" name="gen" value="Male"> Male
                    <input type="radio" id="" name="gen" value="Female"> Female
                    <span id="gen_err"></span>
                </div>
                <div class="form-group">
                    <label for="mobile1"><b>Mobile Number: </b></label>
                    <input type="number" class="form-control" id="mobile1" placeholder="1234567890" name="mobile">
                    <span id="mobile_err"></span>
                </div>
                <div class="form-group">
                    <label for="file1"><b>Select Profile Picture:</b></label>
                    <input type="file" class="form-control" id="file1" name="pic">
                    <span id="file1_err"></span>
                </div>
                <input type="submit" class="btn" value="Submit" name="btn">
            </form>
        </div>

    </div>


</div>
<br>
<?php
include_once("footer.php");
?>

<?php
if (isset($_POST['btn'])) {
    $fn = $_POST['fn'];
    $em = $_POST['email'];
    $pwd = $_POST['pswd'];
    $gen = $_POST['gen'];
    $mobile = $_POST['mobile'];
    $pic = $_FILES['pic']['name'];
    $token = uniqid() . uniqid();
    $pic_name = uniqid() . $pic;

    $q = "INSERT INTO `registration`(`fullname`, `email`, `gender`, `mobile`, `password`, `profile_pic`,`token`) VALUES ('$fn','$em','$gen',$mobile,'$pwd','$pic_name','$token')";

    if (mysqli_query($con, $q)) {
        if (!is_dir("images/profile_pictures")) {
            mkdir("images/profile_pictures");
        }
        move_uploaded_file($_FILES['pic']['tmp_name'], "images/profile_pictures/" . $pic_name);
        $mail = new PHPMailer();
        try {
            // Server settings
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'jankikansagra12@gmail.com'; // SMTP username
            $mail->Password = ''; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465; // TCP port to connect to
            // $mail->SMTPDebug = 2;

            // Recipients
            $mail->setFrom('jankikansagra12@gmail.com', 'Janki Kansagra'); // Sender's email address and name
            $mail->addAddress($em, $fn); // Recipient's email address and name

            // Attachments
            //$mail->addAttachment('/path/to/attachment/file.pdf', 'Attachment.pdf'); // Path to the attachment and optional filename

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Account Verification';
            $mail->Body    = 'Congratulations! ' . $fn . ' Your account has been created successfully. This email is for your account verification. <br> Kindly click on the link below to verify your account. You will be able to login into your account only after account verification. <br>
            <a href="http://localhost/btech/Sample_A/verify_account.php?em=' . $em . '&token=' . $token . '">Click here to verify your account</a>';

            // Send the email
            if ($mail->send()) {
                setcookie("success", "Registration Successfull. Activation mail is sent to your registered email account. Kindly activate your account to login.", time() + 2, "/");
?>
                <script>
                    window.location.href = "login.php";
                </script>
            <?php
            } else {
                setcookie("error", "Error in sending mail. Please try again later.", time() + 2, "/");
            ?>
                <script>
                    window.location.href = "register.php";
                </script>
        <?php
            }
        } catch (Exception $e) {
            echo "Email sending failed. Error: {$mail->ErrorInfo}";
        }
    } else {
        setcookie("error", "Error in registration. Please try again later.", time() + 2, "/");
        ?>
        <script>
            window.location.href = "register.php";
        </script>
<?php
    }
}
