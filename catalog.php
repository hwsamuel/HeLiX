<?php  
require_once 'bootstrap.php';

$smarty = new Template();
$smarty->init();

$rb = new ORM();
$rb->init();

$did = $_REQUEST['id'];
$doc = $rb->getRow("SELECT timestamp, title, url, organization, type, tag, publication_year, source, path FROM document WHERE id = $did");
$contents = file_get_contents($doc['path']);

/*
$keywords = $rb->getCol("SELECT DISTINCT word FROM inverted_index WHERE document_ids Like '$did' OR document_ids Like '$did,%' OR document_ids Like '%,$did,%' OR document_ids Like '%,$did' ORDER BY Length(document_ids) DESC LIMIT 10");
*/
$q = '';
$matches = 0;
if (isset($_REQUEST['q'])) {
	$q = $_REQUEST['q'];
	Logger::Save("catalog.php", $q);
	
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
$smarty->assign('url', $doc['url']);
$smarty->assign('org', $doc['organization']);
$smarty->assign('type', $doc['type']);
$smarty->assign('tags', $doc['tag']);
$smarty->assign('year', $doc['publication_year']);
$smarty->assign('source', $doc['source']);
$smarty->assign('last_indexed', $doc['timestamp']);
//$smarty->assign('keywords', $keywords);
$smarty->assign('contents', $contents);

$smarty->display('catalog.htm');
