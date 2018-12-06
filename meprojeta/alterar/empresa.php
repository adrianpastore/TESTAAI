<?php

  require_once('../classes/empresa.php');
  require_once('../DAO/empresaDAO.php');
  $empresaDao = new EmpresaDao();
  $empresa = new Empresa($_POST['nomeEmpresa'],$_POST['cnpj'],$_POST['enderecoEmpresa']);
  $empresaDao->alterar($_GET['idEmpresa'], $cliente->getNome(),$cliente->getCPF(),$cliente->getEmail());
  require_once('../navegacao/empresa.php');

?>
