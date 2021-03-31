<?php

try {
    // faz conexão com banco
    $conectar = new PDO("mysql:host=localhost; port=3306;dbname=pdo;", "root","");
    //echo "conectado com sucesso!";


} catch (PDOException $e) {

    // caso ocorra algum erro de conexao
    echo 'Falha ao conectar: '. $e->getMessage();

}