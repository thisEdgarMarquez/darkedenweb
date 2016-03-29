<?php
/* Archivo: funciones.php
	 Funcion: contener todas las funciones usadas en los scrips
*/
/* Funcion para limpiar las variables */
function Limpiar($string) 
{
	 $string = htmlspecialchars($string);
	 $string = strip_tags($string);
	 $string = mysql_real_escape_string($string);
 	 $string = str_replace("<","&lt;", $string);
	 $string = str_replace(">","&gt;", $string);
	 $string = addslashes($string);
	 return $string;

}
function isEmail($email)
{
            return (bool)preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$email);
} 
function isNum($str) 
{
    if(eregi("[^0-9]",$str)) return 0;
    return 1;
}
?>
