<?php  
require_once 'bootstrap.php';

$smarty = new Template();
$smarty->init();

$rb = new ORM();
$rb->init();

$docids = $rb->getAll("SELECT * FROM document");
$docs = array();
$j = 0;
foreach($docids as $doc) {
	$docs = array_merge($docs, 
	array($j =>
		array(
			"id" => $doc['id'], 
			"title" => $doc['title'],
			"tag" => $doc['tag'],
			"organization" => $doc['organization'],
			"publication_year" => $doc['publication_year'],
			"content" => file_get_contents($doc['path'])
		)
	));
	$j++;
}

$smarty->assign('docs', $docs);
$smarty->display('catalogs.htm');
