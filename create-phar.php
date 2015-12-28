<?php
$srcRoot = __DIR__;
$buildRoot = __DIR__ . '/build';

$phar = new Phar(
    $buildRoot . "/myapp.phar",
    FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "myapp.phar"
);

$phar["public/index.php"] = file_get_contents($srcRoot . "/public/index.php");
$phar["public/test.php"] = file_get_contents($srcRoot . "/public/test.php");
$phar[".atoum.php"] = file_get_contents($srcRoot . "/.atoum.php");
$phar->setStub($phar->createDefaultStub("public/index.php"));