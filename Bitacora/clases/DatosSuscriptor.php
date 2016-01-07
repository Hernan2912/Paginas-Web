<?php
    include_once("suscriptor.php");
    //Obtenemos los valores de cada campo de nuestro formulario
        
         session_start();
        $_SESSION["Ncedula"] = $_POST["cedula"];

        $cedula	= $_POST["cedula"];		 
        $nombre = $_POST["nombre"];	

        $cedulaMal	= $_POST["cedula"];		 
        $nombreM = "Número cedula no puede ser validado";	
      		
         $oSuscriptor = new cSuscriptor; 
        if ($_POST["c"] == "1"){
                         

               if( $oSuscriptor->guardarDatos($cedula,$nombre)){  

                    $mensaje = "Registro exitoso";

                    echo "<meta http-equiv=\"refresh\"content=\"0;URL=../Listar.php\">.
                <script type='text/javascript'>alert('$mensaje')</script>";
                }
                else{

                    //$mensaje = "Error: ".$oCliente->getError();
                    $mensaje = "Error: Ya se encuentra registrado";

                    echo "<meta http-equiv=\"refresh\"content=\"0;URL=../index.php\">.
                <script type='text/javascript'>alert('$mensaje')</script>";

                }
        }
        else
        {
               include_once("suceso.php");
               $cedula	= $_POST["cedula"];		 
        	
      		
        

        $oSuceso = new cSuceso;                   

        if( $oSuceso->guardarDatos($cedula,"cedula invalida","2015-11-26")){   

                    $mensaje = "Cedula invalida";

                    echo "<meta http-equiv=\"refresh\"content=\"0;URL=../index.php\">.
                <script type='text/javascript'>alert('$mensaje')</script>";
                }
                else{

                    //$mensaje = "Error: ".$oCliente->getError();
                    $mensaje = "Error: Ya se encuentra registrado dicha cédula";

                    echo "<meta http-equiv=\"refresh\"content=\"0;URL=../index.php\">.
                <script type='text/javascript'>alert('$mensaje')</script>";

                }    
            
        }

?>

