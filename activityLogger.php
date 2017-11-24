<?php
function getDirectory() {
	return dirname(__FILE__);
}

function getAbsolutePath($filename) {
	return getDirectory().'/'.$filename;
}

function logDownload($filename) {
	if (!is_writable(getDirectory())) {
		return;
	}
	
	$logPath = absolutePath('activity.log');
	
	$entry = "\n".date('l d/m/y g:i A').' - '.$filename;
	
	$fh = fopen($logPath, 'a');
	fwrite($fh, $entry);
	fclose($fh);
}

if (!isset($_GET['file'])) {
	exit();
} else {
	$path = $_GET['file'];
	unset($_GET['file']);
	if (!empty($_GET['file'])) {
		$path .= '&'.implode('&', array_keys($_GET));
	}
	
	$file = getAbsolutePath($path.'.mp3');
	if (!file_exists($file)) {
		header("HTTP/1.0 404 Not Found");
		exit();
	}
}
$filename = basename($file);
logDownload($filename);

header('Content-Description: File Transfer');
header('Content-Type: audio/mpeg');
header('Content-Disposition: attachment; filename='.$filename);
header('Content-Length: '.filesize($file));
header('Expires: 0');
header('Pragma: public');
header('Cache-Control: public');

readfile($file);