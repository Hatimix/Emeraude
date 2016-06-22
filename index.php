<?php
require_once 'App/Autoloader.php';
Autoloader::register();

$page = isset($_GET['page'])? $_GET['page']: 'accueil';
$askedPage = ucfirst($page).'.php';
ob_start();
if (file_exists("Pages/$askedPage")){
    require_once "Pages/$askedPage";
} else {
    require_once 'Pages/404.php';
}
$content = ob_get_clean();
require_once 'Pages/Template/Default.php';