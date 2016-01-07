/* Validacion del numero de cedula */
function Vcedula(id,e){
            
         
            
            var cedula, mensaje;
            cedula = document.getElementById(id).value;
            var array = cedula.split("");                           //Convertimos la varibale cedula a cadena 
            var num = array.length;                                 // Obtenemos la longitud de la cadena ingresada
            mensaje = document.getElementById(e);               //Asignamos en una varibale nuestros mensajes
            mensaje.innerHTML = "";                             //En la variable inicialicamos con una cadena vacia
    try{
            
            if( cedula == "")
                throw "";
            else{
                if (!(/^\d*$/).test(cedula) ){
                     document.getElementById("c").setAttribute("value","0");
                    throw "Solo admite ingresar números";
                }
                    
                     
            }
            if ( num == 10 )
            {
                total = 0;
                digito = (array[9]*1);
                for( i=0; i < (num-1); i++ )
                {
                    mult = 0;
                    if ( ( i%2 ) != 0 ) 
                        total = total + ( array[i] * 1 );
                
                    else
                    {
                        mult = array[i] * 2;
                        if ( mult > 9 )
                        total = total + ( mult - 9 );
                        else
                        total = total + mult;
                    }
                }
                decena = total / 10;
                decena = Math.floor( decena );
                decena = ( decena + 1 ) * 10;
                final = ( decena - total );
                if ( ( final == 10 && digito == 0 ) || ( final == digito ) ) 
                {
                      document.getElementById("c").setAttribute("value","1");      
                    return true;
                     
                }
                else
                {
                    document.getElementById("c").setAttribute("value","0");  
                    throw "Cédula no es valida";   /*Asignamos nuestro mensaje a nuestra variable*/
                     
                    return false;
                    
                }
            }
            else
            {
                 document.getElementById("c").setAttribute("value","0");
                throw  "La Cédula no puede tener menos de 10 dígitos";
               
                return false;
                
            }
            
    }
    catch(error){
        mensaje.innerHTML = error;                  /*Mostramos los mensajes asignados*/

    }
    

}
/* Funcion para validar solo letras*/


function Vletras(id,e){
         
       
    var mensaje, cadena;                                //Declaraciones de las variables
    cadena = document.getElementById(id).value;         //Asignamos a la variable el valor que ingresamos
    mensaje = document.getElementById(e);
    mensaje.innerHTML = "";                             //En la variable inicializamos con una cadena vacia
    
    try{
        if( cadena == "")
            throw "";
        else{
            if(!(/^[A-Za-z-ñÑ-áéíóúÁÉÍÓÚ ]*$/).test(cadena)){
                
                throw "Solo admite ingresar letras";
            }
        }
      
    }
    catch(error){                                   
        mensaje.innerHTML = error;                      //Mostramos en pantalla si existe un error o no cumpla con la condicion
          
    }
   
}

function Fecha_Hora(){
    
    
    var fecha = new Date(); 
    var anio = fecha.getFullYear();
    var mes = fecha.getMonth() +1 ;
    var dia = fecha.getDate();
    var hora = fecha.getHours();
    var min = fecha.getMinutes();
    var seg = fecha.getSeconds();
    
    if(hora<9){
        hora = '0' + hora;
    }
    if(min<9){
        min = '0' + min;
    }
     if(seg<9){
        seg = '0' + seg;
    }
    
    
    var fechamostrar = (anio + '-' + mes + '-' + dia + ' ' + hora + ':' + min + ':' + seg);

    document.getElementById("fecha_hora").setAttribute("value",fechamostrar);
}

