<?php
global $menus;
$menus = array();

function menu($name, $link_to_current = false) {
	?><ul id="nav"><?php
		global $menus;
		$choices = $menus[$name];
		foreach ($choices as $choice) {
			$label = $choice[0];
			$path = $choice[1];
			echo '<li>';
			if (!$link_to_current && ((isset($selected_nav) && $selected_nav == $label) || $_SERVER['REQUEST_URI'] == $path)) {
				?><span class="selected"><?php echo $label; ?></span><?php
			} else {
				echo link_to($label, $path);
			}
			echo '</li>';
		}
	?></ul><?php
}

function define_menu($name, $choices) {
	global $menus;
	$menus[$name] = $choices;
}
?>