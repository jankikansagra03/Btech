function max123() {
    var n1 = document.getElementById("n1").value;
    var n2 = document.getElementById("n2").value;
    var n3 = document.getElementById("n3").value;

    if (n1 > n2 && n1 > n3) {
        //  alert(n1 + " is Maximum");
        var max = n1;
    } else if (n2 > n1 && n2 > n3) {
        //  alert(n2 + " is Maximum");
        max = n2;
    } else {
        alert(n3 + " is Maximum");
        max = n3;
    }
    document.getElementById("p1").innerHTML = max + " is Maximum";
}