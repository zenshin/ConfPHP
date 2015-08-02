<?php
// override lib settings
// more details here: http://captcha.com/doc/php/howto/captcha-configuration.html

$LBD_CaptchaConfig = CaptchaConfiguration::GetSettings();

$LBD_CaptchaConfig->CodeLength = CaptchaRandomization::GetRandomCodeLength(3, 5);
