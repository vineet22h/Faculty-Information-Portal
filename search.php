<?php
//fetch.php
$server = "localhost";
$username = "haswani";
$password = "Haswani123@";
$database = "faculty";

$conn = new mysqli($servername,$username,$password,$database);

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT f.faculty_id,f.name,f.post,a.project,a.awards,a.research FROM faculty_info f,faculty_projects_awards a where (f.name LIKE '%".$_POST["query"]."%' or f.post LIKE '%".$_POST["query"]."%' or a.awards LIKE '%".$_POST["query"]."%' or a.research LIKE '%".$_POST["query"]."%' or a.project LIKE '%".$_POST["query"]."%') and f.faculty_id = a.faculty_id";

}
else
{
 $query="SELECT f.faculty_id,f.name,f.post,a.project,a.awards,a.research FROM faculty_info as f,faculty_projects_awards as a where f.faculty_id = a.faculty_id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output = '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name </th>
     <th>Post</th>
     <th>project</th>
     <th>awards</th>
     <th>research</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><a href = "facultyinfo.php?faculty_id='.$row["faculty_id"].'">'.$row["name"].'</a></td>
    <td>'.$row["post"].'</td>
    <td>'.$row["project"].'</td>
    <td>'.$row["awards"].'</td>
    <td>'.$row["research"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
 echo $_POST["query"];
}

?>