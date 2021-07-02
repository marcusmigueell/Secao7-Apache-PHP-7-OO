<?php

    class Pai {
        private $nome = 'Marcus';
        protected $sobrenome = 'Miguel';
        public $humor = 'Feliz';

        public function __set($attr, $value) {
            $this->$attr = $value;
        }

        public function __get($attr) {
            return $this->$attr;
        }

        private function executarMania() {
            echo 'Assobiar';
        }

        public function executarAcao() { //através desse métodos executaremos nosso método privado
            $this->executarMania();
        }
    }

    class Filho extends Pai { //no processo de herança o protected é herdado pelo filho e o private não
        /*public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value) {
            $this->$attr = $value;
        }*/
    }

    /* $pai = new Pai();
    $pai->__set('nome','Marcus');
    $pai->__set('sobrenome','Miguel');
    echo $pai->__get('nome') . ' ' . $pai->__get('sobrenome') . '<br>';
    $pai->executarAcao(); */

    

    $filho = new Filho();

    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    echo '<br><br>';

   /* echo $filho->getAtributo('humor') . '<br>';
    echo $filho->getAtributo('sobrenome') . '<br>';
    $filho->setAtributo('humor','Triste');
    $filho->setAtributo('sobrenome','Vinicius');
    echo '<br>';
    echo $filho->getAtributo('humor') . '<br>';
    echo $filho->getAtributo('sobrenome') . '<br>'; */

    //exibir os métodos do objeto
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

    echo '<br><br>';

    echo $filho->__get('nome');

?>