<?php

include_once("admin_header.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Add Event Form</h2>
            <form action="add_event_form.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="et1">Event Title:</label>
                    <input type="text" class="form-control" id="et1" placeholder="Enter Event Title" name="et">
                    <span id="et_err"></span>
                </div>
                <div class="form-group">
                    <label for="ed1">Event Title:</label>
                    <textarea class="form-control" id="ed1" placeholder="Enter Event Description" name="ed" rows="5"></textarea>
                    <span id="ed_err"></span>
                </div>
                <div class="form-group">
                    <label for="edt1">Event Date:</label>
                    <input type="date" class="form-control" id="edt1" placeholder="Enter Event Date" name="edt">
                    <span id="edt_err"></span>
                </div>
                <div class="form-group">
                    <label for="e_type1">Event Type:</label>
                    <select name="e_type" id="e_type1" class="form-control">
                        <option value="Industrial Visit">Industrial Visit</option>
                        <option value="Seminar">Seminar</option>
                        <option value="Workshop">Workshop</option>
                        <option value="Conference">Conference</option>
                    </select>
                    <span id="e_type_err"></span>
                </div>
                <div class="form-group">
                    <label for="ep1">Event Place :</label>
                    <input type="text" class="form-control" id="ep1" placeholder="Enter Event Place" name="ep">
                    <span id="ep_err"></span>
                </div>
                <div class="form-group">
                    <label for="e_main1">Event Main Image:</label>
                    <input type="file" class="form-control" id="e_main1" name="e_main">
                    <span id="e_main_err"></span>
                </div>
                <div class="form-group">
                    <label for="e_extra1">Event Extra Images:</label>
                    <input type="file" class="form-control" id="e_extra1" placeholder="Enter Event Title" name="e_extra[]" multiple>
                    <span id="e_extra_err"></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-dark" value="Add Event" name="btn">
                </div>
            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['btn'])) {
    $event_title = $_POST['et'];
    $event_description = $_POST['ed'];
    $event_date = $_POST['edt'];
    $event_type = $_POST['e_type'];
    $event_place = $_POST['ep'];
    $event_main = uniqid() . $_FILES['e_main']['name'];

    $event_extra = "";
    // $event_title = $_POST['et'];
    $count = count($_FILES['e_extra']['name']);
    echo $count;
    //$event_extra = implode(",", $_FILES['e_extra']['name']);
    // echo $event_extra;
    $tmp_name = "extra_image";
    $ans = "";
    for ($i = 0; $i < $count; $i++) {
        $t = $tmp_name . $i;
        $t = uniqid() . $_FILES['e_extra']['name'][$i];

        // echo "<br>" . $t;
        $ans = $t . ",";
        echo $ans;
    }
    $q = "INSERT INTO `event_details`(`event_title`, `event_description`, `event_date`, `event_type`, `event_place`, `main_image`, `extra_images`) VALUES ('$event_title','$event_description','$event_date','$event_type ','$event_place',' $event_main','$event_extra')";

    if (mysqli_query($con, $q)) {
        echo "Event Added successfully.";
        if (!is_dir("images/events")) {
            mkdir("images/events");
        }
        $event_main = uniqid() . $_FILES['e_main']['name'];
        $event_main = uniqid() . $_FILES['e_main']['name'];
        move_uploaded_file($_FILES['e_main']['tmp_name'], "images/events/" . $event_main);
?>
        <script>
            window.location.href = "manage_events.php";
        </script>
<?php
    } else {
        echo "error in adding Event.";
    }
}
