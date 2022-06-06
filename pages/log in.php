<?php
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial,scale=1">
    <title></title>
    <link rel="stylesheet" href="../css/header-footer.css">
    <link rel="stylesheet" href="../css/Login.css">
    <script defer src="../scripts/loginTrial.js"></script>
</head>

<body topmargin=0px leftmargin=0px rightmargin=0px bottommargin=0px>

    <div class="container">
    
        <form id="form" method="POST" action="">

        <?php
        $fulurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (strpos($fulurl,"inactive=yes")){ 
            $error="your acount is inactive!\n Please activate using the email we have sent to you";
            echo "<div class='input-control'id='error' color='red'>$error</div>";
        }
        ?>
            <h1>Login To Your Account</h1>

            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="password" >  </label>
                <input id="password" name="password" type="password">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <a href="accountRecovery1.html">
                    <p>Forgot your password?</p>
                </a>
            </div>
            <button type="submit" name="button">Log in</button>

            <div class="input-control">
                <p>Create new accounts? <a style="text-decoration:none" href="registration page.html">sign up!</a> </p>
            </div>
        </form>
   
    </div>
</body>

</html>