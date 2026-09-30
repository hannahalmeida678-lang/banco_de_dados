<?php

header("content_Type: application/json");

require "CONEXÃO.PHP";

$metodo = $_SERVER["REQUEST_METHOD"];
//verifica se o metodo é post
if($metodo == "POST"){
    $json = file_get_contents("php://input");

    $dados = json_decode($json,true);

    $sql = "INSERT INTO produtos (nome,preco) VALUES (?,?)";    

    $comando = $pdo->prepare($sql);

    $comando -> execute([
        $dados["nome"],
        $dados["preco"]
    ]);

    echo json_encode(["mensagem"=> "produto cadastrado com sucesso!"]);
};

//verifica se o metodo é GET
if ($metodo == "GET"){

    $sql = "SELECT * FROM produtos ORDER BY id";

    $comando = $pdo -> query($sql);

    $produtos = $comando -> fetchALL(PDO::FETCH_ASSOC);

    echo json_encode($produtos);
};
//verifica se o metodo é PUT
if ($metodo == "PUT"){
    $json = file_get_contents("php://input");

    $dados = json_decode($json,true);

    if($dados["nome"] == "celular"){
        echo json_encode(["mensagem"=> "você não pode adicionar esse produto"]);
    }

    $sql = "UPDATE produtos SET nome=?, preco=? WHERE id=?";

    $comando = $pdo -> prepare($sql);
    
    $comando -> execute([
        $dados["nome"],
        $dados["preco"],
        $dados["id"]
    ]);

    echo json_encode(["mensagem"=> "produto atualizado com sucesso!"]);
};

//verifica se o metodo é delete
if($metodo == "DELETE"){
    $json = file_get_contents("php://input");

     $dados = json_decode($json,true);

     $sql = "DELETE FROM produtos WHERE id=?";

     $comando = $pdo -> prepare($sql);

     $comando -> execute([
        $dados["id"]
     ]);
     
     echo json_encode(["mensagem"=> "produto deletado com sucesso!"]);
}