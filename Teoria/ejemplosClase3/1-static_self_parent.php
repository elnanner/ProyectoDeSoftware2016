<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
 
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
       public static function test() {
        echo "Este es static: ";
        static::who(); // He aquí el enlace estático en tiempo de ejecución
		echo "<br>Este es self: ";
        self::who();
        echo "<br>Este es parent: ";
        parent::who();
    }
}

B::test();
?>
