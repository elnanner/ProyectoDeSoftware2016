<?php
class Libro {
    public static $genCodigos = 0;
	private $codigo;
	
	function __construct(){
		$this->codigo=self::$genCodigos++;
		}
	function verCodigo(){
	return $this->codigo;
	}
}
?>

<h1> Probando Variables de staticas en las Clases </h1>
<p> EL valor Inicial del Generador de Codigos es <?php print Libro::$genCodigos;  ?> </p>
<p> Ahora vamos a crear varias instancias y veamos ....</p>
<ul>
<?php
$libros=array();
for ($i = 1; $i <= 10; $i++) {
	$l = new Libro();
	$libros[]=$l;
	print "<li>EL cod del libro ".$i." es ". $l->verCodigo()."</li>";
}

?>
</ul>
<p> EL valor final del Generador de Codigos; es <? print Libro::$genCodigos; ?> </p>




