<?php
Include("dbconnection.php");
$sql1 = "select * from faculty_info where faculty_id = 101";
$sql2 = "select * from faculty_projects_awards where faculty_id = 101"; 
$sql3 = "select * from faculty_qualification where faculty_id = 101";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
$row3=mysqli_fetch_array($result3);

// echo $row1["faculty_id"];
// echo $row2;
// echo $row3;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form verification</title>
	<style >
		
		h2{
			color: red;
		}
	</style>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Please verify details : </h1>

<div style = "background-color: #f1f1f1;align-content: center;margin:0px 150px;padding:10px 20px; ">
	<h1>personal information :
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;Name : <?php echo $row1["name"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;Email-id : <?php echo $row1["email"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;Branch : <?php echo $row1["branch"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;Post : <?php echo $row1["post"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;Experience : <?php echo $row1["experience"]." years"?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;duration spend in college : <?php echo $row1["duration_clg"]." years" ?></h2>

	<h1>Qualification information : </h1>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;10th : <?php echo $row3["10th"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;12th : <?php echo $row3["12th"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;Diploma : <?php echo $row3["diploma"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;BSC : <?php echo $row3["bsc"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;BTech : <?php echo $row3["btech"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;MTech : <?php echo $row3["mtech"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;PHD : <?php echo $row3["phd"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;MBA : <?php echo $row3["mba"] ?></h2>

	<h1>Projects and Research work :</h1>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;projects : <?php echo $row2["projects"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;awards : <?php echo $row2["awards"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;Guided By : <?php echo $row2["guided_by"] ?></h2>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;researches : <?php echo $row2["research"] ?></h2>
</div>
<div style="align-content: center;margin:20px 550px;">
<button type="button" class="btn btn-success" onclick = "accept()">Accept</button>
<button type="button" class="btn btn-danger" onclick = "decline()">Decline</button>
</div>
