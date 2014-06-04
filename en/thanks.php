<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

$sender = $_GET['sender'];
$email = $_GET['email'];
$message = $_GET['message'];
$header = 'From: pernillelund09@gmail.com';
mail('pernillelund09@gmail.com', 'Crooked Films has an enquiry', 'You have an enquiry from ' . $sender . ' (' . $email . "):\n\n" . $message . "\n\nPlease get back to them asap.", $header);

echo '<div><br/><br/><br/><p>TAK!</p></div>';
?>