<?php
$email = Input::get ('email');
$subject = Input::get ('subject');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?>
<h1>Nous avons été contacté par: </h1>

<p>
    Email address: <?php echo ($email);?> <br>
    Subject: <?php echo ($subject); ?><br>
    Message: <?php echo ($message);?><br>
    Date: <?php echo($date_time);?><br>
    User IP address: <?php echo($userIpAddress);?><br>
</p>