<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>mysql_db_query</title></head><body>
<?php
$con = mysqli_connect('localhost','Ivan','ivan','student');
 mysqli_query($con, "SET NAMES utf8");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	echo "not connected!";
}
$sql = "select * from 106midterm_table";
$result =  mysqli_query($con,$sql);
$rows = array();
while($r = mysqli_fetch_assoc($result)){
	$rows[] = $r;
}
print json_encode($rows)
?>
</body></html>