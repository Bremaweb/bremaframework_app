<?php
global $user;
if ( $_POST['login'] ) {
	if ( $user->login($_POST['username'],$_POST['password']) ){
		// login successful
		header("location: " . SITE_URL . $_POST['redirect']);
	} else {
		// login failed
		$_SESSION['error'] = "Incorrect e-mail or password!";
		header("location: " . SITE_URL . "/login");
	}
}

if ( $_GET['logout'] ){
	$user->logout();
}

?>