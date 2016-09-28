<?php
	$resultado=1;
	for($i=1;$i<=abs($exponente);$i++){
		$resultado *=$base;
	}
	if($exponente<0){
		$resultado=1/$resultado;
		}
	echo "$base<SUP>$exponente</SUP> = ";
	echo "<strong>$resultado</strong>";
?>	
		
