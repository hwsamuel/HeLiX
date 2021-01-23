<?php  
require_once 'bootstrap.php';

$smarty = new Template();
$smarty->init();

$rb = new ORM();
$rb->init();

$orgs = $rb->getAll("SELECT DISTINCT organization,url FROM document");

$smarty->assign('orgs', $orgs);
$smarty->display('orgs.htm');
