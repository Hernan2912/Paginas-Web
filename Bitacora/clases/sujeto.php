<?php
    include_once("suscriptor.php");
    //Obtenemos los valores de cada campo de nuestro formulario
        
         session_start();
       
        $cedula	= $_SESSION["Ncedula"] ;		 
      
 
           $oSuscriptor = new cSuscriptor;    

       
     
        if( $oSuscriptor->eliminarSuscriptor($cedula)){  
            
                
                
                $mensaje = "Usted se ha desuscrito de la bitacora";
                
                
            
                echo "<meta http-equiv=\"refresh\"content=\"0;URL=../index.php\">.
            <script type='text/javascript'>alert('$mensaje')</script>";
            }
            else{
                
                //$mensaje = "Error: ".$oSuceso->getError();
                $mensaje = "Error";
                
                echo "<meta http-equiv=\"refresh\"content=\"0;URL=../Listar.php\">.
            <script type='text/javascript'>alert('$mensaje')</script>";
                
            }
         

?>
