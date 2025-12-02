<?php
ini_set('max_execution_time', 600); //600 seconds = 10 minutes
ini_set('memory_limit','512M');

$rootPath = realpath('/home/aliveweb-space/www/ju.alive-web.space/tkp/');
$zip = new ZipArchive();
$zip->open('release_src.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
$files = new RecursiveIteratorIterator(
	new RecursiveDirectoryIterator($rootPath),
	RecursiveIteratorIterator::LEAVES_ONLY
);
foreach ($files as $name => $file) {
	if (!$file->isDir()) {
		$filePath = $file->getRealPath();
		$relativePath = substr($filePath, strlen($rootPath) + 1);
		$zip->addFile($filePath, $relativePath);
	}
}
$zip->close();