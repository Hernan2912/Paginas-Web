<?php
    
    session_start();
    $_SESSION["Ncedula"] = ""; 

    include_once("clases/bitacora.php");
    $instancia = cBitacora::getInstancia();

    

?>


<!DOCTYPE html>
<html lang="es">
    <head>
       
       <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href="css/estilos.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="js/validaciones.js"></script>
    </head>
    
    <body>
      
	<div id="contenedor">	
			<h2>Bitacora de Sucesos </h2>
			<div>
                
				<div id="ing">  
                    <form method="post" action="ingresar.php">
                        <br><br>
					    <span>Cédula</span> 
	  				    <p id="errorCI" class="ocul" ></p><input class="Fnt" type="text" name="cedula" id="cedula" maxlength="10" required onblur="Vcedula('cedula','errorCI')"/>
                         <input type="text" name="c" id="c"  value="" hidden />
                         <br><br>
                         <a href="Listar.php"> <input class="btn" type="submit" id="btIng" value="Ingresar" name="Ingresar"/></a>
                         <a href="suscribirse.php"><input class="btn" type="button" value="Suscribirse"></a>
	  		        </form>
                </div>
                       
			</div>	
    </div>
    </body>
</html>
