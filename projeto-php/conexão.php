<?php

$host ="192.168.10.94";
$usuario = "postgres";
$senha = "4321";
$banco = "lojaalmeida";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);