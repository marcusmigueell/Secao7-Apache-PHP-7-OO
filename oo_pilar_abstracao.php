<?php

    class Funcionario{

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //construtor
        function __construct($nome) {
            $this->nome = $nome;
        }

        //destruidor
        function __destruct() {
            
        }

        //getters and setters
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        //métodos
        function resumirCadastroFunc() {
            return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s)';
        }

        function modificarNumFilhos($numFilhos) {
            //modificar o atributo numFilhos do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $funcionario = new Funcionario('Marcus');

    //$funcionario->__set('nome', 'Marcus');
    $funcionario->__set('numFilhos', 0);

    echo $funcionario->resumirCadastroFunc();

    echo '<br>';

?>