<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Curso Configuración -Nuestros Proyectos</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
		 <script src="js/responsive-nav.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
 </head>
<body>
	<!----start-header----->
	 <?php include 'header/header.php';
         $header= new header();
         $header->head();
         ?>
   <!----End-header----->
	     
		
		<!---start-content---->
		 <div class="wrap">
		 	<div class="about-desc">
		     <div class="content">	 	
		      <div class="about-data"> 
		       <h2>Nuestros proyectos</h2>
		       <p>Página en construcción.</p>
		 	 
		 	   <div class="portfolio_main">
						<ul id="filters" class="clearfix">
							<li>
								<span class="filter active" data-filter="app card icon web">All</span>
							</li>
							<li>
								<span class="filter" data-filter="app  icon">App</span>
							</li>
							<li>
								<span class="filter" data-filter="card ">Card</span>
							</li>
							<li>
								<span class="filter" data-filter="icon app card ">Icon</span>
							</li>
							<li>
								<span class="filter" data-filter="web card icon">Web</span>
							</li>
						</ul>
						<div id="portfoliolist">
							<div class="portfolio logo1" data-cat="logo">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s1.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Logo</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio app" data-cat="app">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s2.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">APP</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio web" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s3.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Web design</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s4.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Business card</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio app" data-cat="app">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s5.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">APP</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s6.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Business card</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s7.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Business card</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio logo1" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s8.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Logo</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio app" data-cat="app">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s2.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">APP</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s5.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Business card</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio logo1" data-cat="icon">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s1.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Logo</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio logo1" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" href="#"><img src="images/s5.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">App</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
                               
                                <!---Paginacion---->
			    <?php include 'paginacion/paginacion.php';
                                $pagina= new paginacion();
                                $pagina->page();
                  ?>
                                 <!---End-Paginacion---->
			   </div>
			  </div>
			 </div>
			</div>
		  </div>			   			
		 <!---End-content---->
		 <!---start-footer---->
		  <?php include 'footer/footer.php';
                  $footer= new footer();
                  $footer->foo();
                  ?>
		 <!---End-footer---->
	</body>
</html>

