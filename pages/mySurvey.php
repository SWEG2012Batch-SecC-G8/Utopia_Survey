<?php
require '../php/direct_url_access.php';
urlaccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),$_SERVER['SCRIPT_FILENAME']);
include '../includes/header.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header-footer.css">
    <link rel="stylesheet" href="../css/mySurvey.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head t>
<body bgcolor="#4dffff" topmargin=0px leftmargin=0px rightmargin=0px bottommargin=0px>
     <div class="mySurvey">
        <div class="head">
            <p>Your Previously created surveys</p>

        </div>
         <div class="FilterMethods">
        <div class="navigatiobar">
        <form action="" method="GET" style="display:inline" >
            <input type="submit" class="button" name="Untaken Surveys" value="Untaken Surveys" style="color:black;text-decoration:none;font-size:25px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </form>
    <!--            
            <form action="" method="GET" style="display:inline" >
            <input type="submit" class="button" name="trending" value="trending" style="color:black;text-decoration:none;font-size:25px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </form> -->
    
            <!-- <form method="post" action="" >
        <select class="" name="preferd_country" id="preferd_country" onChange='handleChange2()'>
          <option value="Asia">Asia</option>
          <option value="Europe">Europe</option>
          </select>
        </form> -->
    
            <form action="" method="GET" style="display:inline" >
            <input type="submit" class="button" name="Recently Created Surveys" value="Recently Created Surveys" style="color:black;text-decoration:none;font-size:25px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </form>
    
            <form action="" method="GET" style="display:inline" >
            <input type="text" name="search_title" style="color:black;text-decoration:none;font-size:25px;">
            <input type="submit" name="submit" value="search" style="color:black;text-decoration:none;font-size:25px;">
            </form>
        </div>
    </div>
    <br>';
        <div class="Boxcontainer">
            <!-- box1 -->
            <?php
            error_reporting(0);
    include '../config/db_connect.php';


   












    $creater=$_SESSION['email'];
   
        
    if (isset($_GET["search_title"])|| isset($_GET["Untaken Surveys"])||isset($_GET["Recently Created Surveys"]))
{
    if ($_GET["search_title"]!='')
    {
        $sql ="SELECT survey_title,description,category FROM utopia.created_survey where survey_creater='$creater'";
        $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)){
        if ($row["survey_title"]==$_GET["search_title"])
        {
   echo '
            <div id="boxlarge">
                <div id="top">

                    <p id="surveyName">';echo $row["survey_title"];echo'</a>
                    </p>
                    <p id="Catagory">';echo $row["category"];echo'</p>
                </div>
                <div id="Desc">
                    <input type="checkbox" class="read-more-state" id="post-1" />
                    <h3>Description</h3>
                    <p class="read-more-wrap">';echo $row["description"];echo'</span></p>

                    <label for="post-1" class="read-more-trigger"></label>
                </div>

                <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="background-color: #7f5a83;
                padding: 10px;
                border-radius: 10px;
                font-size: 30px;
                width: 250px;
                color: white;
                border: 0;
                margin-bottom: 20px;"href="';echo "created_survey/pages/".$row["survey_title"].".html";echo'";>
                        
                Review as Taker
   
            </a></p>
                <div id="btns">
                    <div class="box-1">;
                         <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"];echo'";>
                            <div class="btn btn-one">
                                <span>Open </span>
                            </div>
                        </a>
                    </div>
 
                    <div class="box-2">
                   
                    <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"]."&delete=delete";echo'";>
                        <div class="btn btn-two">
                            <span>Removes</span>
                        </div>
                         <input name="generate" value="generate" type="submit" id="generate">
                        </a>
                    </div>
                </div>

            </div>';
     }else if ($row["category"]==$_GET["search_title"])
     {
echo '
         <div id="boxlarge">
             <div id="top">

                 <p id="surveyName">';echo $row["survey_title"];echo'</a>
                 </p>
                 <p id="Catagory">';echo $row["category"];echo'</p>
             </div>
             <div id="Desc">
                 <input type="checkbox" class="read-more-state" id="post-1" />
                 <h3>Description</h3>
                 <p class="read-more-wrap">';echo $row["description"];echo'</span></p>

                 <label for="post-1" class="read-more-trigger"></label>
             </div>

             <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="background-color: #7f5a83;
                    padding: 10px;
                    border-radius: 10px;
                    font-size: 30px;
                    width: 250px;
                    color: white;
                    border: 0;
                    margin-bottom: 20px;"href="';echo "created_survey/pages/".$row["survey_title"].".html";echo'";>
                            
                    Review as Taker
       
                </a></p>

             <div id="btns">
                 <div class="box-1">;
                      <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"];echo'";>
                         <div class="btn btn-one">
                             <span>Open </span>
                         </div>
                     </a>
                 </div>

                 <div class="box-2">
                
                 <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"]."&delete=delete";echo'";>
                     <div class="btn btn-two">
                         <span>Removes</span>
                     </div>
                     </a>

                     
                 </div>
                
             </div>
             
         </div>
        ';
 }
   }
} else if ($_GET["Untaken Surveys"]=="Untaken Surveys"){
    $sql = "SELECT * FROM utopia.created_survey where survey_title NOT IN (SELECT survey_title FROM utopia.answered_survey)";
    $result =mysqli_query($conn, $sql); 
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '
                 <div id="boxlarge">
                     <div id="top">
     
                         <p id="surveyName">';echo $row["survey_title"];echo'</a>
                         </p>
                         <p id="Catagory">';echo $row["category"];echo'</p>
                     </div>
                     <div id="Desc">
                         <input type="checkbox" class="read-more-state" id="post-1" />
                         <h3>Description</h3>
                         <p class="read-more-wrap">';echo $row["description"];echo'</span></p>
     
                         <label for="post-1" class="read-more-trigger"></label>
                     </div>
                     <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="background-color: #7f5a83;
                     padding: 10px;
                     border-radius: 10px;
                     font-size: 30px;
                     width: 250px;
                     color: white;
                     border: 0;
                     margin-bottom: 20px;"href="';echo "created_survey/pages/".$row["survey_title"].".html";echo'";>
                             
                     Review as Taker
        
                 </a></p> <p id="nq" style="color: rgb(136, 131, 124);">48 Questions</p>
     
                     <div id="btns">
                         <div class="box-1">;
                              <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"];echo'";>
                                 <div class="btn btn-one">
                                     <span>Open </span>
                                 </div>
                             </a>
                         </div>
      
                         <div class="box-2">
                        
                         <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"]."&delete=delete";echo'";>
                             <div class="btn btn-two">
                                 <span>Removes</span>
                             </div>
                             </a>
                         </div>
                     </div>
     
                 </div>';
         }
        }else if ($_GET["Recently Created Surveys"]=="Recently Created Surveys")
             {
                $date = date_create(date('Y-m-d H:i:s'));
                $tdate=date_modify($date,'-2 days');
                $tdate = $tdate->format('d/m/Y');
                // $recency = $currentDate->sub(new DateInterval('P2D'));
                $sql = "SELECT * FROM utopia.created_survey WHERE created_date >= '$tdate'order by created_date";
                if ($result =mysqli_query($conn, $sql)){
                while ($row = mysqli_fetch_assoc($result))
                    {
                echo '
                <div id="boxlarge">
                    <div id="top">
    
                        <p id="surveyName">';echo $row["survey_title"];echo'</a>
                        </p>
                        <p id="Catagory">';echo $row["category"];echo'</p>
                    </div>
                    <div id="Desc">
                        <input type="checkbox" class="read-more-state" id="post-1" />
                        <h3>Description</h3>
                        <p class="read-more-wrap">';echo $row["description"];echo'</span></p>
    
                        <label for="post-1" class="read-more-trigger"></label>
                    </div>
    
                    <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="background-color: #7f5a83;
                    padding: 10px;
                    border-radius: 10px;
                    font-size: 30px;
                    width: 250px;
                    color: white;
                    border: 0;
                    margin-bottom: 20px;"href="';echo "created_survey/pages/".$row["survey_title"].".html";echo'";>
                            
                    Review as Taker
       
                </a></p>
    
                    <div id="btns">
                        <div class="box-1">;
                             <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"];echo'";>
                                <div class="btn btn-one">
                                    <span>Open </span>
                                </div>
                            </a>
                        </div>
     
                        <div class="box-2">
                       
                        <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"]."&delete=delete";echo'";>
                            <div class="btn btn-two">
                                <span>Removes</span>
                            </div>
                            </a>
                        </div>
                    </div>
    
                </div>';
             }
            }
        }
    }else {
                $sql ="SELECT survey_title,description,category FROM utopia.created_survey where survey_creater='$creater'";
                $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_assoc($result)){
                echo '
                <div id="boxlarge">
                    <div id="top">
    
                        <p id="surveyName">';echo $row["survey_title"];echo'</a>
                        </p>
                        <p id="Catagory">';echo $row["category"];echo'</p>
                    </div>
                    <div id="Desc">
                        <input type="checkbox" class="read-more-state" id="post-1" />
                        <h3>Description</h3>
                        <p class="read-more-wrap">';echo $row["description"];echo'</span></p>
    
                        <label for="post-1" class="read-more-trigger"></label>
                    </div>
    
                    <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="background-color: #7f5a83;
                    padding: 10px;
                    border-radius: 10px;
                    font-size: 30px;
                    width: 250px;
                    color: white;
                    border: 0;
                    margin-bottom: 20px;"href="';echo "created_survey/pages/".$row["survey_title"].".html";echo'";>
                            
                    Review as Taker
       
                </a></p>
                    <div id="btns">



                        <div class="box-1">;
                             <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"];echo'";>
                                <div class="btn btn-one">
                                    <span color="green">Analayze Survey</span>
                                </div>
                            </a>
                        </div>
                            <br>
                            <br>
                        <div class="box-2">
                       
                        <a href="';echo "../php/survey_analysis.php?survey_title=".$row["survey_title"]."&delete=delete";echo'";>
                            <div class="btn btn-two">
                                <span>Removes</span>
                            </div>
                            </a>
                        </div>
                    </div>
                   
                </div>
            
               ';
             }
    
}
            ?>
        <div class="createNew">
            <p align="center">
                <a href="create_survey.php">
                    <img src="../images/add-icon-png-2471.png" alt="create button" width="100px" height="100px" align="center"></a>
            </p>

        </div>

    </div>



    <!-- footer of the webpage -->

    <?php
include "../includes/footer.php";
?>
</body>

</html>