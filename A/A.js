function generate_table() {
      alert("hello");
      n = parseInt(document.getElementById("n1").value);
      result = "";
      for (var i = 1; i <= 20; i++) {
          result = result + n + " * " + i + " = " + n * i + "<br/>";
      }
      document.getElementById('p1').innerHTML = result;

  }