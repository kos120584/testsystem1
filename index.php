<?php
	session_start();

	$id = 'main';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	$route = 'pages/'.$id.'.php';

	include_once($route);
	include_once('tpl/base.php');