<?php

use Veiculo as GlobalVeiculo;

class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    class Carro extends Veiculo {
        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abriTetoSolar() {
            echo 'abrindo teto solar';
        }

        function alterarPosicaoVolante () {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Empinar';
        }

        //sobrescrita do método, ou seja, pilar do polimorfismo
        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
        }
    }

    class Caminhao extends Veiculo { 

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }
    }

    $carro = new Carro('ABC1234', 'Vermelha');
    $moto = new Moto('DEF1122', 'Preta');
    $caminhao = new Caminhao('GHI1011', 'Cinza');

    echo '<pre>';
        print_r($carro);
        echo '<br>';
        print_r($moto);
        echo '<br>';
        print_r($caminhao);
    echo '</pre>';

    echo '<hr>';

    $carro->trocarMarcha();
    echo '<br>';
    $carro->abriTetoSolar();

    echo '<hr>';

    $moto->trocarMarcha();
    echo '<br>';
    $moto->empinar();

    echo '<hr>';

    $caminhao->trocarMarcha();


?>