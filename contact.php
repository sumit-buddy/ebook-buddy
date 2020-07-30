<?php

if (isset($_POST['submit'])) {
  
  $name=$_POST['submit'];
  $mailForm=$_POST['email'];
  $message=$_POST['message'];
  
  $mailTo="sumit143deny@gmail.com";
  $header="form: ".$mailFrom;
  $txt="You have received an email from ".$name.".\n\n".$message;
  
  mail($mailTo,$txt,$headers);
  headers("Location: index.php?mailsend");
  
}
?>

