<?php
    include_once("/../php/acceso.php");
class cSuceso{
        
        private $datosSuceso = array();
        private $error;
        
        //Insertar Datos
        
        public function guardarDatos($cedula,$evento,$fecha_hora){
            
            $oInsertar = new cAcceso;       //Instancaimos la clase para poder acceder a sus metodos
            
            $query="INSERT INTO suceso (cedula,evento,fecha_hora)".
        "VALUES ('$cedula','$evento','$fecha_hora')";

            if( $oInsertar->insertarDatos($query))
                return true;
            else
                $this->setError($oInsertar->getError());
            
        }
            
         //Consulta los sucesos 
        public function consultaDatosSuSus(){
            
            $oConsultarSusSusc= new cAcceso;
            $Consulta = $oConsultarSusSusc->obtenerDatos("select * from suceso ");
            if($Consulta){
                
                $this->datosSuceso = $oConsultarSusSusc->getMostrarDatos();
                return true;
            }
            else{
                $this->setError($oConsultarSusSusc->getError());
                return false;
            }
        }
    
         public function eliminarSuscriptor($id){
        
            $oEliminarSus = new cAcceso;
            $Consulta = $oEliminarSus->eliminarDatos("delete from suceso where cedula = '$id' ");
             if($Consulta){
                 
                return true;
            }
            else{
                $this->setError($oEliminarSus->getError());
                return false;
            }
            
            
        }
        
       
        //Metodos get para poder obtener los datos ingresados y el error
        public function getDatosSuceso(){
            
            return $this->datosSuceso;
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



