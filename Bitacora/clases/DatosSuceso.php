<?php
    include_once("suceso.php");
    //Obtenemos los valores de cada campo de nuestro formulario
        
        
        $cedula	= $_POST["cedula"];		 
        $evento = $_POST["evento"];	
        $fecha_hora = $_POST["fecha_hora"];	
      		
        

        $oSuceso = new cSuceso;                   

        if( $oSuceso->guardarDatos($cedula,$evento,$fecha_hora)){  
                
                $mensaje = "Se guardo correctamente y se notifico a los sucriptores";
                
                
            
                echo "<meta http-equiv=\"refresh\"content=\"0;URL=../Listar.php\">.
            <script type='text/javascript'>alert('$mensaje')</script>";
            }
            else{
                
                //$mensaje = "Error: ".$oSuceso->getError();
                $mensaje = "Error";
                
                echo "<meta http-equiv=\"refresh\"content=\"0;URL=../index.php\">.
            <script type='text/javascript'>alert('$mensaje')</script>";
                
            }

?>
