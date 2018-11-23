<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Connexion</h1>
		<div class="alert-warning">
			<?= $error_msg ?>
		</div>
		<form method="POST">
			<div class="form-group">
				<label for="username" class="form-label">Identifiant</label>
				<input type="text" name="id" class="form-control"  placeholder="username">
				<div class="alert-danger">
					<?php echo Utilities::display_error_message("id", $errors) ?>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="form-label">Mot de passe</label>
				<input type="password" name="pwd" class="form-control" placeholder="username">
				<div class="alert-danger">
					<?php echo Utilities::display_error_message("pwd", $errors) ?>
				</div>
			</div>

			<div class="form-group">
				<input type="submit" name="connexion" class="btn btn-primary" value="me connecter" placeholder="username">
			</div>
		</form>
	</div>
</body>
</html>