<?php  
require_once 'bootstrap.php';

$smarty = new Template();
$smarty->init();

$rb = new ORM();
$rb->init();

$alldocs = array();
$query = $_REQUEST['q'];
Logger::Save("search.php", $query);

// Expand the query
$search = new Search();
$query = $search->expand($query);

preg_match_all("~\w+~", $query, $words);
$alldocids = "";
foreach($words[0] as $word) {
	$docids = $rb->getCell("SELECT document_ids FROM inverted_index WHERE word = '$word'");
	if ($docids == '') continue;
	$eachdoc = explode(",", $docids);
	foreach($eachdoc as $id) {
		if (strstr($alldocids, $id) === false) $alldocids .= $id.",";
	}
}
$alldocids = substr($alldocids, 0, -1);

$docs = $rb->getAll("SELECT * FROM document WHERE id IN ($alldocids)");
$smarty->assign('word', $_REQUEST['q']);
$smarty->assign('docs', $docs);
$smarty->display('search.htm');
