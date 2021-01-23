<?php  
require_once 'bootstrap.php';

$smarty = new Template();
$smarty->init();

$smarty->display('about.htm');
