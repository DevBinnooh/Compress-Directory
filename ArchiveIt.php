<?php
/******** Includes *********/
//var_dump(realpath(dirname(__FILE__)));
$currentPath = realpath(dirname(__FILE__));
require_once $currentPath.DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."Zip.php";

/******* Targets *********/
$src = $currentPath.DIRECTORY_SEPARATOR."TestInput.zip";
$dst = $currentPath.DIRECTORY_SEPARATOR."output";

$params = array ('add_path'=> $dst);

/******** Extraction ******/
$Archive = new Archive_Zip($src);
$Archive->extract($params);
            

?>