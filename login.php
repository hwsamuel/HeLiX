<?php  
require_once 'bootstrap.php';

$msg = '';
if (isset($_POST['login'])) {
  $session = new Session();
  $session->init();

  if ($session->isValidLogin($_POST['username'], $_POST['password'])) {
    $session->logIn();
    $session->redirectAdmin();
  } else {
    $msg = 'The login details were incorrect';
  }
}

$smarty = new Template();
$smarty->init();
$smarty->assign('msg', $msg);
$smarty->display('login.htm');
