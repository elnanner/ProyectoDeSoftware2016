


<?php

echo "<div>Una vez realizada con éxito una conexión a la base de datos, será devuelta una instancia de la clase PDO al script. La conexión permanecerá activa durante el tiempo de vida del objeto PDO. Para cerrar la conexión, es necesario destruir el objeto asegurándose de que todas las referencias a él existentes sean eliminadas (esto se puede hacer asignando NULL a la variable que contiene el objeto). Si no se realiza explícitamente, PHP cerrará automáticamente la conexión cuando el script finalice.</div>";



try {
    $gbd = new PDO('mysql:host=localhost;dbname=base', "user", "pass");
    foreach($gbd->query('SELECT * from usuarios') as $fila) {
               print_r($fila);}
       //$gbd = null;
} catch (PDOException $e) {
   print "¡Error!: " . $e->getMessage() . "<br/>";
   die();
}
?>
