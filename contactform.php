<?php
if(isset($_post['submit'])){
  $name = $_post['name'];
  $subject = $_post['subject'];
  $mailForm = $_post['mail'];
  $message = $_post['message'];

  $mailTo = "akhobi47@gmail.com";
  $headers = "From: ".$mailForm;
  $txt = "you have recived an Email form ".$name.".\n\n".$message;


  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend")
}
