<?php
$message = "
<html>
<head>
<title>This is a test HTML email</title>
</head>
<body>
<p>Test email. Please ignore.</p>
</body>
</html>
";

$to = 'chirag@xxxx.com';
$subject = "This is a test HTML email 9.49";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <admin@xxxx.com>' . "\r\n";
$headers .= 'Reply-To: info@xxxx.com' . "\r\n";
if(mail($to,$subject,$message,$headers)){
    echo "Email sent";
} else {
    echo "Email sending failed";
}

?>