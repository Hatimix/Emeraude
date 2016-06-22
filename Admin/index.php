<?php
require_once '../App/Autoloader.php';
Autoloader::register();

$page = isset($_GET['page'])? $_GET['page']: 'register';
$askedPage = ucfirst($page).'.php';
ob_start();
if (file_exists("../Admin/$askedPage")){
    require_once "../Admin/$askedPage";
} else {
    require_once '../Pages/404.php';
}
$adminContent = ob_get_clean();
require_once '../Pages/Template/Admin.php';