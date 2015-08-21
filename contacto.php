<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Curso Configuración  - Contactos</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>
 <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="js/responsive-nav.js" type="text/javascript"></script>
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
		       <h2>Contáctame</h2>
		          <?php include 'view/formContact.html';?>
				  <div class="content_bottom">
				 	<div class="company_address">
				     	<h2>Localización</h2>
						    	<p>Av. Urdaneta Nº 65. Entre Artigas y Peninsular,</p>
						   		<p>Sector Josefa Camejo. Punto Fijo. Paraguaná -Estado Falcón.</p>
						   		<p>Venezuela</p>
				   		<p>Teléfono Fijo:(0269) 2468432</p>
                                                <p>Teléfono Móvil:(414) 6483953</p>
				   		<p>Correo electrónico: <span><a href="mailto:info@cursoconfiguracion.com">claretcoromoto@cursoconfiguracion.com</a></span></p>
				   		<p>Sígueme: <span><a href="https://www.facebook.com/claretcoromoto.salazarguanipa">Facebook</a></span>,
				   		 <span><a href="https://twitter.com/?lang=es">Twitter</a> @cursoconfigurar</span></p>
				     </div>
				       <div class="contact_info">
    	 				<h2>Encuentrame aquí</h2>
					    	  <div class="map">
							   	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1953.5569626463075!2d-70.20079214904558!3d11.68633777475978!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e85ed04ee325f49%3A0x89d7ad63b7d8be05!2sCalle+Urdaneta%2C+Punto+Fijo!5e0!3m2!1ses!2sve!4v1421423039389" width="600" height="450" frameborder="0" style="border:0"></iframe>	  </div>
      				     </div>
				      <div class="clear"></div>
	                </div>
		 	  </div>
			</div>
			</div>
		  </div>		   			
		 <!---End-content---->
		 <!---start-footer---->
		  <!---start-footer---->
		  <?php include 'footer/footer.php';
                  $footer= new footer();
                  $footer->foo();
                  ?>
		 <!---End-footer---->
		 <!---End-footer---->
	</body>
</html>
