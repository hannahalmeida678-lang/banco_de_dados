<?php

header("Content-Type: application/json");

require "conexao.php";

$metodo = $_SERVER["REQUEST_METHOD"];

// verifica se o metodo é post

if($metodo == "POST"){

    $json = file_get_contents("php://input");

    $dados = json_decode($json,true);

    $sql = "INSERT INTO pecas (nome, categoria, fornecedor, quantidade, preco_unitario) VALUES (?,?,?,?,?)";    

    $comando = $pdo->prepare($sql);

    $comando -> execute([

        $dados["nome"],
        $dados["categoria"],
        $dados["fornecedor"],
        $dados["quantidade"],
        $dados["preco_unitario"],

    ]);

    echo json_encode(["mensagem"=> "peca cadastrada com sucesso!"]);

};


// verifica a categoria

if($dados["categoria"] != "eletrica" && $dados["categoria"] != "mecanica" && $dados["categoria"] != "hidraulica"){

    echo json_encode(["mensagem"=> "categoria invalida"]);

};


// verifica a quantidade

if($dados["quantidade"] < 0){

    echo json_encode(["mensagem"=> "a quantidade nao pode ser negativa"]);

};


// verifica o preco

if($dados["preco_unitario"] <= 0){

    echo json_encode(["mensagem"=> "o preco deve ser maior que zero"]);

};


if ($metodo == "GET"){

    $sql = "SELECT * FROM pecas ORDER BY id";

    $comando = $pdo -> query($sql);

    $pecas = $comando -> fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($pecas);

};


if ($metodo == "PUT"){

    $json = file_get_contents("php://input");

    $dados = json_decode($json,true);


    $sql = "UPDATE pecas SET nome=?, categoria=?, fornecedor=?, quantidade=?, preco_unitario=? WHERE id=?";

    $comando = $pdo -> prepare($sql);

    $comando -> execute([

        $dados["nome"],
        $dados["categoria"],
        $dados["fornecedor"],
        $dados["quantidade"],
        $dados["preco_unitario"],
        $dados["id"]

    ]);

    echo json_encode(["mensagem"=> "peca atualizada com sucesso!"]);

};


if ($metodo == "DELETE"){

    $json = file_get_contents("php://input");

    $dados = json_decode($json,true);


    $sql = "DELETE FROM pecas WHERE id=?";

    $comando = $pdo -> prepare($sql);

    $comando -> execute([

        $dados["id"]

    ]);

    echo json_encode(["mensagem"=> "peca excluida com sucesso!"]);

};

?>