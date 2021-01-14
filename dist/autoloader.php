<?php

spl_autoload_register('autoloader');

function autoloader ($className) {
	$path = 'classes/';
	$extension = '.class.php';
	$filename = $path . $className . $extension;

	if(!file_exists($filename)) {
		return false;
	}

	include_once $path . $className . $extension;
}