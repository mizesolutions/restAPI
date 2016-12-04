<?php
header("Access-Control-Allow-Origin: *");
header("Cache-Control: no-cache, must-revalidate");

$url = $_SERVER['HTTP_REFERER'];
$usr = $_POST["uname"];
$psw = $_POST["psw"];

require_once "../format_function/yearDate_function.php";

if($usr == $us && $psw == $pa) {
  header('Location: adminDoc.html');
  exit();
} else {
  header('Location:'.$url);
  exit();
}

?>
