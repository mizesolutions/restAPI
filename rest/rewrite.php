<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$url = $_SERVER['HTTP_REFERER'];
$usr = $_POST["uname"];
$psw = $_POST["psw"];

require_once "../../format_function/yearDate_function.php";

if($usr == $us && $psw == $pw) {
  header('Location: adminDoc.html');
  exit();
} else {
  header('Location:'.$url);
  exit();
}

?>
