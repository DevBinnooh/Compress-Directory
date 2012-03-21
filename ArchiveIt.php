<?php
//var_dump(realpath(dirname(__FILE__)));
$currentPath = realpath(dirname(__FILE__));
require_once $currentPath.DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."Archive.php";

$src = "TestInput.zip";
$dst = $currentPath.DIRECTORY_SEPARATOR."output";

$Archive = new File_Archive();
$Archive->extract($src, $dst);
            

?>
