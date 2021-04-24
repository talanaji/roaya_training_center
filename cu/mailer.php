<?php
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "as3ad.mansour@gmail.com");
// load the variables form address bar
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];
$from = $_REQUEST["from"];
$verif_box = $_REQUEST["verif_box"];

// remove the backslashes that normally appears when entering " or '
//$message = stripslashes($message); 
//$subject = stripslashes($subject); 
//$from = stripslashes($from); 

//	mail("as3ad.mansour@gmail.com", 'Online Form: '.$subject, $_SERVER['REMOTE_ADDR']."\n\n".$message, "From: $from");

$to_email = "as3ad.mansour@gmail.com";
   $subject = "Simple Email Test via PHP";
   $body = "Hi,nn This is test email send by PHP Script";
   $headers = "From: talanaji@gmail.com";
 
   if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>E-Mail Sent</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style></head>

<body>
Email sent. Thank you.<br />
<br />
Return to <a href="/">home page</a> ? 
</body>
</html>
