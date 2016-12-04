<?php
session_start();
require '../vendor/autoload.php';

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;
use Parse\ParseSessionStorage;

$app_id='myAppIdasdjb$$hgasvdju6^&^';
$master_key='myMasterKeykasgfuasgds564654SGAV';
ParseClient::initialize( $app_id, '',$master_key);
// Users of Parse Server will need to point ParseClient at their remote URL and Mount Point:
ParseClient::setServerURL('http://bloodbuddies.herokuapp.com','parse');
$currentUser = $_SESSION['parseData']['user'];
if ($currentUser) {
echo $currentUser->getuserName();
session_destroy();
}
else {
echo "LLMM";
}
?>
