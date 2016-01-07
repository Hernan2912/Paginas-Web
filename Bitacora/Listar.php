<?php
    session_start();
    $Bcedula = $_SESSION["Ncedula"];

    include_once("clases/bitacora.php");
    $instancia = cBitacora::getInstancia();

?>

<!DOCTYPE>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Litado de Sucesos</title>
        <link href="css/estilos.css" type="text/css" rel="stylesheet">
        <link href="css/estilo-frm.css" type="text/css" rel="stylesheet">
        <link href="css/tabla.css" rel="stylesheet">
        
    </head>
    <body>
       
              <center> <h3 class="Encabezado"> LISTADO DE LOS SUCESOS  </h3> </center>
      <div>
        <div id="contenedor" class="tam-33">	
			<h2>Suscriptor </h2>
			<br>

				<div id="ing">  
                    <form method="post" action="clases/sujeto.php" >
	  				     <input class="Fnt" type="text" name="cedula" id="cedula" value="<?php echo $Bcedula;  ?>" disabled />
                    
                         <a href="index.php"> <input class="btn" type="button" id="btSalir" value="Salir" name="Salir"/></a>
                         <a href=""><input class="btn" type="submit" value="Descuscribirse"></a>
	  		        </form>
                </div> 
                <br><br><br><br><br> 
              
                
        <?php
            include_once("clases/suscriptor.php");
            
            $oDatosSusSusc = new cSuscriptor();
            $query = $oDatosSusSusc->consultaDatosSuscriptor();
            $datosS = array();
            $datosS = $oDatosSusSusc->getDatosSuscriptor();

            $error = $oDatosSusSusc->getError();
        ?>
           
         
            <div >
          
            <TABLE id="table" class="tabla" >
                <TR class="center">
                    <th>N°</th>
                    <th>Cédula</th>

                    <th>Nombre</th>
               
       
                </TR>
        <?php
        
            $i=1;
            foreach ($datosS as $mostrarDatosS) {
                echo "<tr style='text-align: justify; '>
                         <td>$i</td>
                         <td>".$mostrarDatosS["cedula"]."</td>
                  
                         <td>".$mostrarDatosS["nombre"]."</td>
                      
                     </tr>";
                 $i++; 

            }
        ?>
        </TABLE>
        
         
        </div>       
	
        </div>
        
        <?php
            include_once("clases/suceso.php");
            
            $oDatosSusSusc = new cSuceso();
            $query = $oDatosSusSusc->consultaDatosSuSus();
            $datosS = array();
            $datosS = $oDatosSusSusc->getDatosSuceso();

            $error = $oDatosSusSusc->getError();
        ?>
        
            <div class="tam-50">
            <div class="center">
            <a href="frmsuceso.php"><input type="button" class="btn" id="nuevo" name="nuevo" value="Nuevo Suceso"></a>
            </div>
            <br>
            <TABLE id="table" class="tabla" >
                <TR class="center">
                    <th>N°</th>
                    <th>Cédula</th>

                    <th>Mensaje</th>
                    <th>Fecha y Hora</th>
       
                </TR>
        <?php
        
            $i=1;
            foreach ($datosS as $mostrarDatosS) {
                echo "<tr style='text-align: justify; '>
                         <td>$i</td>
                         <td>".$mostrarDatosS["cedula"]."</td>
                  
                         <td>".$mostrarDatosS["evento"]."</td>
                         <td>".$mostrarDatosS["fecha_hora"]."</td>
                     </tr>";
                 $i++; 

            }
        ?>
        </TABLE>
        
         
        </div>
    </div>
       
    </body>
</html>