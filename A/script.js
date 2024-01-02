function generate_table() {
    var n = parseInt(document.getElementById('n_1').value);
    var a = "";
    for (var i = 1; i <= 20; i++) {
        a = a + n + " * " + i + " = " + n * i + "<br>";

    }
    document.getElementById('p1').innerHTML = a;
}

function select_year() {
    var a = document.getElementById('year1').value;
    alert(a);
}

function generate_day() {
    y = document.getElementById('year1').value;
    m = document.getElementById('month1').value;
    if (m == "February") {
        if (y % 4 == 0) {
            var days = 29;
        } else {
            days = 28;
        }
    } else if (m == "January" || m == "March" || m == "May" || m == "July" || m == "August" || m == "October" || m == "December") {
        days = 31;
    } else {
        days = 30;
    }
    x = "Select Day:<select id='day1' >";
    for (var i = 1; i <= days; i++) {
        x = x + "<option value='" + i + "' >" + i + "</option>";

    }
    x = x + "</select>";
    document.getElementById("p1").innerHTML = x;
}

function Display_date() {
    y = document.getElementById('year1').value;
    m = document.getElementById('month1').value;
    d = document.getElementById('day1').value;

    x = d + " " + m + ", " + y;
    document.getElementById('p2').innerHTML = x;
}