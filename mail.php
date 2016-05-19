<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "dan@prutter.nu";
$subject = "kontakt fra cbp";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

header( 'HTTP/1.1 301 Moved Permanently' );
header( 'Location: ./contact.php' );
exit;

?>