<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;

date_default_timezone_set('Europe/Berlin');

define(FACEBOOK_APP_ID, "162182283836091");
define(FACEBOOK_SECRET, "2ccacdbfffb6448b40a538110244fd7a");

$access_token_url = "https://graph.facebook.com/oauth/access_token";
$parameters = "grant_type=client_credentials&client_id=" . FACEBOOK_APP_ID . "&client_secret=" . FACEBOOK_SECRET;
$access_token = file_get_contents($access_token_url . "?" . $parameters);

$apprequest_url = "https://graph.facebook.com/171895902852817/events?" . $access_token;
$result = file_get_contents($apprequest_url);
$events = array();
foreach (json_decode($result)->{'data'} as $event){
	$date_int = strtotime($event->{'start_time'});
	$date = date_parse($event->{'start_time'});
	if($date_int > strtotime("now")){
		$date_string = $date["day"] . "." . $date["month"] . "." . $date["year"];
		$events[] = array("start" => $date_string , "name" => $event->{'name'});
	}
}


$smarty->assign('events', $events);

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;


$myFile = "special_offer.txt";
$lines = file($myFile);

foreach ($lines as $line_num => $line) {
  $special_offer .= $line."<br/>";
}
$smarty->assign('special_offer', $special_offer);


$smarty->assign('page', 'index');
$smarty->assign('title', 'Úvodní stránka');
$smarty->assign('description', '');
$smarty->assign('keywords', '');
$smarty->display('index.tpl');

?>
