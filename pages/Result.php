<?php
error_reporting(0);
require '../php/direct_url_access.php';
require '../php/customer_detail.php';
// require '../php/store_image.php';
include "../includes/header.php";
urlaccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),$_SERVER['SCRIPT_FILENAME']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header-footer.css">
    <!-- <link rel="stylesheet" href="../css/analayz.css"> -->
    
    <link rel="stylesheet" href="../css/result.css">

</head>

<body topmargin=0px leftmargin=0px rightmargin=0px bottommargin=0px >
    <!-- <header>
        <a class="logo" href="../index.html"><img src="../logo/logo1.png" alt="logo image " height=100px></a>
        <nav class="navigationBar">
            <ul class="nav">

                <li><a href="../index.html"> Home </a></li>
                <li><a href="../index.html#aboutus">About Us </a></li>
                <li><a href="contac page.html">Contact Us </a></li>
                <li><a href="pages/log in.html">Login  </a></li> 
                <li><a href="registration page.html">Sign Up </a></li>
            </ul>

        </nav>
        <a class="loginLink" href="log in.html">Log in  </a>
    </header> -->

    <?php
    error_reporting(0);
include '../config/db_connect.php';
// echo "this is working good";
// echo $_GET["survey_title"];
$title = $_GET["survey_title"];
$sql="SET GLOBAL FOREIGN_KEY_CHECKS=0";

$sql="SELECT COUNT(*) AS total  FROM utopia.answeres WHERE survey_title='$title' and question_number='1'";
if ($result1=mysqli_query($conn,$sql)){
    $row1=mysqli_fetch_assoc($result1);
    $number_of_answers=$row1["total"];
    echo "number of answers" . $number_of_answers;
    // onload="get_pie()"
}



?>
<div class="title" style="text-align: center;marginLeft:15em;padding: 10px;"> <h1><?php echo $title;?> </h1>  </div>
<div class="container">
        <div class="summary">
            <h3 style="text-align: center;marginLeft:15em;padding: 10px;"><?php echo $number_of_answers." "." responses"?></h3>
            <!-- <h5>SUMMARY</h5> -->
        </div>
        <hr>
    <div id="container2">
            <p id="question"></p>
            <div class="drawing" id ="pie_drawing">
                     <div class="container1" id="canvas">
                     <!-- <canvas width="200" height="200" id="canvas1"></canvas> -->
                     <script defer src="../scripts/analyz.js"></script>
            </div>
    </div>
       
               <li id ="list1"></li>
                <li id ="list2"></li>
                 <li id ="list3"> </li>
                 <li  id ="list4"></li>
             
    </div>
            
</div>













        <!-- 
        <p id="question"> Q2. What is the main reason you are stack creating online courses? </p>
        <div class="drawing">

            <img src="../images/piechart1.PNG" alt="piechart image to show result">
            <ul class="definitions">
                <li style="list-style-image:url('../images/blue.PNG');">Can't find enough time </li>
                <li style="list-style-image:url('../images/red.PNG');">No motivation</li>
                <li style="list-style-image:url('../images/Green.PNG');">Some kind of fear </li>
                <li style="list-style-image:url('../images/yellow.PNG');">Unsure how deep to go</li>
            </ul>
        </div>

        <p id="question"> Q3. What is the main reason you are stack creating online courses? </p>
        <div class="drawing">

            <img src="../images/piechart1.PNG" alt="piechart image to show result">
            <ul class="definitions">
                <li style="list-style-image:url('../images/blue.PNG');">Can't find enough time </li>
                <li style="list-style-image:url('../images/red.PNG');">No motivation</li>
                <li style="list-style-image:url('../images/Green.PNG');">Some kind of fear </li>
                <li style="list-style-image:url('../images/yellow.PNG');">Unsure how deep to go</li>
            </ul>
        </div>
        <p id="question"> Q4. What is the main reason you are stack creating online courses? </p>
        <div class="drawing">

            <img src="../images/piechart1.PNG" alt="piechart image to show result">
            <ul class="definitions">
                <li style="list-style-image:url('../images/blue.PNG');">Can't find enough time </li>
                <li style="list-style-image:url('../images/red.PNG');">No motivation</li>
                <li style="list-style-image:url('../images/Green.PNG');">Some kind of fear </li>
                <li style="list-style-image:url('../images/yellow.PNG');">Unsure how deep to go</li>
            </ul>
        </div> -->

    </div>

    <!-- Footer of the webpage  -->
    <footer>
        <div class="innerFooter ">
            <div class="socialLinks">
                <ul>
                    <li class="socialItems">
                        <a href="https://www.facebook.com/"> <img src="../images/facebook.png" alt="" width="40px"> </a>
                    </li>
                    <li class="socialItems">
                        <a href="https://www.instagram.com/"> <img src="../images/insta.png" alt="" width="45px"> </a>
                    </li>
                    <li class="socialItems">
                        <a href="#"> <img src="../images/gmai.png" alt="" width="45px"> </a>
                    </li>

                </ul>

            </div>

        </div>

        <div class="outterFooter">
            © Copyright 2021 Utopia survey. All rights reserved
            <br>
            <a href="#">hegree@excutive.com</a>
        </div>

    </footer>
</body>

</html>