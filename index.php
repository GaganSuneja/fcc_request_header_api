<?php 
ini_set('display_errors', true);

error_reporting(E_ALL);

$hey = $_SERVER['HTTP_USER_AGENT'];

//Matching the os using RegEx.

$yo = preg_match("/\((.[^\)]*)\)/",$hey,$match);


$M = $match[0];

$m = substr($M,1,strlen($match[0])-2);


$ln =  strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'],',',TRUE);
//outputing the ip address and language using $_SERVER suoerglobal variables
$answer = array("ipaddress"=>$_SERVER['REMOTE_ADDR'],"language"=>$ln,"software"=>$m);

echo json_encode($answer);

?>