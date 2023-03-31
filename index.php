<?php
require_once 'validate.php';
require 'people.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Restaurant le Quai Antique</title>
        
        <link href="" rel="">
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
    <body data-spy="scroll">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#home">Le Quai Antique</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="page-scroll" href="#home">HOME</a></li>
                <li><a class="page-scroll" href="#about">A PROPOS</a></li>
                <li><a class="page-scroll" href="#services">SERVICES</a></li>
                <li><a class="page-scroll" href="#offer">MENU</a></li>
                <li><a class="page-scroll" href="#shop">HORAIRES</a></li>
                <li><a class="page-scroll" href="#contact">CONTACT</a></li>
                <li><a class="page-connect" href="connect.php">CONNEXION</a></li>
                
              </ul>
            </div><!-- navbar-collapse -->
          </div><!-- container-fluid -->
        </nav><!-- navbar -->
        
        <div id="home" class="home">
            <div class="bg_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_home_content text-center">
                           <div class="col-md-12">
                               <div class="main_home_item">
                                   <!-- <img src="assets/images/logo/logo.png" class="img-responsive"> -->
                                   <p>RESTAURANT AUTHENTIQUE ET ORIGINAL</p>
                                   <h1>LE QUAI ANTIQUE &nbsp;</h1>
                                   <div class="slide_sparator"></div>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="main_about_content">
                        <div class="head_title text-center">
                            <h5>Une petite histoire sur nous</h5>
                            <h2>Bienvenue au Quai Antique</h2>
                            <div class="col-md-6 col-md-offset-3">
                                <div class="section_subtitle">Nous aimons les restaurants autant que vous. C'est pourquoi nous les aidons à remplir les tables depuis 1999. Bienvenue au Quai Antique.</div>
                            </div>    
                        </div>
                        <div class="col-md-6 about_detail">
                            <h3>L'histoire</h3>
                            <p>Restaurant Installée dans les Préalpes du Nord entre les massifs des Bauges et de la Chartreuse, ici les maîtres mots sont partage et convivialité.

                                Nous sélectionnons pour vous des produits de saison, sains, directement auprès des producteurs choisis pour leur passion et leur respect du vivant.

                                Carte évolutive, elle change régulièrement au gré des arrivages et des envies de notre chef Sean ; elle se décline en petite et grande taille de plats, pour s’adapter à votre gourmandise.

                                Pour l’accompagner, une large sélection de vins dans la même éthique, axée sur le travail le plus naturel possible de la terre et du raisin.

                                Nous avons hâte de vous accueillir.
                            </p>
                            
                            <div class="chef-detail">
								<i><img src="assets/images/about-thumb.jpg" alt="About"></i>
								<span><img src="assets/images/chef-sign.png" alt="Chef Sign"></span>
								<div class="cnt">
									<h4>Arnaud Michant </h4>
									<ul>
										<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
                        </div>
                        <div class="col-md-6 about-img-block no-padding">
							<div class="col-md-12 col-sm-6 col-xs-12"><img src="assets/images/about-img1.jpg" alt="About"></div>
							<div class="col-md-12 col-sm-6 col-xs-12"><img src="assets/images/about-img2.jpg" alt="About"></div>
						</div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="surprise" class="surprise">
           <div class="bg_overlay">
            <div class="container">
                <div class="row">
                    <div class="main_surprise_area">
                        <div class="surprise_content text-center">
                            <p>Surprise pour votre assiette</p>
                            <div class="body_sparator"></div><br>
                            <a href=""><img src="assets/images/icon_white/surprise-icon.png" class="img-responsive" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </section>
        
        <div id="services" class="services">
            <div class="container">
                <div class="row">
                   <div class="head_title text-center">
                       <h5>Services</h5>
                       <h2>NOS SPECIALITES</h2>
                       <div class="body_sparator"></div>
                   </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="srv-box">
                            <div class="img-box">
                                <img src="assets/images/srv1.png" alt="Services">
                                <div class="srv-content">
                                    <span>Commander maintenant<a href="#">04.02.54.36.23</a></span>
                                </div>
                            </div>
                            <h4>Sandwiches</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="srv-box">
                            <div class="img-box">
                                <img src="assets/images/srv2.png" alt="Services">
                                <div class="srv-content">
                                    <span>Commander maintenant<a href="#">04.02.54.36.23</a></span>
                                </div>
                            </div>
                            <h4>Pizza</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="srv-box">
                            <div class="img-box">
                                <img src="assets/images/srv3.png" alt="Services">
                                <div class="srv-content">
                                    <span>Commander maintenant <a href="#">04.02.54.36.23</a></span>
                                </div>
                            </div>
                            <h4>Chers fraise</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="srv-box">
                            <div class="img-box">
                                <img src="assets/images/srv4.png" alt="Services">
                                <div class="srv-content">
                                    <span>Commander maintenant <a href="#">04.02.54.36.23</a></span>
                                </div>
                            </div>
                            <h4>Recette de taco</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="counter" class="counter">
           <div class="bg_overlay">
            <div class="container">
                <div class="head_title text-center">
                    <h5>Comptoir</h5>
                    <h2>Nous avons des repas de qualité</h2>
                    <div class="body_sparator"></div>
                </div>
                <div class="">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="counter-box">
                            <i><img src="assets/images/icon_white/counter-ic1.png" alt="counter"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="counter-box">
                            <i><img src="assets/images/icon_white/counter-ic2.png" alt="counter"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="counter-box">
                            <i><img src="assets/images/icon_white/counter-ic3.png" alt="counter"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="counter-box">
                            <i><img src="assets/images/icon_white/counter-ic4.png" alt="counter"></i>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <section id="offer" class="offer">
            <span class="top-img">
                <img class="img-responsive" src="assets/images/menu-card1.png" alt="Menu Card" />
            </span>
            
            <div class="container">
                <div class="row">
                   <div class="main_offer_area">
                    <div class="head_title text-center">
                        <h5>Combo gratuit &amp; coffret cadeau</h5>
                        <h2>Notre offre spéciale</h2>
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section_subtitle">
                            Restaurer l'authenticité de la nourriture à partir de zéro est la mission qui nous anime. La restauration est la réalisation d'un rêve.
                            </div>
                        </div>
                    </div>
                    
                    
                     <div class="col-md-12 col-sm-12">
                         
                      <ul class="menu-button-filter">
                            <li data-filter="*" class="">
                                <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-bell"></i></div>
                                <span class="r-name">Diner</span></li>
                            <li data-filter=".starter" class="tagsort-active">
                                <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-coffee"></i></div>
                                <span class="r-name">Entrées</span></li>
                            <li data-filter=".mainmenu" class="">
                                <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-breakfast"></i></div>
                                <span class="r-name">Menu principal</span></li>
                            <li data-filter=".desserts" class="">
                                <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-cupcake"></i></div>
                                <span class="r-name">Desserts</span></li>
                            <li data-filter=".drinks" class="">
                                <div class="iconBox-icon center-block"><i class="glyph-icon flaticon-dinner"></i></div>
                                <span class="r-name">Boissons</span></li>
                        </ul>
                     </div>
                    </div> 
               </div>
            </div>
            <div class="menu-items-list">
               <div class="menu-item col-sm-6 col-xs-12 starter">
                    <div class="clearfix menu-wrapper">
                        <div class="image-list col-md-3">
                            <img class="" src="assets\images\01.jpg">
                        </div>
                        <div class="col-md-9">
                            <h3 class="title manuscript">Poulet frit avec sauce</h3>
                            <span class="price">25€</span>
                            <div class="desc"><p>Filet de poulet frit croustillant, servi avec du riz sauté au wok</p></div>
                        </div>
                    </div>
                </div>
                <div class="menu-item col-sm-6 col-xs-12 starter mainmenu">
                    <div class="clearfix menu-wrapper">
                        <div class="image-list col-md-3">
                            <img class="img-responsive" src="assets/images/02.jpg">
                        </div>
                        <div class="col-md-9">
                            <h3 class="title manuscript">Salade de boeuf</h3>
                            <span class="price">18€</span>
                            <div class="desc"><p>Riz parfumé sauté à la tomate, émincé de bœuf aux oignions et légumes croquants.</p></div>
                        </div>
                    </div>
                </div>
                <div class="menu-item col-sm-6 col-xs-12 starter">
                    <div class="clearfix menu-wrapper">
                        <div class="image-list col-md-3">
                            <img class="img-responsive" src="assets/images/03.jpg">
                        </div>
                        <div class="col-md-9">
                            <h3 class="title manuscript">Brownies piqués Fraise</h3>
                            <span class="price">10.50€</span>
                            <div class="desc"><p>Délicieux brownies et ses fruits savoureux issues de l'agriculture biologique.</p></div>
                        </div>
                    </div>
                </div>
                <div class="menu-item col-sm-6 col-xs-12 drinks mainmenu">
                    <div class="clearfix menu-wrapper">
                        <div class="image-list col-md-3">
                            <img class="img-responsive" src="assets/images/04.jpg">
                        </div>
                        <div class="col-md-9">
                            <h3 class="title manuscript">Boulettes de viande</h3>
                            <span class="price">8.99€</span>
                            <div class="desc"><p>Plat de boulettes à la vapeur rempli de viande et légumes frais.</p></div>
                        </div>
                    </div>
                </div>
                <div class="menu-item col-sm-6 col-xs-12 drinks mainmenu">
                    <div class="clearfix menu-wrapper">
                        <div class="image-list col-md-3">
                            <img class="img-responsive" src="assets/images/05.jpg">
                        </div>
                        <div class="col-md-9">
                            <h3 class="title manuscript">Poulet à l'Emmentale</h3>
                            <span class="price">35.00€</span>
                            <div class="desc"><p>Assiette de poulet avec un coeur d'emmentale et légumes croquants.</p></div>
                        </div>
                    </div>
                </div>
                <div class="menu-item col-sm-6 col-xs-12 drinks mainmenu">
                    <div class="clearfix menu-wrapper">
                        <div class="image-list col-md-3">
                            <img class="img-responsive" src="assets/images/06.jpg">
                        </div>
                        <div class="col-md-9">
                            <h3 class="title manuscript">Salade à l'avocat</h3>
                            <span class="price">20.00€</span>
                            <div class="desc"><p>Assiette d'avocat frais accompagné d'assortiments de charcuteries.</p></div>
                        </div>
                    </div>
                </div>
                <div class="menu-item col-sm-6 col-xs-12 starter desserts">
                    <div class="clearfix menu-wrapper">
                        <div class="image-list col-md-3">
                            <img class="img-responsive" src="assets/images/07.jpg">
                        </div>
                        <div class="col-md-9">
                            <h3 class="title manuscript">Rôti de boeuf braisé</h3>
                            <span class="price">35.00€</span>
                            <div class="desc"><p>Rôti de boeuf braisé qui fond dans la bouche et qu’elle vous plaira.</p></div>
                        </div>
                    </div>
                </div>
                <div class="menu-item col-sm-6 col-xs-12 starter desserts">
                    <div class="clearfix menu-wrapper">
                        <div class="image-list col-md-3">
                            <img class="img-responsive" src="assets/images/08.jpg">
                        </div>
                        <div class="col-md-9">
                            <h3 class="title manuscript">Sandwich saucissons au pain frais </h3>
                            <span class="price">15.00€</span>
                            <div class="desc"><p>Pour les repas express ou les petites faims.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div id="testimonials" class="testimonials">
            <section class="bg_overlay">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <div id="testi-carousel" class="owl-carousel owl-spaced">
                            <div class="text-center">
                               <div class="thumb_testi">
                                <img class="img-responsive" src="assets/images/testimonials-01.jpg" alt="" />
                                   <h3 class="name">John</h3>
                                   <div class="town">New York</div>
                               </div>
                               <div class="desc">
                                        <p><i class="fa fa-quote-left"></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need<i class="fa fa-quote-right"></i></p>
                                </div>
                            </div>
                            
                            <div class="text-center">
                               <div class="thumb_testi">
                                <img class="img-responsive" src="assets/images/testimonials-02.jpg" alt="" />
                                   <h3 class="name">Sarah </h3>
                                   <div class="town">California</div>
                               </div>
                               <div class="desc">
                                        <p><i class="fa fa-quote-left"></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need<i class="fa fa-quote-right"></i></p>
                                </div>
                            </div>
                            
                            <div class="text-center">
                               <div class="thumb_testi">
                                <img class="img-responsive" src="assets/images/testimonials-03.jpg" alt="" />
                                   <h3 class="name">Goodall Family</h3>
                                   <div class="town">Virginia</div>
                               </div>
                               <div class="desc">
                                        <p><i class="fa fa-quote-left"></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need<i class="fa fa-quote-right"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <section id="shop" class="shop">
            <div class="container">
                <div class="row">
                    <div class="main_shop_content">
                        <div class="head_title text-center">
                            
                            <h2>HORAIRES</h2>
                            <div class="body_sparator"></div>
                        </div>
                        <div class="wrapper_shop">
                            <div class="col-md-6 shop_content">
                                <p class="desc_shop">“Le rendez-vous des gourmands. Saveurs et Terroirs, le restaurant le plus gourmand des Alpes dirigé par le chef Arnaud Michant .”</p>
                                
                                <p>Nous sommes ravis de vous proposer une expérience culinaire unique, avec des menus sophistiqués et créatifs élaborés par notre équipe de chefs talentueux dirigée par notre Chef Arnaud Michant.</p>
                            </div>
                            <div class="col-md-6 col-sm-12 shop_time">
                                <div class="col-md-6 col-sm-4">
                                   <img src="assets/images/icon_flaticon/001-restaurant.png" class="img-responsive">
                                    <ul>
                                        <li>Lundi :</li><br>
                                        <br>
                                        <li>Mardi : </li><br>
                                        <br>
                                        <li>mercredi :</li><br>
                                        <li>Jeudi : </li><br>
                                        <br>
                                        <li>Vendredi : </li><br>
                                        <li>Samedi : </li><br>
                                        <li>Dimanche : </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-4">
                                   <img src="assets/images/icon_flaticon/002-appetizer.png" class="img-responsive">
                                    <ul>
                                        <li>12:00 - 14:00</li>
                                        <li>19:00 - 22:00</li><br>
                                        <li>12:00 - 14:00</li>
                                        <li>19:00 - 22:00</li>
                                        <br>
                                        <li>Fermé</li>
                                        <br>
                                        <li>12:00 - 14:00</li>
                                        <li>19:00 - 22:00</li>
                                        <br>
                                        <li>12:00 - 14:00</li>
                                        <li>19:00 - 22:00</li>
                                        <br>
                                        <li>19:00 - 23:00</li>
                                        <br>
                                        <li>12:00 - 14:00</li>
                                    </ul>
                                </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <div id="book_table" class="book_table">
            <div class="bg_overlay">
               <section>
                <div class="container">
                    <div class="row">
                        <div class="desc_book col-md-6 col-md-offset-2">
                            <h5>Nous vous attendons</h5>
                            <div class="slide_sparator"></div>
                            
                            <p>Par email, par téléphone ou en personne. Si vous êtes un groupe ou que vous souhaitez une table particulière, n'hésitez pas à nous le dire. Nous ferons tout notre possible pour que vous vous sentiez à l'aise.</p>
                            
                            <div id="contact"  class="contact_book">
                                <p>04.02.54.36.23</p>
                                <p>arnaudmichant@gmail.com</p>
                            </div>
                            <label>&copy; Copyright Le Quai Antique 2023 </label>
                        </div>
                        <div class="reservation col-md-4 text-center">
                            <h5>Faire une Réservation</h5>
                            <div class="slide_sparator"></div>
                               
                                <div class="form-group date_form">
