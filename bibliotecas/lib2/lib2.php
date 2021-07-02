<?php   

    namespace B;

    class Cliente implements Cadastro {
        public $nome = 'Adriana';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function remover(){
            echo 'Removendo arquivos do cliente B';
        }
    }

    interface Cadastro {
        public function remover();
    }

?>