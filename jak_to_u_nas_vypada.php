<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;

date_default_timezone_set('Europe/Berlin');

$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


$smarty->assign('page', 'jak_to_u_nas_vypada');
$smarty->assign('title', 'Jak to u nás vypadá');
$smarty->assign('description', '');
$smarty->assign('keywords', '');
$smarty->display('gallery.tpl');

?>
