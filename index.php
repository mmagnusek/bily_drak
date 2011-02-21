<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;

date_default_timezone_set('Europe/Berlin');

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;


$smarty->assign('page', 'index');
$smarty->assign('title', 'Úvodní stránka');
// $smarty->assign('image_number', );
$smarty->display('index.tpl');

?>
