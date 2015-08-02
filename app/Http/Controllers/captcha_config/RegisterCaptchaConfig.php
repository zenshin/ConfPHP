<?php
// override lib settings
// more details here: http://captcha.com/doc/php/howto/captcha-configuration.html

$LBD_CaptchaConfig = CaptchaConfiguration::GetSettings();

$LBD_CaptchaConfig->CodeLength = 6;
$LBD_CaptchaConfig->ImageWidth = 250;
$LBD_CaptchaConfig->ImageHeight = 50;
