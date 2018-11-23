<?php
session_start();
require "Utilities.php";

if ( !empty($_SESSION['user']))
{
	header("Location: profil.php");
}

$errors = [];

$error_msg = !empty($_SESSION['error'])?"Veuillez vous identifier d'abord !":"";

if( isset($_POST['connexion']) )
{
	extract($_POST);

	if ( empty($id) )
	{
		$errors['id'] = "Veuillez renseigné l'identifiant";
	}

	if ( empty($pwd) )
	{
		$errors['pwd'] = "Veuillez renseigné le mot de passe";
	}

	if( empty($errors) ) 
	{
		$_SESSION['user']['username'] = $id;
		$_SESSION['user']['password'] = $pwd;
		// Possibilité de faire une connexion à la base de données et de check les informations de l'utilisateur
		// est ce que l'utilisateur existe ?
		// est ce que le mdp correspond à l'identifiant saisi ? etc...
		header("Location: profil.php");
	}
}
require "connexion.view.php";
