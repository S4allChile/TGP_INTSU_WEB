<?php
//******************************************************************************
/**
 * CODIFICA UN STRING
 * 
 *  @var $key               
 *      Una clave de codificacion, debe usarse la misma para 
 *      encriptar y desencriptar.
 * 
 * 
 * @author                  Pablo Frias Carter <pablo.frias@tgpinversiones.cl>
 * @param string $cadena    Valor que se va a codificar     
 * @return string           Devuelve el string encriptado
 */
//******************************************************************************
function encriptarUrl($cadena){
    $key='75TGVD9ugtgt';
    $result = '';
   
    
   for($i=0; $i<strlen($cadena); $i++) {
      $char = substr($cadena, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   $valor = base64_encode($result);
   return urlencode($valor);
 
}



//*******************************************************************************
/**
 * DECODIFICA UN STRING
 * 
 * @var $key               
 *      Una clave de codificacion, debe usarse la misma para 
 *      encriptar y desencriptar.
 * 
 * 
 * @author                  Pablo Frias Carter <pablo.frias@tgpinversiones.cl>
 * @param string $cadena    Valor que se va a decodificar     
 * @return string           Devuelve el string encriptado
 */
//*******************************************************************************
function desencriptarUrl($cadena){
    $key='75TGVD9ugtgt';  
    $result = '';
    $cadena = urldecode($cadena);
    
    
    $cadena = base64_decode($cadena);
    for($i=0; $i<strlen($cadena); $i++) {
       $char = substr($cadena, $i, 1);
       $keychar = substr($key, ($i % strlen($key))-1, 1);
       $char = chr(ord($char)-ord($keychar));
       $result.=$char;
    }
    return $result;
}

