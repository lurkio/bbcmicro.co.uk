<?php
ini_set('session.cookie_httponly', True);
session_start();
$params = session_get_cookie_params();
//print_r($params);
setcookie("PHPSESSID", session_id(), 0, $params["path"], $params["domain"], $params["secure"], true );
if (!array_key_exists('bbcmicro',$_SESSION)) {
	if (isset($_GET["id"])) {
		header("Location: login.php?id=".$_GET["id"]);
	}
	else {
		header("Location: login.php");
	}
	exit;
}
?>
