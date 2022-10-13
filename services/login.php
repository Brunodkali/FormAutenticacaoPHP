<?php
include('../models/classEmpresa.php');

try {
    if(isset($_POST['entrar'])) {
        $empresa = new Empresa();

        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);

        $empresa->setEmail($email);
        $empresa->setSenha($senha);

        $consulta = $empresa->login();
        if ($consulta) {
            $id = $consulta["codigo_empresa"];
            $email = $consulta["email"];
            $senha = $consulta["senha"];
            $cnpj = $consulta["cnpj"];
            $_SESSION['autenticado'] = true;
            echo "Login realizado com sucesso!";
            exit();

            }
  
        else{
            $_SESSION['nao_autenticado'] = true;
            header("Location: ../views/index.php");
            exit();
        }
    }


}catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>