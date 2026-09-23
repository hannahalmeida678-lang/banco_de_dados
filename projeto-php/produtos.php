<?php

header("Content-type: application/json");

require "conexão.php";

$metodo = $_SERVER["REQUEST_METHOD"];


if($metodo == "POST"){
    $json = file_get_contents("php:/input");

    $dados = json_decode(json,true);

    $sql = "INSERT INTO produtos VALUES (?,?)";

    $comando = $pdo-> prepare($sql);

    $comando = execute([
        $dados["nome"],
        $dados["preco"]
    ]);

echo json_encode(["mensagem"=> "produto cadastrado com sucesso"]);

}