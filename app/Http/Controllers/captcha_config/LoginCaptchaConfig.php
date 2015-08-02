<?php
// override lib settings
// more details here: http://captcha.com/doc/php/howto/captcha-configuration.html

$LBD_CaptchaConfig = CaptchaConfiguration::GetSettings();

$imageStyles = array(
  ImageStyle::Chipped, 
  ImageStyle::Negative, 
);
$LBD_CaptchaConfig->ImageStyle = CaptchaRandomization::GetRandomImageStyle($imageStyles);

