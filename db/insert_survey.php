<?php
SESSION_START();
echo "start";
include '../config/db_connect.php';
if (isset($_REQUEST['survey_title'])){
    $survey_title = $_REQUEST["survey_title"];
    $description=$_REQUEST["description"];
    $participant_limit= $_REQUEST["participant_limit"];
    $gender= $_REQUEST["gender"];
    $created_date= $_REQUEST["dead_line"];
    $dead_line= $_REQUEST["created_date"];
   // $target_job= $_REQUEST["target_job"];
    $job= $_REQUEST["job"];
    $target_place= $_REQUEST["target_place"]; 
    $target_age= $_REQUEST["targetage"];
    $category= $_REQUEST["category"];
    // $emial=$_SESSION["email"];
    $email=$_COOKIE["email"];
  

}
$_SESSION["survey_title"]=$survey_title;
$_SESSION["job"]=$job;
$sql="INSERT INTO utopia.created_survey (survey_title,survey_creater,description,participant_limit,prefered_gender,created_date,dead_line,target_job,target_age,target_place,category)
                            VALUES ('$survey_title','$email','$description','$participant_limit','$gender','$created_date','$dead_line','$job','$target_age','$target_place','$category')";
mysqli_query($conn, $sql);
 
header("Location:../pages/studio.php");

?>