<?php
require 'send_mail.php';

$receiverMail='ariefcahya14@gmail.com';
$receiverName='arief cahya';
$mailSubject='test';

ob_start();
include '../mailtemplate/new_task.php';
$mailMessage = ob_get_clean();

echo $mailMessage;
return 0;
SendMail($receiverMail, $receiverName, $mailSubject, $mailMessage);

?>