<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class header{
    function __construct() {
        ;
    }

    function head(){
        echo '<div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><h1><span>Curso</span>Configuración</h1></a>
				</div>
			</div>
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					 <div id="nav">
				      <ul>
				        <li class="active"><a href="index.php">Inicio</a></li>
				        <li><a href="acerca.php">Acerca de</a></li>
				         <li><a href="servicios.php">Servicios Outsourcing</a></li>
				        <!-- <li><a href="trabajamosasi.php">Cómo trabajamos</a></li>-->
				         <li><a href="proyectos.php">Proyectos</a></li>
				         <li><a href="contacto.php">Contactos</a></li>
                                          <li><a href="proyecto-02/index.php">Prueba</a></li>
				     </ul>
		       </div>
		       <script>
			      var navigation = responsiveNav("#nav");
			    </script>
				</div>
			
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
	</div>';
    }
    }
    
    
?>