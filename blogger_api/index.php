<?php
set_include_path("../src/" . PATH_SEPARATOR . get_include_path());
require_once 'Google/Client.php';
require_once 'Google/Service/Blogger.php';

$client = new Google_Client();
$client->setApplicationName("Client_Library_Examples");
$apiKey = "AIzaSyDB_TfjKbKmGpKgJsPkt1azNGylqRqp_LI";
if ($apiKey == '<YOUR_API_KEY>') {
  echo missingApiKeyWarning();
}
$client->setDeveloperKey($apiKey);

$service = new Google_($client);