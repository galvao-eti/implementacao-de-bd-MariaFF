<?php
require '../src/PosAlfa2019/Conexao.php';

class TestePDO extends Conexao
{
  public function testar()
  {
    Conexao::getConnect();
  }
}
