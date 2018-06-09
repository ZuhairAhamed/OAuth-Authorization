<?php
	session_start();

	require_once "Facebook/autoload.php";

	//Replace the app_id,app_secret with yours.
	$FB = new \Facebook\Facebook([
		'app_id' => '2224150927600855',
		'app_secret' => '817fb76e568a2a0ef8f3faaf2c0e01ee',
		'default_graph_version' => 'v3.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
