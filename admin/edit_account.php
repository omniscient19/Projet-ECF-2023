<!DOCTYPE html>
<?php
	// require_once 'validate.php';
	// require 'people.php';
?>
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
<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Compte / Changer de Compte</div>
                    <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Se déconnecter</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Accueil</a></li>
			<li class = "active"><a href = "account.php">Comptes</a></li>
			<li><a href = "reserve.php">Réservation</a></li>
			<li><a href = "room.php">Chambre</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Compte / Changer de Compte</div>
				<?php
					// $query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
					// $fetch = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "edit_query_account.php?admin_id=<?php echo $fetch['admin_id']?>">
						<div class = "form-group">
							<label>Nom </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['name']?>" name = "name" />
						</div>
						<div class = "form-group">
							<label>Prénom </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Email</label>
							<input type = "email" class = "form-control" value = "<?php echo $fetch['email']?>" name = "email" />
						</div>
						<div class = "form-group">
							<label>Mot de passe </label>
							<input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Sauvegarder les modifications</button>
						</div>
					</form>
				</div>
			</div>
		</div>
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