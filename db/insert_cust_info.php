<?php
 include '../config/db_connect.php';
include '../php/account_verfiy&_forget_pass.php';

 if (null!== $_REQUEST['fname'] &&null!== $_REQUEST['email'] &&null!== $_REQUEST["password"] &&null!== $_REQUEST['birthdate'])
 { 
        $first_name = mysqli_real_escape_string($conn, $_REQUEST['fname']);
        $last_name = mysqli_real_escape_string($conn, $_REQUEST['lname']);
        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $password=password_hash($password,PASSWORD_DEFAULT);
        $job = mysqli_real_escape_string($conn, $_REQUEST['job']);
        $gender= mysqli_real_escape_string($conn, $_REQUEST['gender']);
        $birthdate= mysqli_real_escape_string($conn, $_REQUEST['birthdate']);
        $phonenumber= mysqli_real_escape_string($conn, $_REQUEST['phonenumber']);
            $sql = "INSERT INTO utopia.customer (email,firstname,lastname,password,phonenumber,job,gender,birthdate)
                    VALUES ('$email', '$first_name', '$last_name','$password','$phonenumber','$job','$gender','$birthdate')";


                    if(mysqli_query($conn, $sql)){
                    echo "Records added successfully.";
                    } 
                    else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                        }
                        
                       
            echo"<script> alert('verify your email')</script>";
            echo "<script>window.open('../pages/log in.php?email=$email','_self');
                window.open('../php/email_verify_sent.php?email=$email','width=900, height=500','_blank')</script>";
 }
 else 
 {
     header("Location:../pages/registration page.php?login=no");
 }

mysqli_close($conn);

exit();
?>