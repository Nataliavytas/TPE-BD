<?php
require_once "controller/controller.php";

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

$action = $_GET["action"];

$controller = new controller();
$partesURL = explode("/", $action);



if($action == ''){
    $controller->Home();
}elseif ($action == '') {
    $visitController->();

}
