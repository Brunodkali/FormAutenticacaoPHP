<?php
    require 'classConexao.php';

    class Empresa{
        protected $table = 'empresa';
        protected $id = 'codigo_empresa';

        private $nome;
        private $email;
        private $senha;

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }
    

        public function login() {
            $sql = "SELECT * FROM empresa WHERE email = :email AND senha = :senha";
            $stmt = Database::prepare($sql);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":senha", $this->senha);
            $stmt->execute();

            return $stmt->fetch();
        }

    }
?>