<?php
define('FB_APPID','381521502018662');
define('FB_APPSECERT','0413f541047b4f13f3d8644949e6f622');

define('FACEBOOK_SDK_V4_SRC_DIR', 'Facebook/src/Facebook/');
require __DIR__ . '/Facebook/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;

FacebookSession::setDefaultApplication(FB_APPID, FB_APPSECERT);