<html>
<head>
<style>
table {
    wid_noth: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 2px solid_no black;
    padding: 5px;
	text-align: center;
}
</style>
</head>
<body>

<?
$error = "";
$name = $id_no = $sex = $address = $tel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$valid_no = true;
  if(empty($_POST["id_no"])){
	  $error="Can't be empty!";
	  $valid_no = false;
	}
  else{
	  $name = input($_POST["id_no"]);
	}
  if(empty($_POST["name"])){
	  $error="Name is empty!";
	  $valid_no = false;
	}
  else{
	$id_no = input($_POST["name"]);
  }
  if(empty($_POST["sex"])){
	  $error="Can't be empty!";
	  $valid_no = false;
	}
  else{
  $sex = input($_POST["sex"]);
  }
  if(empty($_POST["address"])){
	  $error="Can't be empty!";
	  $valid_no = false;
	}
  else{
  $address = input($_POST["address"]);
  }
  if(empty($_POST["tel"])){
	  $error="Can't be empty!";
	}
  else{
  $phone = input($_POST["tel"]);
  }
  if($valid_no){
$con = mysqli_connect('localhost','Ivan','ivan','student');
 mysqli_query($con, "SET NAMES utf8");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	echo "not connected!";
}
$sql = "insert into 106midterm_table values('{$_POST["id_no"]}','{$_POST["name"]}','{$_POST["sex"]}','{$_POST["address"]}','{$_POST["tel"]}')";
$result =  mysqli_query($con,$sql);
/*if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}*/
   header('Location: result.html');
   exit();
  }
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 
<form id_no="add" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br>
ID: <input type="text" name="id_no">
<span class="error">* <?php echo $error;?></span><br><br>
Name: <input type="text" name="name">
<span class="error">* <?php echo $error;?></span><br><br>
Sex: <input type="text" name="sex">
<span class="error">* <?php echo $error;?></span><br><br>
Address: <input type="text" name="address">
<span class="error">* <?php echo $error;?></span><br><br>
Tel: <input type="text" name="tel"><br><br>
<input type="submit" name="submit" value="Add this student">
</form>

 </body>
</html>