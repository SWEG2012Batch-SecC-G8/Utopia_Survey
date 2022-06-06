<?php
session_start(); 
// error_reporting(E_ALL ^ E_NOTICE);  
// error_reporting(E_ERROR); ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UtopiaSurvey</title>
        <link rel="stylesheet" href="css/homCss.css">
        <link rel="stylesheet" href="css/header-footer.css">
        <link rel="stylesheet" href="css/buttons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
        <script src="script.js"></script>

        <script type="text/javascript">
            function displayNextImage() {
                x = (x === images.length - 1) ? 0 : x + 1;
                document.getElementById("anim").src = images[x];
            }

            function displayPreviousImage() {
                x = (x <= 0) ? images.length - 1 : x - 1;
                document.getElementById("anim").src = images[x];
            }

            function startTimer() {
                setInterval(displayNextImage, 4000);
            }

            var images = [],
                x = -1;
            images[0] = "images/create_survey.jpg";
            images[1] = "images/surveyimg.jpg";
            images[2] = "images/customer_survey.jpg";
        </script>


    </head>

    <body onload="startTimer()">
                     <?php 
                        if (isset($_SESSION["email"])){
                            $login='';
                            $signup='';
                            $src="";
                            $srcs="";
                            $profile="Profile";
                            $srcPro="pages/profile1.php?email=".$_SESSION['email'];
                            $Main="Main Page";
                            $srcMa="pages/page 3.php?email=".$_SESSION['email'];
                            $help="Help";
                            $logout="Logout";
                        
                        }else {
                        $login="Log In ";
                        $signup="Sign Up";
                        $srcLo="pages/log in.php";
                            $srcSi="pages/registration page.html";
                        $profile="";
                        $Main="";
                        $help="";
                        $logout="";
                        }
                        ?>

        <header>
        <a class="logo" href="../index.php"><img src="logo/logo1.png" alt="logo image " height=100px></a>
        <nav class="navigationBar">
                        <ul class="nav">
                            
                            <li><a href="index.php#aboutus">About Us </a></li>
                            <li><a href="pages/contactUs.php">Contact Us </a></li> 
                            
                            <li><a href="pages/contac page.html"><?php echo $help ?> </a></li>
                           
                            
                            <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['firstname']??"Guest";?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a  class="dropdown-item  text-dark"  style="color:white"href="<?php echo $srcLo ?>"><?php echo $login?></a></li>
                            <li><a class="dropdown-item  text-dark" style="color:white"href="<?php echo $srcSi ?>"><?php echo $signup?> </a></li>
                        <li><a class="dropdown-item  text-dark" href="<?php echo $srcPro ?>"> <?php echo $profile ?></a></li>
                             <li><a class="dropdown-item  text-dark" href="<?php echo $srcMa?>"> <?php echo $Main?> </a></li>
                         <li><a class="dropdown-item  text-dark" href="php/logout.php"><?php echo $logout ?></a></li> 

                     </ul>
                </div>
                </ul>
                        </nav>

                    </header>

        </header>

        <div class="animation">
            <img id="anim" width="70%" height="auto" src="images/create_survey.jpg" />
        </div>

        <div class="prevNext">

            <a class="prev-animate-slider" onclick="displayPreviousImage()">❮</a>
            <a class="next-animate-slider" onclick="displayNextImage()">❯</a>
        </div>





        <div class="surveybuttons">


            <div class="TakeSurveyContainer">

                <a href="php/take_survey1.php">
                    <p align=center> <button class="btnh TakesurveyButtonX" type="button" name="Take survey"> <b>Take survey</b></button> </a>
                </p>
                <p class="AftreButtonText" align=center style="font-size:2.7vw">
                    if you want to Take survey and make money this is the right place. We will regularly email you survey invites. The surveys are quick and easy to answer
                </p>
            </div>
            <div class="CreateSurveyContainer">

                <a href="pages/create_survey.php">
                    <p align=center><button class="btnh CreateSurveyButtonX" type="button" name="create survey"><b>Create Survey</b></button></a>
                </p>
                <p class="AftreButtonText" align=center style="font-size:2.7vw">
                    if you want to create survey of your own and get feedback within short period of time you are at the right place. we will make you reach as many people as possibel
                </p>
            </div>
        </div>
        <!-- the services to be obtained from the website -->
        <div class="ServRow1">

            <div class=""> </div>

            <div class="image"><img src="images/sat.png" alt=""> </div>

            <div class="description">
                <p class="descriptionTitle">Customer satisfaction</p>
                <p class="descriptionDetail"> Get real-time feedback to improve products, services, and business overall.

                </p>
            </div>
            <div class=""> </div>
        </div>

        <div class="ServRow2">
            <div class=""> </div>
            <div class="description">
                <p class="descriptionTitle">Market research</p>
                <p class="descriptionDetail">Keep track of industry and market trends to stay ahead of the competition.</p>
            </div>
            <div class="image">
                <img height=200px src="images/market.png">
            </div>
            <div class=""> </div>
        </div>



        <div class="ServRow3">
            <div class=""></div>

            <div class="image">
                <img src="images/Calendarfinal.jfif" alt="">
            </div>
            <div class="description">
                <p class="descriptionTitle">Event planning</p>
                <p class="descriptionDetail">
                    Gather feedback before, during (in real time!), and after your events.</p>
            </div>
            <div class=""></div>
        </div>


        <div class="ServRow4">
            <div class=""></div>
            <div class="description">
                <p class="descriptionTitle">Education and schools</p>
                <p class="descriptionDetail">Get answers to improve programs, processes, and academic achievement.</p>
            </div>
            <div class="image">
                <img width=300px height=300px src="images/education.jpg" alt="">
            </div>
            <div class=""></div>



        </div>

        <!-- contact PArt -->
        <!-- <div class="">
            <h3 id="contactus" align=center><a href="pages/contac page.html">Contact us</a></h3>
            <p style="font-size:22px">if you need more information and also have something unclear you can contact us through our pages we wil always be there to make things clear and easy </p>
        </div>
        <div class="contactPart">


            <div class="ContactDescription">
                <p style="font-size:2.5vw; color:rgb(41, 24, 24)" align=center><b>contact us</b></p>
                <p style="font-size:2.3vw" align=center>If you need more information and have unclear things Contact us through the provided platforms </p>
            </div>

            <div class="ContacInfo">
                <p align=center style="font-size:2.5vw; color:rgb(41, 24, 24)"><b>contact Info</b></p>
                <p align=center style="font-size:2.3vw">home office </p>
                <p align=center style="font-size:2.3vw">tel;0111310438</p>
            </div>

            <div class="ContactForm">
                <form action="homepage.html" method="post">
                    <input type="text" name="fullname" value="" placeholder="Enter your full name" required> <br><br>
                    <input type="email" name="emailaddress" value="" placeholder="Enter your Email" required><br><br>
                    <input type="text" name="subject" value="" placeholder="Subject" required> <br><br>
                    <textarea name="message" rows="8" cols="50" placeholder="Your message" required></textarea>
                    <button id="sendMessage" style="background-color:rgb(41, 24, 24);color:white;" type="submit" name="button">Send Message</button>


                </form>

            </div>

        </div> -->



        <div class="AboutUs">
            <div class="Video">
                <video src="video/utopiaIntro.mp4" autoplay poster="" controls align=center width="300" height="200">
                 <source src="https://" type="video/">
             </video>
            </div>
            <div class="aboutus">
                <h3 id="aboutus" align=center>About Us</h3>
                <p style="font-size:22px" style="background-color:rgb(270, 246, 242)">Utopia Survey is the premier Africa-focused data collection platform with communities all over world. As part of our community, you are empowered to contribute to discussions that will help transform the products and services that matter
                    to you. Share your opinion by answering our online surveys and inspire change in real-time. The Utopia community has thousands of end-user and business consumer members across Africa, men and women of all the ages. As a member, you
                    regularly receive invitation to take part in surveys. You can answer our paid surveys when and where it suits you, on your mobile, at home, work or on-the-go. The company enables the collection and the delivery of reliable and relevant
                    Africa market data and insights, using the most convenient, fast and cost-effective data collection methods. We unlock data-driven decisions across Africa by delivering:
                    <ul style="font-size:20px;">
                        <li>consumer & professional insights</li>
                        <li>corporate data & analytics</li>
                        <li>market intelligence reports</li>
                    </ul>
                </p>




            </div>



        </div>


        <div class="ToTop">
            <a href="#" align=center>Go to Top</a>
        </div>
        <footer>
            <div class="innerFooter ">
                <div class="socialLinks">
                    <ul>
                        <li class="socialItems">
                            <a href="https://www.facebook.com/"> <img src="images/facebook.png" alt="" width="40px"> </a>
                        </li>
                        <li class="socialItems">
                            <a href="https://www.instagram.com/"> <img src="images/insta.png" alt="" width="45px"> </a>
                        </li>
                        <li class="socialItems">
                            <a href="#"> <img src="images/gmai.png" alt="" width="45px"> </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class="outterFooter">
                © Copyright 2021 Utopia survey. All rights reserved
                <br>
                <a href="#">hegree@example.com</a>
            </div>





            <!-- <div class="CopyRight">
          <p align=center style="color:white">© Copyright 2021 Utopia survey. All rights reserved. <br>
            <a href="#r">hegree@example.com</a></p>

        </div> -->


        </footer>
    </body>

    </html>