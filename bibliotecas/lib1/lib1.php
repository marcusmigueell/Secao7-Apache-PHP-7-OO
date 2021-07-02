<?php

    namespace A;

    class Cliente implements Cadastro {
        public $nome = 'Marcus';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar(){
            echo 'Salvando arquivos do cliente A';
        }
    }

    interface Cadastro {
        public function salvar();
    }

?>