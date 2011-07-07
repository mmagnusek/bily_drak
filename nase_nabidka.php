<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;

date_default_timezone_set('Europe/Berlin');

$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


$smarty->assign('page', 'nase_nabidka');
$smarty->assign('title', 'Aktuální nabídka čajů');
$smarty->assign('description', 'Na této stránce naleznete aktuální nabídku čajů, vodních dýmek a dalších pochutin v Čajovně u Bílého draka.');
$smarty->assign('keywords', '');
$smarty->display('nabidka.tpl');

?>
