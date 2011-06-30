<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;

date_default_timezone_set('Europe/Berlin');

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
