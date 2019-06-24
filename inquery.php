<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 2px solid black;
    padding: 5px;
	text-align: center;
}
</style>
</head>
<body>

<?php
$con = mysqli_connect('localhost','Ivan','ivan','student');
 mysqli_query($con, "SET NAMES utf8");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	echo "not connected!";
}
$sql = "select * from 106midterm_table";
$result =  mysqli_query($con,$sql);
 
 echo "<table>
 <tr>
<th>ID</th>
<th>Name</th>
<th>Sex</th>
<th>Address</th>
<th>Tel</th>
 </tr>";
 
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>".$row['Id_no']."</td>";
 echo "<td>".$row['Name']."</td>";
 echo "<td>".$row['Sex']."</td>";
 echo "<td>".$row['Address']."</td>";
 echo "<td>".$row['Tel']."</td>";
 echo "</tr>";
 }
 echo "</table>";
 mysqli_close($con);
 ?>
 </body>
</html>