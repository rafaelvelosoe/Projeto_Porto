<?php
require_once '../../config/classes.php';
require_once '../../config/conexao1.php';


$login = new Login($databasedb, $hostnamedb, $usernamedb, $passworddb);
$senhaIncorreta = '';
$preencha ='';

  if (isset($_POST['ds_email'])) {

    $ds_email = $_POST['ds_email'];
    $ds_senhacripto = $_POST['ds_senha'];
    $ds_senha =md5($ds_senhacripto);
    //$ds_senha=$_POST['ds_senha'];
      session_start();

      if (!empty($ds_email) && !empty($ds_senha)) {
        $dados = $login->logarCliente($ds_email, $ds_senha);
        if (count($dados) > 0) {
          $login2 = true;
          $cd_nivelpermissao = 2;
          for ($i = 0; $i < count($dados); $i++) {
            foreach ($dados[$i] as $k => $v) {
              if ($k == "cd_cliente") {
                $cd_cliente = $v;
              }
              if ($k == "ic_situacaoCadastral") {
                $ic_situacaoCadastral = $v;
              }
            } //Fim do FOREACH
          }
        }

        $dados = $login->logarGestor($ds_email, $ds_senha);
        if (count($dados) > 0) {
          $login2 = true;
          $cd_nivelpermissao = 3;
          for ($i = 0; $i < count($dados); $i++) {
            foreach ($dados[$i] as $k => $v) {
              if ($k == "cd_gestor") {
                $cd_gestor = $v;
              }
              if ($k == "cd_cliente") {
                $cd_cliente = $v;
              }
              if ($k == "ic_situacaoCadastralGestor") {
                $ic_situacaoCadastralGestor = $v;
              }
            } //Fim do FOREACH
          }
        }

        $dados = $login->logarFuncionario($ds_email, $ds_senha);
        if (count($dados) > 0) {
          $login2 = true;
          $cd_nivelpermissao = 4;
          for ($i = 0; $i < count($dados); $i++) {
            foreach ($dados[$i] as $k => $v) {
              if ($k == "cd_funcionario") {
                $cd_funcionario = $v;
              }
              if ($k == "cd_cliente") {
                $cd_cliente = $v;
              }
              if ($k == "ic_situacaoCadastralFunc") {
                $ic_situacaoCadastralFunc = $v;
              }
            } //Fim do FOREACH
          }
        }

        if (isset($login2)) {
          if (isset($cd_cliente)){
            $_SESSION['cd_cliente'] = $cd_cliente;
          }
          if (isset($cd_gestor)){
            $_SESSION['cd_gestor'] = $cd_gestor;
            $_SESSION['cd_cliente'] = $cd_cliente;
          }
          if (isset($cd_funcionario)){
            $_SESSION['cd_funcionario'] = $cd_funcionario;
            $_SESSION['cd_cliente'] = $cd_cliente;
          }
          $_SESSION['cd_nivelpermissao'] = $cd_nivelpermissao;

          if ($_SESSION['cd_nivelpermissao'] == 2) {
            header('location: ../src/Administrador/index.php');
          } else if ($_SESSION['cd_nivelpermissao'] == 3) {
            header('location: ../src/Gestor/index.php');
          } else if ($_SESSION['cd_nivelpermissao'] == 4) {
            header('location: ../src/Funcionario/index.php');
          }
        } else {
          // echo '<p class="cnpj_invalido">Usuário e/ou Senha incorretos!</p>';
          $senhaIncorreta = "Usuário e/ou Senha incorretos!";
        }
    } else {
      $preencha = "Preencha todos os campos!" ;
      
    }  
  }








?>

