<?php

    //$bd="renta_car";
    class cConexion
     {
        //Declaramos la variables a utilizar
        private $connect;
        private $errorServidor="Error al tratar conectarse con el servidor";
        private $errorBD="Error al seleccionar la Base de Datos";
        //Definimos el metodo constructor
        public function __construct()   
        {
            if (!($conexion=mysqli_connect("localhost","root","")))
            {
                
                return $this->errorServidor;
                exit(); 
            }
            
            if (!mysqli_select_db($conexion,"bitacora_sucesos"))
            {
               
                return $this->errorBD;
                exit();
            }
            $conexion->set_charset('utf8');
            $this->connect=$conexion;
            return true;

        }   
        
         public function cerrar()//CIERRA LA BASE DE DATOS
        {
        
            mysqli_close($this->connect);
         }

        public function getConexion()
            {
                return $this->connect;
            }

    } 
 

?>