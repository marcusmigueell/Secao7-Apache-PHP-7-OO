<?php

    /*
    interface EquipamentoEletronicoInterface {

        public function ligar();
        public function desligar();

    }

    class Geladeira implements EquipamentoEletronicoInterface {

        public function ligar() {
            echo 'Abrir a Geladeira';
        }

        public function desligar() {
            echo 'fechar a Geladeira';
        }

        public function abrirPorta() {
            echo 'Abrir a porta';
        }

    }

    class TV implements EquipamentoEletronicoInterface {

        public function ligar() {
            echo 'Ligar a televisão';
        }

        public function desligar() {
            echo 'Desligar a televisão';
        }
        
        public function trocarCanal() {
            echo 'Trocar de canal';
        }

    }

    $tv = new TV();
    $geladeira = new Geladeira();

    $tv->ligar();
    echo '<br>';
    $geladeira->ligar();
    
    //------------------------------------------------------------------------------------------------------------------------------------------

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function respirar() {
            echo 'Respirando';
        }

        public function andar() {
            echo 'Andando';
        }

        public function conversar() {
            echo 'Conversando';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'Respirando';
        }

        public function nadar() {
            echo 'Nadando';
        }

        protected function esguichar() {
            echo 'Esguichando';
        }
    }

    $humano = new Humano();
    $baleia = new Baleia();

    $humano->respirar();
    echo '<br>';
    $baleia->nadar();

    //------------------------------------------------------------------------------------------------------------------------------------------

    interface Animal {
        public function comer();
    }

    interface Ave extends Animal {
        public function voar();
    }

    class Papagaio implements Ave {
        public function voar() {
            echo 'Voando';
        }

        public function comer() {
            echo 'Comendo';
        }
    }

    $papagaio = new Papagaio();

    $papagaio->voar();
    echo '<br>';
    $papagaio->comer();

    */

?>