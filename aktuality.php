<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;

date_default_timezone_set('Europe/Berlin');

$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


$smarty->assign('page', 'aktuality');
$smarty->assign('title', 'Aktuality');
$smarty->display('aktuality.tpl');

?>
