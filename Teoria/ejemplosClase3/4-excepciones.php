<?php
try {
    $error = 'Siempre levanto este errorrrrrrr.... <br/>';
    throw new Exception($error);
echo 'Hola Mundo ';
    // Código siguiente a una expeción que no se ejecuta.
    echo 'Nunca se ejecuta';

} catch (Exception $e) {
    echo '[Atendiendo la excepción: ] ',  $e->getMessage(), "\n";
}

// Continua la ejecución

?> 
