<?php
	require('session.php');
	session_start();
	session_unset();
	session_destroy();
	header("Location:loggin.php", false);

?>