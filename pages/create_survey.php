<?php
require '../php/direct_url_access.php';
urlaccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),$_SERVER['SCRIPT_FILENAME']);
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial,scale=1">
    <link rel="stylesheet" href="../css/header-footer.css">
    <title>Create Survey</title>
    <link rel="stylesheet" href="../css/create_survey.css">
</head>

<body topmargin=0px leftmargin=0px rightmargin=0px bottommargin=0px>
    <!-- above navigation bar is completed -->
    <div class="container">



        <h2 ALIGN=CENTER>Provide the detail of your survey</h2>
        <form class="" action="../db/insert_survey.php" method="POST">
            <label for="SurveyTitle">Survey Title : <input id="ownerName" type="text" name="survey_title" value="" placeholder="Your survey title" ></label><br><br>
            <label for="Descritption">Description : <textarea id="survDescription" name="description" value="" placeholder="description" ></textarea></label><br><br>
            <label for="Participant Number">Participant Limit : <input id="participantNumber" type="number" name="participant_limit" value="" placeholder="How Many Participant?" ></label><br><br>

            <label for="gender">Gender:
          <label for="male"><input type="radio" name="gender" value="male" id="male" > Male</label>
            <label for="female"> <input type="radio" name="gender" value="female" id="female"> Female</label>
            <label for="both"><input type="radio" name="gender" value="Both" id="both" >Both</label>
            </label><br><br>
            <label for="created_date">Created date : <input type="date" name="created_date" value=""></label><br><br>
            <label for="dead_line">Dead Line : <input type="date" name="dead_line" value=""></label><br><br>
            <label for="job"> Target Job:
        <select class="jobselection" name="job">
          <option value="Everyone">Everyone</option>
          <option value="student">Student</option>
          <option value="Employeed">Emloyeed</option>
          <option value="unemployeed">Unemployeed</option>
          <option value="BussinessOwner">Bussiness Owner</option>

        </select>
    </label> <br><br>

        </select>
    </label> <br><br>
            <label for="job"> Target Age:
        <select class="ageselection" name="targetage">
          <option value="Everyone">Everyone</option>
          <option value="child">0-10</option>
          <option value="teenage">10-18</option>
          <option value="young">18-35</option>
          <option value="man">35-65</option>
          <option value="old">65 and above</option>

        </select>
        
        </select>
    </label> <br><br>
            <label for="category"> category </label>:
        <select class="ageselection" name="category">
          <option value="business">business</option>
          <option value="ecucation">ecucation</option>
          <option value="spritual">spritual</option>
          <option value="political">political</option>
          <option value="social">social</option>
          <option value="scientific">scientific</option>

        </select>
    </label> <br><br>
            <label for="job"> Target Place:</label>
        <select class="placeselection" name="target_place" id="target_place">
          <option value="Everywhere">Everywhere</option>
          <option value="Africa">Africa</option>
          <option value="Asia">Asia</option>
          <option value="Europe">Europe</option>
          <option value="South_America">South America</option>
          <option value="NorthAmerica">North America</option>
          <option value="Australia">Australia</option>

        </select>
    </label> <br><br>
            <input type="submit" id="createSumbit" style="text-decoration:none;"name="submit" value="CREATE">
           <!-- <a href="../php/insert_suvey.php" id="createSumbit" style="text-decoration: none;  ">Create</a> -->

        </form><br><br><br>
        </td>
        <td width=20%></td>
    </div>
   
</body>
<?php
include "../includes/footer.php";
?>
</html>