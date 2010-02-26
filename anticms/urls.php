<?php
function abs_path($path) {
	global $config;
	return $config['root'] . '/' . $path;
}

function link_to($text, $href) {
	if (strrpos($href, '/') === 0) {
		$href = abs_path(ltrim($href, '/'));
	}
	return "<a href=\"{$href}\">{$text}</a>";
}
?>