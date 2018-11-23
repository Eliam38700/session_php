<?php
session_start();
if (empty($_SESSION['user']) )
{
	$_SESSION['error'] = 1;
	header("Location: connexion.php");
}

$username = $_SESSION['user']['username'];
require "profil.view.php";