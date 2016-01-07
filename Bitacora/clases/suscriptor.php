<?php
    include_once("/../php/acceso.php");
class cSuscriptor{
        
        private $datosSuscriptor = array();
        private $error;
        
        //Insertar Datos
        
        public function guardarDatos($cedula,$nombre){
            
            $oInsertar = new cAcceso;       //Instancaimos la clase para poder acceder a sus metodos
            
            $query="INSERT INTO suscriptor (cedula,nombre)".
        "VALUES ('$cedula','$nombre')";

            if( $oInsertar->insertarDatos($query))
                return true;
            else
                $this->setError($oInsertar->getError());
            
        }
            
        //Consulta de toda la informacion
        public function consultaDatosSuscriptor(){
            
            $oConsultarSuscriptores= new cAcceso;
            $Consulta = $oConsultarSuscriptores->obtenerDatos("select * from suscriptor");
            if($Consulta){
                
                $this->datosSuscriptor = $oConsultarSuscriptores->getMostrarDatos();
                return true;
            }
            else{
                $this->setError($oConsultarSuscriptores->getError());
                return false;
            }
        }
    
        //Consulta a un sucriptor
        public function consultaDatoSuscriptor($id){
            
            $oConsultarSuscriptor= new cAcceso;
            $Consulta = $oConsultarSuscriptor->obtenerDatos("select cedula from suscriptor where cedula = '$id' ");
            if($Consulta){
                
                $this->datosSuscriptor = $oConsultarSuscriptor->getMostrarDatos();
                return true;
            }
            else{
                $this->setError($oConsultarSuscriptor->getError());
                return false;
            }
        }
    
    
         public function eliminarSuscriptor($id){
        
            $oEliminarSus = new cAcceso;
            $Consulta = $oEliminarSus->eliminarDatos("delete from suscriptor where cedula = '$id' ");
             if($Consulta){
                 
                return true;
            }
            else{
                $this->setError($oEliminarSus->getError());
                return false;
            }
            
            
        }
       
        //Metodos get para poder obtener los datos ingresados y el error
        public function getDatosSuscriptor(){
            
            return $this->datosSuscriptor;
        }
        
        public function getError(){
            
            return $this->error;
        }
        
        //Metodo set para almacenar lo que tiene la variable
        public function setError($errorR){
            
            $this->error=$errorR;
        }
        
        
    }
?>




