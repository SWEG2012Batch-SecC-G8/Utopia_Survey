<?php

$to = "lakewmehari@yahoo.com";
$subject = "This is subject";
$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline.</h1>";
$header = "From:meharitesfaye93@gmail.com \r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
$retval = mail ($to,$subject,$message,$header);
if( $retval == true ) {
   echo "Message sent successfully...";
}else {
   echo "Message could not be sent...";
}

// $to = 'meharithegreat@gmail.com'; 
// $from = 'meharitesfaye93@gmail.com'; 
// // $fromName = 'Utopia survey'; 
 
// $subject = "Send HTML Email in PHp"; 
 
// $htmlContent = ' 
//     <html> 
//     <head> 
//         <title>Welcome to Utopia</title> 
//     </head> 
//     <body> 
//         <h1>Thanks you for joining with us!</h1> 
//         <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
//             <tr> 
//                 <th>Name:</th><td>Utopia</td> 
//             </tr> 
//             <tr style="background-color: #e0e0e0;"> 
//                 <th>Email:</th><td>contact@Utopia.com</td> 
//             </tr> 
//             <tr> 
//                 <th>Website:</th><td><a href="http://www.localhost/github/survey/login.php">www.Utopia.com</a></td> 
//             </tr> 
//         </table> 
//     </body> 
//     </html>';  
// // Set content-type header for sending HTML email 
// $headers = "MIME-Version: 1.0" . "\r\n"; 
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// // Additional headers 
// // $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
 
// // Send email 
// if(mail($to, $subject, $htmlContent, $headers)){ 
//     echo 'Email has sent successfully.'; 
// }else{ 
//    echo 'Email sending failed.'; 
// }
   //  }else
   //  {
   //    echo "You have already registered with us. Check Your email box and verify email.";
   //  }
   // }

?>