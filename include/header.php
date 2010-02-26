<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>
		<?php
		if (isset($page_title) && strlen($page_title) > 0) {
			echo "$page_title - ";
		}
		?>
		Site Title
	</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="/stylesheets/reset.css"/>
	<link rel="stylesheet" type="text/css" href="/stylesheets/style.css"/>
</head>

<body>

<div class="container">

<?php menu('top'); ?>

<!-- body and container are closed in the footer -->