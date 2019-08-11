<?php

require './Abstraction/BancoDeDados.php';

abstract class Conexao implements BancoDeDados
{
  public function getConnect()
  {
    $dsn = "mysql:host=localhost;dbname=atividade_avaliativa";
    $user = "root";
    $pass = '';
    $sql = 'INSERT INTO atividade_avaliativa (nome, descricao) VALUES ("teste", "trabalhinho")';
    try {
      $pdo = connect($dsn, $user, $pass);
      $sttr = prepare($pdo, $sql);
      $sttr->execute();
    } catch (PDOException $e) {
      return "Erro" . $e->getMessage();
    }
  }
}
