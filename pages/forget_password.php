
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial,scale=1">
    <title>Reset password</title>
    <link rel="stylesheet" href="../css/header-footer.css">
    <link rel="stylesheet" href="../css/Login.css">
    <script defer src="../scripts/loginTrial.js"></script>
</head>

<body topmargin=0px leftmargin=30% rightmargin=0px bottommargin=0px>

    <div class="container">
      
        <div id="wrap">
            <form id="form" method="POST" action="../php/verification.php?">
                <h1>Reset your password</h1>

             <div class="input-control">
                 <label for="email">Email</label>
                 <input id="email" name="email" type="text">
             </div>

            
            <div class="input-control">
                <label for="password" > your new password </label>
                <input id="password" name="password" type="password">
        
            </div>
            <div class="input-control">
                 <label for="password" > confirm password </label>
                 <input id="password" name="password" type="password">
    
            </div>
            <input id="password" name="forget_password" type="hidden" value="forget_password">
    
            <button type="submit" name="button">Reset</button>
             </form>  
    </div>
    <!-- end wrap div --> 

</body>
<?php
include "../includes/footer.php";
?> 

</html>