<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class paginacion{
    function __construct() {
        ;
    }
    function page(){
        echo ' <div class="pagination pagination2">
					<ul>
		  		      	<li class="first"><a href="#">Primero</a></li>
		  		    	<li class="prev"><a href="#">Anterior</a></li>
		  		      	<li class="active"><a href="#">1</a></li>
		  		    	<li><a href="#">2</a></li>
		  		    	<li><a href="#">3</a></li>
		  		    	<li><a href="#">4</a></li>
		  		    	<li><a href="#">5</a></li>
		  		    	<li class="next"><a href="#">Próximo</a></li>
		  		    	<li class="last"><a href="#">Último</a></li>
		  		    	<div class="clear"></div>
		  		    </ul>
			     </div>';
    }
    
}
?>