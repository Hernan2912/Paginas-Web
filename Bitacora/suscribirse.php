
<!DOCTYPE html>
<html lang="es">
    <head>
       <title>Bitacora de Sucesos</title>
       <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href="css/estilos.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="js/validaciones.js"></script>
    </head>
    
    <body>
      
	<div id="contenedor">

			<h2>Bitacora de Sucesos </h2>
			<div>
                
				<div id="ing">  
                    <form method="post" action="clases/DatosSuscriptor.php">
                        <br><br>
					    <span>Cédula</span> 
	  				    <p id="errorCI" class="ocul" ></p><input class="Fnt" type="text" name="cedula" id="cedula" maxlength="10" required onblur="Vcedula('cedula','errorCI')"/>
                        <input type="text" name="c" id="c"  value="" hidden />
                       <br><br>
                        <span>Nombre</span> 
	  				    <p id="errorN" class="ocul" ></p><input class="Fnt" type="text" name="nombre" id="nombre" maxlength="50" required onblur="Vletras('nombre','errorN')" />
                       <br><br>
                        <a href=""> <input class="btn" type="submit" id="btIng" value="Ingresar" name="Ingresar"/></a>
	  		        </form>
                </div>
                 
            
			</div>	
	</div>	
</body>
</html>
