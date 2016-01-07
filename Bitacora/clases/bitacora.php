<?php
    class cBitacora 
    {
        
        private static $instancia;
        
        //Constructor
        private function __construct(){
                    
        } 
        
        
        //Métodos
        
     
      public static function getInstancia()
      {
		 if (!self::$instancia instanceof self)
         {
            self::$instancia = new self;
         }
            return self::$instancia;
       }
        
     public function escribirbitacora()
     {
         
         
         
     }
         
        
       
    }
    
?>