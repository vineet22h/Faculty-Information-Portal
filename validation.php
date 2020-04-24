<?php
Include('dbconnection.php');
echo "htti";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["reg_no"]) && isset($_POST["password"])) {
		$reg_no = $_POST["reg_no"];
		$password = $_POST["password"];
		$sql = "select * from student_info where RegNo = '".$reg_no."' and password = '".$password."'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0) {
			session_start();
			$_SESSION["user"] = $reg_no;
			$_SESSION["logged_in"] = true;
			echo "true";
			// echo $_SESSION["user"];
			header("location: home.php");
		}
		else {
			echo "false";
			header("location: login.html");
		}
	}
}

?>