<?php
    session_start();
    $_SESSION["Ncedula"] = $_POST["cedula"];

    include_once("/clases/suscriptor.php");
    //Obtenemos los valores de cada campo de nuestro formulario
        
        
        $cedula	= $_POST["cedula"];			 
      		
    
        $oSuscriptor = new cSuscriptor;                   

        if( $oSuscriptor->consultaDatoSuscriptor($cedula)){  
                
                $mensaje = "Ingreso Exitoso";
            
                echo "<meta http-equiv=\"refresh\"content=\"0;URL=listar.php\">.
            <script type='text/javascript'>alert('$mensaje')</script>";
            }
            else{
                
                //$mensaje = "Error:
                $mensaje = "Error: No se encuetra Registrado debe Suscribirse";
                
                echo "<meta http-equiv=\"refresh\"content=\"0;URL=suscribirse.php\">.
            <script type='text/javascript'>alert('$mensaje')</script>";
                
            }

?>