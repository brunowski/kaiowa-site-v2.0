<?php

$conexao = mysql_connect("localhost", "root", "") or die("Não foi possível conectar ao banco de dados.");
$bd = mysql_select_db("kaiowa", $conexao) or die("Não foi possível selecionar o banco de dados.");

