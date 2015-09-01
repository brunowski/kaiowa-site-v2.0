<?php

include_once 'conectBD.php';

   //Inserindo dados na tabela produto
    $sql = "INSERT INTO produto VALUES ('', 'teste', 'aa', 'aa', 'aaa')";
    mysql_query($sql, $conexao);
    //pegando id que foi inserido
    $query = mysql_query("SELECT * FROM produto WHERE nome = 'teste'");
    while ($result = mysql_fetch_object($query)){
        echo 'id ' . $result->id_produto ;
    }