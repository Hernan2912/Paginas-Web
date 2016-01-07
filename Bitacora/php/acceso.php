<?php
include_once("conexion.php");
class cAcceso
{
    private $mostrarDatos=array();   //Devinimos el arreglo que va ha contener los datos
    private $error ;
    
    
    public function insertarDatos($query){
        $bd=new cConexion;                      //Instanciamos la clase para poder acceder a sus metodos
        $dmls=mysqli_query($bd->getConexion(),$query);
            if(!($dmls)){
                $this->error=mysqli_error($bd->getConexion());
                return false;
                $bd->cerrar();
            }else{
                return true;
                $bd->cerrar();
            }
    
    }
    

    //Buscar los datos de los clientes
    public function obtenerDatos($query)
    {
        $bd=new cConexion;
        if($datos=mysqli_query($bd->getConexion(),$query))
        {
            while($enviardatos=mysqli_fetch_array($datos))
            {
            $this->mostrarDatos[]=$enviardatos;
            }
        return $this->getMostrarDatos();
        $bd->cerrar();
        }
        else{
        $this->error=mysqli_error($bd->getConexion());
        return false;
        $bd->cerrar();
        }  
    }
    
    public function eliminarDatos($query){
        $bd=new cConexion;                      //Instanciamos la clase para poder acceder a sus metodos
        $dmls=mysqli_query($bd->getConexion(),$query);
            if(!($dmls)){
                $this->error=mysqli_error($bd->getConexion());
                return false;
                $bd->cerrar();
            }else{
                return true;
                $bd->cerrar();
            }    
        
    } 
    
   //Metodo get para poder devolver los datos
    public function getMostrarDatos() {
        return $this->mostrarDatos;
    }
    
    //Metodo get para obtner el mensaje de error
    public function getError(){
        return $this->error;
    }
    
     
    
}


  
?>














