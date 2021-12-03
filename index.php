
<?php 
  include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
    
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main_misc.css">
	<link rel="stylesheet" href="css/main_style.css">
</head>
<body>
	
	<!--Ceci est le responsive du menu pour les tablettes et les téléphones  -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="navigation responsive-menu">
            <ul>
                <li class="home"><a href="#templatemo">Accueil</a></li>
	            <li class="about"><a href="#about">A Propos</a></li>
	            <!--li class="services"><a href="#services"> Nos Services</a></li-->
	            <li class="portfolio"><a href="#portfolio">Portfolio</a></li>
	            <li class="contact"><a href="#contact">Contact</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<div class="logo">
			<a href="#"><h1>BM STYLE</h1></a>
			<span>Confection de shorts en Pagnes</span>
		</div> <!-- /.logo -->

		<div class="navigation">
	        <ul class="main-menu">
	            <li class="home"><a href="#templatemo">Accueil</a></li>
	            <li class="about"><a href="#about">A Propos</a></li>
	            <!--li class="services"><a href="#services"> Nos Services</a></li-->
	            <li class="portfolio"><a href="#portfolio">Portfolio</a></li>
	            <li class="contact"><a href="#contact">Contact</a></li>
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->

	<div id="main-content">

		<div id="templatemo">
			<div class="main-slider">
				<div class="flexslider">
					<ul class="slides">
                    
						<li>
							<div class="slider-caption">
								<h2 id="welcom">Confection de Shorts</h2>
								<p>L'Equipe BM STYLE confection les shorts en Pagne dans le but de valoriser la culture Africaine</p>
								
							</div>
							<img src="images/portfolio/IMG-20210621-WA0027.jpg" alt="Slide 1">
						</li>
                        
						<li>
							<div class="slider-caption">
								<h2 id="welcom">Shorts Hommes</h2>
								<p>Shorts Simples Stylés et décontractés pour des sorties simples.Soyez Simples et Chics! </p>
								
							</div>
							<img src="images/portfolio/IMG-20210621-WA0030.jpg" alt="Slide 2">
						</li>
                        
                        <li>
							<div class="slider-caption">
								<h2 id="welcom">Shorts Femmes</h2>
								<p>Shorts Simples Stylés et décontractés pour des sorties simples.Soyez Simples et Chics! </p>
							
							</div>
							<img src="images/portfolio/IMG-20210621-WA0022.jpg" alt="Slide 3">
						</li>
                        
					</ul>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="welcome-text">
							<h2 id="welcom">Bienvenue à BM STYLE </h2>
							<p>BM STYLE est une start-up de valorisation de la culture africaine à travers la promotion des shorts en tissus locaux 
								aussi bien pour les jeunes hommes que pour les jeunes filles. Cette plateforme est ainsi réservée à la découverte de nos services
							</p>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /#sTop -->

		<div class="container-fluid">

			<div id="about" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>About Us</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="member-item">
							<div class="member-thumb">
								<img src="images/portfolio/IMG-20210621-WA0012.jpg" alt="girl 1">
								<div class="overlay">
									<ul class="social-member">
										<li><a href="https://www.facebook.com/brunel.oloulade.5" class="fa fa-facebook"></a></li>
										<li><a href="https://www.instagram.com/invites/contact/?i=kyjg2pdvdk8x&utm_content=lr3jvot" class="fa fa-instagram"></a></li>	
									</ul>
								</div>
							</div>
							<div class="member-content">
								<h4>Alvian OLOULADE </h4>
								<p>Directeur</p>
							</div>
						</div>
					</div> <!-- /.col-md-4 -->
					<div class="col-md-6">
						<div class="member-item">
							<div class="member-thumb">
								<img src="images/portfolio/IMG-20210621-WA0005.jpg" alt="girl 2">
								<div class="overlay">
									<ul class="social-member">
										<li><a href="https://www.instagram.com/invites/contact/?i=tmdq3auxns99&utm_content=9iog1mg" class="fa fa-instagram"></a></li>
										<li><a href="https://www.linkedin.com/in/ornella-ahouandogbo-87805021" class="fa fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="member-content">
								<h4>Mirlande AHOUANDOGBO</h4>
								<p>Directrice Adjointe</p>
							</div>
						</div>
					</div> 
				</div> <!-- /.row -->
				
				<div id="portfolio" class="section-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2>Portfolio</h2>
							</div> <!-- /.section-title -->
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row -->
					<div class="row">
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0021.jpg" alt="Fantasy">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0021.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#">Ceinture</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0002.jpg" alt="Universe">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0002.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#">Ceinturon-boutons</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0026.jpg" alt="Universe">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0026.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#"> Plissé</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
					</div> <!-- /.row -->
					<div class="row">
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0014.jpg" alt="Channel">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0014.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#"> à bande</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0003.jpg" alt="Dragonfly">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0003.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#"> camouflet</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0008.jpg" alt="Titanium">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0008.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#"> Simple</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
					</div> <!-- /.row -->



					<div class="row">
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0012.jpg" alt="Channel">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0012.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#"> bas retourné</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0017.jpg" alt="Dragonfly">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0017.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#">Camouflet & plissé</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="portfolio-thumb">
									<img src="images/portfolio/IMG-20210621-WA0024.jpg" alt="Titanium">
									<div class="overlay-p">
										<a href="images/portfolio/IMG-20210621-WA0024.jpg" data-gal="prettyPhoto">
											<i class="fa fa-arrows-alt fa-2x"></i>
										</a>
									</div>
								</div> <!-- /.portfolio-thumb -->
								<h3 class="portfolio-title"><a href="#">Simple & ceinturon-bouton</a></h3>
							</div> <!-- /.portfolio-item -->
						</div> <!-- /.col-md-4 -->
					</div> <!-- /.row -->
					<div class="row">
						<div class="col-md-12">
							<div class="load-more">
								<a href="#portfolio" class="largeButton portfolioBgColor">Voir Moins</a>
							</div>
						</div>
					</div>
				</div> <!-- /#portfolio -->
			
			

			<div id="contact" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Contact Us</h2>
						</div> 
					</div> 
				</div> 
				
				<div class="row contact-form">
					<form action="traitement.php" method="post">
						<div class="col-md-4">
							
							<input name="name-id" type="text" id="name-id" maxlength="40" placeholder="Name...">
						</div> 
						<div class="col-md-4">
							
							<input name="email-id" type="text" id="email-id" maxlength="40" placeholder="Email...">
						</div> 
						<div class="col-md-4">
						
							<input name="subject-id" type="text" id="subject-id" maxlength="60" placeholder="Sujet...">
						</div>
						<div class="col-md-12">
							
							<textarea name="message-id" id="message-id" rows="6" placeholder="Message"></textarea>
						</div> 
						<div class="col-md-12">
							<div class="submit-btn">
								<input type="submit" name="submit" value=Envoyer>
							</div> 
						</div> 
					</form>
				</div>

				<?php if (isset($_GET['success'])) {?>             
                        <div class="alert alert-info" role="alert">
                            <?php echo $_GET['success']; ?>
                        </div>
                <?php }?> 
			</div> 

		</div> <!-- /.container-fluid -->

		<div class="site-footer">
			<div class="first-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="social-footer">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-instagram"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									
								</ul>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="bottom-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<p class="copyright" >Copyright © 2084 <a href="#">BM STYLE</a>
                            </p>
						</div> 
						<div class="col-md-6 credits">
							<p></p>
						</div> 
					</div> 
				</div> 
			</div> 
		</div> 

	</div> 

	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.singlePageNav.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
		});

        function initialize() {
          var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(40.7809919,-73.9665273)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

</body>
</html>