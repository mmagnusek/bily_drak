<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;

date_default_timezone_set('Europe/Berlin');

$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


$smarty->assign('page', 'kde_nas_najdete');
$smarty->assign('title', 'Kde nás najdete');
$smarty->assign('description', '');
$smarty->assign('keywords', '');
$smarty->display('kontakt.tpl');

?>
