<?php
require '../php/direct_url_access.php';
urlaccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),$_SERVER['SCRIPT_FILENAME']);
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
    <link rel="stylesheet" href="../css/buttons.css">
    <link rel="stylesheet" href="../css/page3.css">
    <link rel="stylesheet" href="../css/header-footer.css">
</head>

<body topmargin=0px leftmargin=0px rightmargin=0px bottommargin=0px>

    <p class="introtText">
        Take suvey , Create Survey and make your life easy , perfect and imaginary as UTO<span class="pia">PIA<span>

</p>

 <div class="surveybuttons" >

   <div class="btnsWithDescription">
        <a href="../php/take_survey1.php"> <p align=center> <button class="btn TakesurveyButtonX" type="button" name="Take survey">
          <b>Take survey</b></button></p></a>
        <p class="AftreButtonText" align=center >
         If you want to Take survey and make money this is the right place. We will regularly email you survey invites. The
         surveys are quick and easy to answer.</p>
   </div>
   <div class="btnsWithDescription" >
        <a href="create_survey.php"> <p align=center><button class="btn TakesurveyButtonX" type="button" name="create survey">
            <b>CreateSurvey</b></button></p></a>
        <p class="AftreButtonText" align=center >
         If you want to create survey of your own and get feedback within short period of time you are at the right place.
         We will make you reach as many people as possibel.
        </p>
    </div>


   <div class="btnsWithDescription">
        <p align=center><a href="mySurvey.php"><button class="btn TakesurveyButtonX" type="button" name="my survey">
            <b>My Survey</b></button></a></p>
             <p class="AftreButtonText" align=center >
         You can veiw your surveys and analyse answers for better decisions.
        </p>
   </div>

   <div  class="btnsWithDescription">
<?php
$email=$_GET["email"];
?>
      <p align=center><a href="profile1.php?email=<?php echo $email; ?>"><button class="btn TakesurveyButtonX" type="button" name="my profile"><b>My
         Profile</b> </button></a></p>
      <p class="AftreButtonText" align=center >
       Taken surveys, rewards, profile settings and more.
      </p>
   </div>

 </div>
 <div class="toTop">
     <a href="#top"><b>Back To Top</b></a>
 </div>
 <?php
include "../includes/footer.php";
?>
</body>
</html>
