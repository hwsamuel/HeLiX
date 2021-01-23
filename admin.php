<?php
require_once 'bootstrap.php';

$smarty = new Template();
$smarty->init();

$session = new Session();
$session->init();
$msg = '';

// Authenticate or redirect to login
if ($session->isLoggedIn() == false) $session->redirectLogin();

if(isset($_GET['logout'])) {
  $session->logOut();
  $session->redirectLogin();
}

if (isset($_POST['title'])) {
	try {
    $target_path = "uploads/";
    $target_path = $target_path . basename($_FILES['path']['name']);
    move_uploaded_file($_FILES['path']['tmp_name'], $target_path);
    
    $indexer = new Indexer();
    $docid = $indexer->addDocument($target_path, $_POST);
    $text = file_get_contents($target_path);
    $indexer->addIndex($text, $docid);
  } catch (Exception $e) {
    $msg = $e->getMessage();
  }
  $msg = "File has been uploaded and indexed";
}

$rb = new ORM();
$rb->init();

$smarty->assign('msg', $msg);
$smarty->display('admin.htm');
