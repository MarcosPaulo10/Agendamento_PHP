<?php

    class empresa {
        private $id;
        private $nome;
        private $cnpj;
        private $endereco;
        private $telefone;

        function __construct($nome, $cnpj, $endereco, $telefone) {
            $this->nome = $nome;
            $this->cnpj = $cnpj;
            $this->endereco = $endereco;
            $this->telefone = $telefone;   
    
        }

        public function getId() {
            return $this->id;
        }
    
        public function getNome() {
            return $this->nome;
        }
    
        public function getCnpj() {
            return $this->cnpj;
        }
    
        public function getEndereco() {
            return $this->endereco;
        }
    
        public function getTelefone() {
            return $this->telefone;
        }
    

        public function setId($id) {
            $this->id = $id;
        }
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }
    
        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
    
        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function cadastrar() {
            
            echo "Empresa cadastrada com sucesso!";
        }

        function atualizar() {
            
            echo "Dados da empresa atualizados com sucesso!";
        }

        function apagar() {
            
            echo "Empresa apagada com sucesso!";
        }
    }

?>