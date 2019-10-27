
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Other Level</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../public/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  

</head>

<body id="body">
  <div class="container">
    <div class="row">
      <div class="col m12 s12" id="box">
        
        <div align="center">
          <img src="../../public/_imagens/img_logo/definitivoPng.png" id="logo" class="responsive-img"/>
          </div>
        <form method="post" id="login">

          <label for="login">
            <h6>Nome de Usuário</h6>
          </label>
         
          <input class="form-control" type="email" size="30" placeholder="Digite seu e-mail" name="ds_email" class="validate" required />
          
          <label for="senha">
            <h6>Senha</h6>
          </label>
          <input type="password" class="form-control" placeholder="Digite sua senha" name="ds_senha" />
          <br>

          <div id="senhaIncorreta">
            <p>
              <?php

              echo $senhaIncorreta;
              echo $preencha;
              ?>
            </p>
          </div>

          <p> Não tem conta? <a href="#">Crie uma</a></p>

          <button type="submit" value="Acessar" id="btnLogin" class="btn">Acessar</button>

        </form>
        <!-- </div> -->
      </div>
    </div>
  </div>


</body>

</html>