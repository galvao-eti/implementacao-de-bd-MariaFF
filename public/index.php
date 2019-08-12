<?php
require '../src/PosAlfa2019/Atividade.php';

$atividade = new Atividade();
$stmt = $atividade->insert();

$id= 3;
$titulo = "Futebol";
$descricao = "fazer gol";
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->execute();