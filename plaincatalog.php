<?php  
require_once 'bootstrap.php';

$smarty = new Template();
$smarty->init();

$rb = new ORM();
$rb->init();

$doc = $rb->getRow("SELECT title, path FROM document WHERE id = ".$_REQUEST['id']);
$contents = file_get_contents($doc['path']);

$q = '';
$matches = 0;
if (isset($_REQUEST['q'])) {
	$q = $_REQUEST['q'];
	
	$search = new Search();
	$newq = $search->expand($q);
	$ret = $search->search($contents, $newq);
	
	$contents = $ret['corpus'];
	$matches = $ret['count'];
}

$smarty->assign('matches', $matches);
$smarty->assign('q', $q);
$smarty->assign('id', $_REQUEST['id']);
$smarty->assign('title', $doc['title']);
$smarty->assign('contents', $contents);
$smarty->display('plaincatalog.htm');
