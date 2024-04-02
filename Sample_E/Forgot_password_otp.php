<?php
include_once("guest_header.php");

?>
<script>
    function enableButton() {
        document.getElementById('r_btn').disabled = false;
    }

    setTimeout(enableButton, 10000);
</script>
<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>OTP Verification</h2>
            <form action="Forget_password_otp_action.php" method="post" id="form1">
                <div class="form-group">
                    <label for="otp1">Enter OTP:</label>
                    <input type="number" class="form-control" id="otp1" name="otp">
                    <span id="otp_err"></span>
                    <div>OTP will expire in <span id="timer">01:00</span></div>
                </div>

                <input type="submit" class="btn" value="Verify OTP" name="btn" />
                <a href="resend_otp.php"> <input type="button" class="btn" value="Resend OTP" name="resend_btn" id="r_btn" disabled /></a>
            </form>
        </div>
    </div>
</div>
<br>
<?php
include_once("footer.php");
?>