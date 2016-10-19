<?php

abstract class Figura { 
	
	abstract protected function calcularArea();
	
	public function imprimirArea() {
			print $this->calcularArea();} 
}
class Cuadrado extends Figura {
	protected $lado=4;
	public function calcularArea() { 
		return $this->lado*$this->lado; } }

class Triangulo extends Figura{
	protected $radio=2;
	public function calcularArea() { 
		return 3.14 * $this->radio*$this->radio; } }
?>

<h1> Probando Clases Abstractas </h1>

<?php
$cua= new Cuadrado();
$tri= new Triangulo();

print "El &aacute;ea del cuadrado es: ".$cua-> calcularArea();
print "<br>";
print "El &aacute;rea del tri&aacute;ngulo es: ".$tri-> calcularArea();


?>





