
<?php

$to = "clshenqing@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "lucy.cao1989@gmail.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?>
