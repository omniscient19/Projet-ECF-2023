<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'people.php';
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
        
        <link href="assets/images/logo/logo.png" rel="shortcut icon">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/ionicons.min.css" rel="stylesheet">
        <link href="assets/css/food-flaticon.css" rel="stylesheet">
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/plugin.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai&family=Lora&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    </head> 
        <body>    
                <div class="container" style="margin-left: auto; margin-right: auto;">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="well well-sm">
                                <form class="form-horizontal" action="" method="post">
                                <fieldset>
                                    <h5>Réservation</h5>
                                    <!-- Number input-->
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name" style="color: black;">Combien de couverts</label>
                                        <div class="col-md-9">
                                            <input id="number" name="number" type="number" placeholder="Combien de couverts" class="form-control">
                                        </div>
                                    </div>
     
                                    <!-- date input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="date" style="color: black;">La date</label>
                                        <div class="col-md-9">
                                            <input id="date" name="date" type="date"  class="form-control">
                                        </div>
                                    </div>
                                    <!-- hour input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="date" style="color: black;">L'heure</label>
                                        <div class="col-md-9">
                                            <input id="time" name="time" type="time"  class="form-control">
                                        </div>
                                    </div>
     
                                    <!-- Message body -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="message" style="color: black;">Indiquez ici vos allergies</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="message" name="message" placeholder="Merci de notifier ici si vous avez des allergies alimentaires." rows="5"></textarea>
                                        </div>
                                    </div>
     
                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="--bs-secondary-color btn-lg">Résever</button>
                                        </div>
                                    </div>
                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>            
        </body>
    </html>
