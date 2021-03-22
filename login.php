
<?php
$to = "yonajoj493@naymeo.com";
$subject = "TESTING SEND";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
