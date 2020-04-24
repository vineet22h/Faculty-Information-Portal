<?php
Include("dbconnection.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$reg_no = test_input($_POST["reg_no"]);
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$branch = test_input($_POST["branch"]);
	$password = test_input($_POST["password"]);
	$category = test_input($_POST["Category"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$sql = "insert into student_info values('".$reg_no."','".$name."','".$email."','".$branch."','".$password."','".$category."')";
if($conn->query($sql) === TRUE) {
	header("location: login.html");
}
else {
	echo "error";
}

$conn->close();

?>
