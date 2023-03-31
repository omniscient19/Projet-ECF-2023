
<!DOCTYPE html>
<?php //require_once "database.php"?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Restaurant le Quai Antique</title>
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/animate.css" rel="stylesheet">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="../assets/css/ionicons.min.css" rel="stylesheet">
        <link href="../assets/css/food-flaticon.css" rel="stylesheet">
        <link href="../assets/css/magnific-popup.css" rel="stylesheet">
        <link href="../assets/css/owl.carousel.css" rel="stylesheet">
        <link href="../assets/css/plugin.css" rel="stylesheet">
        <link href="../assets/css/styles.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai&family=Lora&family=Montserrat:wght@300&display=swap" rel="stylesheet">
	</head>
<body>
	<div class = "container">
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					<h4>Administrateur</h4>
				</div>
				<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "index.php">HOME</a></li>
			<!-- <li class = "active"><a href = "account.php">Comptes</a></li> -->
			<!-- <li><a href = "reserve.php">Réservation</a></li>			 -->
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "">Compte / Créer un compte</div>
				<br />
				    <div class = "col-md-4">	
					    <form method = "POST">
						<div class = "form-group">
							<label>Email </label>
							<input type = "email" class = "form-control" name = "email" />
						</div>
						<div class = "form-group">
							<label>Mot de passe </label>
							<input type = "password" class = "form-control" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "add_account" class = "btn btn-success form-control"><i class = "glyphicon glyphicon-save"></i> Enregistré</button>
						</div>
					</form>
					<?php //require_once 'login.php'?>
				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>	
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Le Quai Antique 2023 </label>
	</div>
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>	
</body>
</html>