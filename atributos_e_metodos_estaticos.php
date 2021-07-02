<?php

    class Exemplo {

        public static $attr1 = 'Eu sou um atributo estatico';
        public $attr2 = 'Eu sou um atributo normal';

        public static function metodo1() {
            echo 'Eu sou um método estatico';        
        }

        public function metodo2() {
            echo 'Eu sou um método estatico';
        }

    }

    /*
    echo Exemplo::$attr1;
    echo '<br>';
    echo Exemplo::metodo1();
   

    echo Exemplo::$attr2;
    echo '<br>';
    echo Exemplo::metodo2();

    */

    $x = new Exemplo();
    // $x->$attr1; não pode

?>