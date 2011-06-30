<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;
session_start();
date_default_timezone_set('Europe/Berlin');

$smarty->debugging = false;
$smarty->caching = false;
$myFile = "special_offer.txt";

// Login
if(isset($_POST['user']) && isset($_POST['password'])){
  if ($_POST['user'] == 'cajovna' && $_POST['password'] == 'heslo'){
    $_SESSION['user'] = true;
  }else{
    $_SESSION['user'] = false;
  }
}
// Logout or first acces to admin page
if(isset($_POST['logout']) || !isset($_SESSION['user'])){
  $_SESSION['user'] = false;
}

$login = $_SESSION['user'];

// Change special offer
if($login == true && isset($_POST['special_offer'])){
  $fh = fopen($myFile, 'w') or die("can't open file");
  $stringData = $_POST['special_offer'];
  fwrite($fh, $stringData);
  fclose($fh);
}

if($login){
  $lines = file($myFile);

  // Loop through our array, show HTML source as HTML source; and line numbers too.
  foreach ($lines as $line_num => $line) {
    $special_offer .= $line;
  }
  $smarty->assign('special_offer', $special_offer);
}




$smarty->assign('login', $login);

$smarty->display('admin.tpl');

?>