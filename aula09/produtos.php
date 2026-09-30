<?php

header("content_Type: application/json");

require "conexao.php";

$metodo = $_SERVER["REQUEST_METHOD"];
//verifica se o metodo é post
if($metodo == "POST"){
    $json = file_get_contents("php://input");

    $dados = json_decode($json,true);

    $sql = "INSERT INTO chamados ( equipamento, setor, descricao, prioridade,status) VALUES (?,?)";    

    $comando = $pdo->prepare($sql);

    $comando -> execute([
        $dados["equipamento"],
        $dados["setor"],
        $dados["descrição"],
        $dados["prioridade"],
        $dados["status"],
    ]);
        echo json_encode(["mensagem"=> "produto cadastrado com sucesso!"]);

};

if($dados["proiridade"] == "extra alto" || "extra baixo"){
    echo json_enconde(["mensagem"=> "você não pode adicionar esse produto"]);
}

 if ($metodo == "GET"){

    $sql = "SELECT * FROM chamados ORDER BY id";

    $comando = $pdo -> query($sql);

    $chamados = $comando -> fetchALL(PDO::FETCH_ASSOC);

    echo json_encode($chamados);
};

if ($metodo == "PUT"){
    $json = file_get_contents("php://input");

    $dados = json_decode($json,true);


    $sql = "UPDATE chamados SET equipamento=?, setor=? WHERE id=?";

    $comando = $pdo -> prepare($sql);
    
    $comando -> execute([
        $dados["nome"],
        $dados["preco"],
        $dados["id"]
    ]);

    echo json_encode(["mensagem"=> "produto atualizado com sucesso!"]);
};

