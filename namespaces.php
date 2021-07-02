<?php

    namespace A;

    class Cliente implements \B\Cadastro {
        public $nome = 'Marcus';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function remover(){
            echo 'Removendo arquivos do cliente A';
        }
    }

    interface Cadastro {
        public function salvar();
    }


    namespace B;

    class Cliente implements \A\Cadastro {
        public $nome = 'Adriana';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar(){
            echo 'Salvando arquivos do cliente B';
        }
    }

    interface Cadastro {
        public function remover();
    }

    /*-----------------------------------------------------------------------*/

    $cliente1 = new \A\Cliente();

    echo '<pre>';
        print_r($cliente1);
    echo '</pre>';

    echo $cliente1->__get('nome');

    echo '<hr>';

    $cliente2 = new \B\Cliente();

    echo '<pre>';
        print_r($cliente2);
    echo '</pre>';

    echo $cliente2->__get('nome');

?>