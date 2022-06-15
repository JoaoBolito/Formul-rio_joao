<?php
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"null";
    $nome = isset($_GET["nome"])?$_GET["nome"]:"null";
    $serie = isset($_GET["serie"])?$_GET["serie"]:"null";
    $idade = isset($_GET["idade"])?$_GET["idade"]:"null";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./exercicios.css">
  <title>exercicio</title>
</head>

<body>
  
    <div class="flex">
      <div class="informacoes">
        <div class="title">
          <h1>Cadastro de estudante</h1>
        </div>
        <h3>Dados do aluno:</h3>
        <div class="name">
          <form action="paginaDirecional.php" method="GET" name="form">
            Nome: <input type="text" name="nome" value="<?php echo ((!empty($nome))? $nome : '');?>" required>
            <select name="sexo" id="sexo" required>
              <option value="Masculino"  <?php echo (($sexo == "Masculino")? "selected" : "");?>>Masculino</option>
              <option value="Feminino" <?php echo (($sexo == "Feminino")? "selected" : "");?>>Feminino</option>
              <option value="Outros" <?php echo(($sexo == "Outros")? "selected" : "");?>>Outros</option>
              <option value="Prefiro não informar" <?php echo(($sexo == "Prefiro não informar")? "selected" : "");?>>Prefiro não informar</option>
            </select></br>
          
        </div>
        <div class="serie">
          N° da série: <input type="number" name="serie" min="1" max="9" value="<?php echo (($serie == 0)? "" : $serie);?>" ></br>
        </div>
        <div class="idade">
          Idade: <input type="number" name="idade" min="0" value="<?php echo (($idade == 0)? "" : $idade);?>" >
          </br></br><input class="botao" type="submit" value="cadastrar">
        </form>
        </div>
      </div>
    </div>
  </body>

</html>