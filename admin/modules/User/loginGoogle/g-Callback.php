<?php
	require_once "config.php";
	require_once __DIR__. "/../../../autoload/autoload.php";
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		echo "<script>alert('Vui lòng trở lại màn hình đăng nhập!');location.href='/../../../../SS4UREALSTATE/dang-nhap.php'</script>";
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];
	$_SESSION['phone'] = $userData['phone'];
	$_SESSION['name'] = $userData['displayName'];
	header('Location: LoginGoogle.php');
	exit();
?>