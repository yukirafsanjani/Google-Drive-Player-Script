<?php
error_reporting(0);
include "curl_gd.php";

if($_POST['submit'] != ""){
	$url = $_POST['url'];
	$linkdown = Drive($url);
	$file = '[{"type": "video/mp4", "label": "HD", "file": "'.$linkdown.'"}]';
}
?>

