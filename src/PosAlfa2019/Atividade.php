<?php
declare(strict_types=1);
require 'Abstraction/BancoDeDados.php';

class Atividade implements PosAlfa\Abstraction\BancoDeDados
{

  public $id;
  public $titulo;


public function getID() 
{
  return $this->id;
}
  
public function setID($id) 
{
  $this->id= $id;
}

public function getTitulo() 
{
  return $this->titulo;
}
  
public function setTitulo($titulo)
{
    $this->titulo= $titulo;
}

public function connect(string $dsn, string $user, string $pass): \PDO
{
    return new \PDO($dsn, $user, $pass, [
        \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_CASE     => \PDO::CASE_LOWER
    ]);
}

public function prepare(\PDO $pdo, string $sql): \PDOStatement
{
    return $pdo->prepare($sql);
}

  public function insert() {
    try {
      $sql = 'INSERT INTO atividade (id, titulo, descricao) VALUES ( :id, :titulo, :descricao )';
       $pdo = $this->connect('mysql:host=localhost;dbname=alfa-poo', 'root', 'root');
       $stmt = $this->prepare($pdo, $sql);
       return $stmt;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}
}
