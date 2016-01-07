<?php
    session_start();
    $Bcedula = $_SESSION["Ncedula"];
    



?>

<!DOCTYPE>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ingresar Suceso</title>
           <link href="css/estilo-frm.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="js/validaciones.js">  </script>
    
    </head> 
    <body>
       
        <p class="titulo"> DATOS DEL SUCESO </p>
           <div  id="pricipal-reg" > 
            <form  class="frm" action="clases/DatosSuceso.php" method="POST">
              <div class="center">
               <input type="text" name="cedula" id="cedula" value="<?php echo $Bcedula; ?>" hidden>
               <span>Evento</span>
                <textarea class="tam-50" name="evento" id="evento" rows="10" cols="5" placeholder="Ingrese el suceso" required>
                    
                </textarea>
                <br>
                <span>Fecha y Hora</span>
                <input class="tam-50" type="text" id="fecha_hora" name="fecha_hora" maxlength="30" onclick="Fecha_Hora()" value="" readonly >
                </div>


                <div class="botones center"> 
                    
                    <input type="submit" id="enviar" name="enviar" value="Guardar">
                    
                    <a href="Listar.php"><input type="button" id="cancelar" name="cancelar" value="Cancelar" /></a>
                </div>

             </form>
          </div>
    </body>
</html>