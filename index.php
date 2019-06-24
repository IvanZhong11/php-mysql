<html>
<head>
<script>
function Student(str) {
    if (str == "") {
        document.getElementById("students").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("students").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","inquery.php",true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<?php
 $con = mysqli_connect('localhost','Ivan','ivan','student');
 mysqli_query($con, "SET NAMES utf8");
 ?>
<br><button onclick="Student()">Show all student</button><br><br>
<div id="students"></div>
<br><button type="button" onclick="window.open('insert.php','popUpWindow','height=400,width=800,left=150,top=200,,scrollbars=yes,menubar=no')">Add student</button><br><br>
<br><button type="button" onclick="window.open('json.php','popUpWindow','height=400,width=800,left=150,top=200,,scrollbars=yes,menubar=no')">See JSON format</button>

</body>
</html>