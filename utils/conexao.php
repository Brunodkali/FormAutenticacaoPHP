<?php
// endereço
// nome DB
// usuario
// senha

$host = 'babar.db.elephantsql.com';
$banco = 'dashboard';
$usuario = 'vjwaebyz';
$senha = 'yPOofGu7Psdelk_03BvBtfn2-ar5z9IE';

try {
    define('dsn', 'pgsql:host=babar.db.elephantsql.com;port=5432;dbname=vjwaebyz;user=vjwaebyz;password=yPOofGu7Psdelk_03BvBtfn2-ar5z9IE');
    $pdo = new PDO(dsn);
    echo 'Conectado ao banco de dados!';
} catch (PDOException $e) {
    echo 'Falha ao conectar no banco de dados! <br/>';
    die($e->getMessage());
}

?>