<!--                                    <label for="datepicker">Date</label>-->
                                    <label style="color:white;">Choisissez une date</label>
                                    <input type="date" name="date" class="form-control" id="datepicker" title="Please choose a date" required="" aria-required="true">
                                </div>
                                
                                <div class="form-group time_form">
<!--                                    <label for="timepicker">Time</label>-->
                                    <label style="color:white;">Choisissez une heure</label>
                                    <input type="time" class="form-control" id="timepicker" name="time" title="Choose Preferred Time" required="" aria-required="true"> 
                                </div>
                                
                                <div class="form-group guest_form">
<!--                                    <label for="guests">Guests</label>-->
                                    <label style="color:white;">Combien de personne</label>
                                    <input class="form-control" type="number" id="guests" name="number" placeholder="Combien de personne?" title="Please enter number of guests" required="" aria-required="true">
                                </div>
                                
                            <div class="accept">
                                <a href="form.php" class="button_resto" style="color:white;">Réserver</a>
                            </div>
                        </div>
                    </div>
                </div>
               </section>
            </div>
        </div>
       <script src="assets/js/jquery.min.js"></script>
       <script src="assets/js/bootstrap.min.js"></script>
       <script src="assets/js/jquery.magnific-popup.min.js"></script>
       <script src="assets/js/smoothscroll.js"></script>
       <script src="assets/js/wow.js"></script>
       <script src="assets/js/jquery.nav-custom.js"></script>
       <script src="assets/js/isotope.pkgd.min.js"></script>
       <script src="assets/js/owl.carousel.min.js"></script>
       <script src="assets/js/bootstrap-datepicker.min.js"></script>
       <script src="assets/js/bootstrap-clockpicker.min.js"></script>
       <script src="assets/js/main.js"></script>
    </body>
</html>