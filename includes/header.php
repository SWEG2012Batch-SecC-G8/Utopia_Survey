<?php
// session_start();
//var $page;
$home="Home";
$contact="Contact us";
$help ="help";
$aboutus="About Us";
$profile="Profile";
$login="Log In";
$signup="Sgin Up";
$logout="Log Out";
$Main="Main Page";
if (strpos($_SERVER['SCRIPT_FILENAME'],"page 3.php")>=0 || 
strpos($_SERVER['SCRIPT_FILENAME'],"create_survey.php")>=0 || 
strpos($_SERVER['SCRIPT_FILENAME'],"mySurvey.php")>=0 || 
strpos($_SERVER['SCRIPT_FILENAME'],"profile1.php")||
 strpos($_SERVER['SCRIPT_FILENAME'],"studio.php")|| 
 strpos($_SERVER['SCRIPT_FILENAME'],"take_survey.php")|| 
 issetstrpos($_SERVER['SCRIPT_FILENAME'],"log in.php"))
 {

    $login="";
    $signup="";
 
}
 if (strpos($_SERVER['SCRIPT_FILENAME'],"log in.php")){
    $profile="";
    $logout="";
    $Main="";
}
if (strpos($_SERVER['SCRIPT_FILENAME'],"registration page.html")){
    $login="";
    $logout="";
    $profile="";
    $Main="";
}
 if (strpos($_SERVER['SCRIPT_FILENAME'],"profile1.php")){
         $profile="";
        $login="";
        $signup="";
    $aboutus = "";
    $help = "";
}

if (strpos($_SERVER['SCRIPT_FILENAME'],"page 3.php")){
   $Main="";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/buttons.css">
    <link rel="stylesheet" href="../css/header-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body topmargin=0px leftmargin=0px rightmargin=0px bottommargin=0px>
    <header>
        <a class="logo" href="../index.html"><img src="../logo/logo1.png" alt="logo image " height=100px></a>
        <nav class="navigationBar">
            <ul class="nav">

                <li><a href="../index.php"> <?php echo $home?> </a></li>

                

                <li><a href="../pages/registration page.html"><?php echo $signup ?></a></li>

                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['firstname']??"Guest";?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item  text-dark"
                                href="../pages/profile1.php?email=<?php echo $_SESSION['email']?>">
                                <?php echo $profile ?></a>
                        <li><a class="dropdown-item text-dark" href="../php/logout.php"><?php echo $logout ?></a></li>
                        <li><a class="dropdown-item  text-dark"
                                href="../pages/page 3.php?email=<?php echo $_SESSION['email']?>"> <?php echo $Main?>
                            </a></li>
                        <li><a class="dropdown-item  text-dark" href="../pages/contactUs.php"><?php echo $contact?>
                            </a></li>
                        <li><a class="dropdown-item  text-dark" href="../pages/log in.php"><?php echo $login?> </a></li>
                        <li><a class="dropdown-item  text-dark" href="../index.php#aboutus"><?php echo $aboutus ?> </a>
                        </li>
                        <li><a class="dropdown-item  text-dark" href="contac page.html"><?php echo $help ?> </a></li>



                    </ul>
                </div>
            </ul>
        </nav>
    </header>