<?php
$to      = $email; 
$subject = 'Signup | Verification';  
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by clicking on the url below.
 
------------------------
Username: '.$username.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://consolewars.comlu.com/verify.php?email='.$email.'&hash='.$hash.'
 
'; 
                     
$headers = 'From:noreply@consolewars.comlu.com' . "\r\n"; 
mail($to, $subject, $message, $headers);
?>