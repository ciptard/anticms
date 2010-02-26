<?php
require_once('menus.php');
require_once('urls.php');
require_once('../include/site_config.php');
if (file_exists('../include/menu_config.php')) {
	require_once('../include/menu_config.php');
}
ob_start();
$file = '../pages/' . $_GET['page'] . '.php';
if (file_exists($file)) {
	require $file;
} else {
	header("HTTP/1.0 404 Not Found");
	if (file_exists('../pages/404.php')) {
		require '../pages/404.php';
	} else {
		?><h1>File not found</h1><?php
	}
}
$content = ob_get_clean();

require '../include/header.php';
echo $content;
require '../include/footer.php';
?>