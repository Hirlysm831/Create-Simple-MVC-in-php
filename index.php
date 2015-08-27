<?php
// index.php file
include_once("controller/StudentController.php");
$controller = new StudentController();

if ( isset($_REQUEST['type']) ) {
  switch ( $_REQUEST['type'] ) {
    case "register":
      include 'view/register.php';
      break;
    case "saveUser":
      $controller->saveUserDetails($_REQUEST);
      break;
    case "checkLogin":
      $controller->checkLogin($_REQUEST);
      break;
    default:
       include 'view/login.php';
       break;
  }

} else {
  echo "<h1> Page to come soon.."; exit;
}