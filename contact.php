<?php
if"email" variable is filled out, send email   if (isset($_REQUEST['email']))  {
  Email information   $admin_email = "sumit143deny@gmail.com";   $email = $_REQUEST['email'];      $comment = $_REQUEST['message'];
  send email   mail($admin_email, "$subject", $comment, "From:" . $email);
  Email response   echo "Thank you for contacting us!";   } 
?>