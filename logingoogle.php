<?php
session_start();
require_once('loginsocial/settings.php');
require 'dbconnect.php';
		$page = trim($_GET['page']);
		$page = strip_tags($page);
		$page = htmlspecialchars($page);
		
		if(strlen($page)<3){
			
			$page = 'perfil';
			
		}
		
header('Location: https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode('https://vips.com.mx/loginsocial/gauthlogin.php?page='.$page) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online');
?>