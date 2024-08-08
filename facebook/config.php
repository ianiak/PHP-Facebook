<?php
    
    // PHP Você ira acessar o SQL COM Essas informações
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';
// Variavel Conexao criada, sempre que ela for chamada ira dar acesso ao arquivo SQL
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


    if($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "Conexão Efetuada com Sucesso";
    }

?>