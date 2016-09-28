<?php
class Madre { 
	protected $equipoFutbol;
	public $apodo;
	private $nombre;
	
	function __construct($nom, $equipo, $apodo){
		$this->equipoFutbol=$equipo;
		$this->apodo=$apodo;
		$this->nombre=$nom;
	
		}
	function verNombre(){
		 return $this->nombre ;
	}
	function muestroPropiedades(){
	    echo "Nombre: ". $this->nombre. "<br />";
		echo "Simpatizante de: ". $this->equipoFutbol ."<br />";
		echo "Apodo:  ". $this->apodo ."<br />";
	}
}
class Hijo extends Madre { 
	public $escuela;
	function __construct($nom, $apodo, $equipo){
		parent::__construct($nom, $equipo, $apodo);			
		//$this->equipoFutbol="Racing";
		$this->escuela="EdeLP";

		}
	function cambioEquipo($nuevo){
		$this->equipoFutbol=$nuevo;
	}
}


$per=new Madre("Claudia", "Racing", "Clau");

$miHijoMayor=new Hijo("Leo", "Leonardo", "River");
//$miHijoMayor-> cambioEquipo("River");

?>
<h1> Datos de <?php echo $per->verNombre();?></h1>
<p> <? $per->muestroPropiedades(); ?> </p>


<h1> Datos de <?php echo $miHijoMayor->verNombre()?></h1>
<p> <? $miHijoMayor->muestroPropiedades(); ?> </p>

<h1>Probamos algunas cosas...</h1>

<p><? //echo $miHijoMayor->nombre;?> </p>
<p><? //echo $miHijoMayor->equipoFutbol;?> </p>
<p><? echo $miHijoMayor->apodo;?> </p>
<p><? echo $miHijoMayor->escuela;?> </p>






