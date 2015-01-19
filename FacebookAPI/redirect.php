<?php

require 'configure.php';

$helper = new FacebookRedirectLoginHelper();
try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
  var_dump($ex->getMessage());
} catch(\Exception $ex) {
  // When validation fails or other local issues
  var_dump($ex->getMessage());
}
if ($session) {
  var_dump('Logged in');
}