<?php
Include('dbconnection.php');
session_start();
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$faculty_id = $_POST["faculty_id"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$experience = $_POST["experience"];
	$branch = $_POST["branch"];
	$post = $_POST["post"];
	$duration = $_POST["duration_clg"];

	$projects = $_POST["projects"];
	$awards = $_POST["awards"];
	$guider = $_POST["guider"];
	$research = $_POST["research"];

	$qual_10 = test_input($_POST["10th"]);
	$qual_12 = test_input($_POST["12th"]);
	$qual_diploma = test_input($_POST["diploma"]);
	$qual_bsc = test_input($_POST["bsc"]);
	$qual_btech = test_input($_POST["btech"]);
	$qual_mtech = test_input($_POST["mtech"]);
	$qual_phd = test_input($_POST["phd"]);
	$qual_mba = test_input($_POST["mba"]);


	$sql1 = "insert into faculty_info values('".$faculty_id."','".$name."','".$email."','".$branch."','".$post."','".$experience."','".$duration."')";

	$sql2 = "insert into faculty_projects_awards values(".$faculty_id.",'".$projects."','".$awards."','".$guider."','".$research."')";

	$sql3 = "insert into faculty_qualification values('".$faculty_id."','".$qual_10."','".$qual_12."','".$qual_diploma."','".$qual_bsc."','".$qual_btech."','".$qual_mtech."','".$qual_phd."','".$qual_mba."')";

	if($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE) {
		echo "data inserted successfully";
		$date = date('Y-m-d H:i:s');
		echo $date;
		$sql4 =  "insert into notify values('".$faculty_id."','4th comment','".$_SESSION["user"]."','0','".$date."')";
		if($conn->query($sql4) === TRUE) {
			echo "notified";
			// echo $_SESSION['user'];
			header("location: notify.php");
		}

	}
	else {
		echo "error";
	}
	$conn->close();
}
?>