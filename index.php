<?php  
require_once 'bootstrap.php';

$smarty = new Template();
$smarty->init();

$rb = new ORM();
$rb->init();

$doctags = $rb->getAll("SELECT DISTINCT tag, id FROM document LIMIT 10");

/*
$keywords = $rb->getCol("SELECT DISTINCT word FROM inverted_index ORDER BY Length(document_ids) DESC LIMIT 20");
$keywords = implode(" ", $keywords);
$lemmatizer = new Lemmatizer();
$keywords = $commonwords = $lemmatizer->filterCommonWords($keywords);
$keywords = explode(" ", $keywords);
$smarty->assign('keywords', $keywords);
*/

$smarty->assign('doctags', $doctags);
$smarty->display('index.htm');
