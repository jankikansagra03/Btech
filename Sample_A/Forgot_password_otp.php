<?php
include_once("guest_header.php");
?>
<script>
    function startTimer(duration, display) {
        var timer = duration,
            minutes, seconds;
        setInterval(function() {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = 0;
            }
        }, 1000);
    }
    window.onload = function() {
        var oneMinute = 60,
            display = document.getElementById('#timer');

        startTimer(oneMinute, display);
    };

    function enable_reset_btn() {
        document.getElementById("r_btn").disabled = false;
    }
    setTimeout(enable_reset_btn, 60000);
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