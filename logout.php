<?php

session_start();

if(isset($_POST['logout']))
{
	session_destroy();
	header('Location: index.php');
	exit();
}
else
{
	header('Location: kosztorys.php');
	exit();
}