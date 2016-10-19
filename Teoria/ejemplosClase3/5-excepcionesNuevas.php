<?php

class ExcepcionRara extends Exception{} 

class ExcepcionNoTanRara extends Exception{} 

class MiClase {
	
	private $variable = "algo...";
	private $algunaCondicion=1;
	
	function __construct() {
		if ($this->algunaCondicion) {
			throw new ExcepcionRara ("algo  pasa...."); }
		else throw new Exception ("No pasa nada....");
}}

try {

$obj = new MiClase(); 


} catch (ExcepcionRara $e) { 
	 echo 'Excepcion rara ... ',  $e->getMessage(), "\n";
}
  catch (ExcepcionNoTanRara $e) {
  	 echo 'Excepcion No Tan Rara ... ',  $e->getMessage(), "\n";
 } 
  catch (Exception $e) { 
	 echo 'Excepcion comun ... ',  $e->getMessage(), "\n";
	  } 
?> 

