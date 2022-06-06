<?php
require '../php/direct_url_access.php';
urlaccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),$_SERVER['SCRIPT_FILENAME']);
include '../includes/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Take Survey</title>
    <link rel="stylesheet" href="../css/header-footer.css">
    <link rel="stylesheet" href="../css/Take_survery.css">
    <link rel="stylesheet" href="../css/buttons.css">
    </div>
    <br><br>
    <div class="FilterMethods">
        <div class="navigatiobar">
        <form action="../php/take_survey1.php" method="GET" style="display:inline" >
            <input type="submit" class="button" name="recommended" value="recommended" style="color:black;text-decoration:none;font-size:25px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </form>
<!--            
            <form action="../php/take_survey1.php" method="GET" style="display:inline" >
            <input type="submit" class="button" name="trending" value="trending" style="color:black;text-decoration:none;font-size:25px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </form> -->

            <form action="../php/take_survey1.php" method="GET" style="display:inline" >
            <input type="submit" class="button" name="nearBy" value="nearBy" style="color:black;text-decoration:none;font-size:25px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </form>

            <form action="../php/take_survey1.php" method="GET" style="display:inline" >
            <input type="submit" class="button" name="recent" value="recent" style="color:black;text-decoration:none;font-size:25px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </form>

            <form action="../php/take_survey1.php" method="GET" style="display:inline" >
            <input type="text" name="search_title" style="color:black;text-decoration:none;font-size:25px;">
            <input type="submit" name="submit" value="search" style="color:black;text-decoration:none;font-size:25px;">
            </form>
        </div>
    </div>
    <div id="CurrentSurveys">
        <div id="EachSurveys" onload="loading()">
            <summary>
                <h4 id ="s_name_cate"></h4>
                <sub>1,324 views</sub><a href=""style="float: right;" id ="take_survey">Take Survey</a>
                <details id ="description"> </details>
                <br>
            </summary>
        </div>
    </div>
    <script src="../scripts/take_survey2.js"></script>
    <br>
    <?php
include "../includes/footer.php";
?> 
</body>
</html>
