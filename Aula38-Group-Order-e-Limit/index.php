<?php

try{
    $pdo = new PDO("mysql:dbname=bd_teste;host=localhost", "root", "");
    $sql = $pdo->prepare("SELECT * FROM clientes GROUP BY ");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach($clientes as $key =>$value){
        echo $value['nome'];
        echo "<hr>";
    }
    
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}

