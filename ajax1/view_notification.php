<?php
$server = "localhost";
$username = "haswani";
$password = "Haswani123@";
$database = "faculty";

$conn = new mysqli($servername,$username,$password,$database);

$sql="UPDATE notify SET status=1 WHERE status=0";	
$result=mysqli_query($conn, $sql);

$sql="select * from notify limit 5";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>". $row["reg_no"] . "</div>" . 
	"<div class='notification-comment'>" . $row["comment"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>