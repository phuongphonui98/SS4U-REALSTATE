<?php
	require_once __DIR__. "/../../../Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '306368003418936',
		'app_secret' => '54ffeb390954558cfaa9493efcbfe521',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>