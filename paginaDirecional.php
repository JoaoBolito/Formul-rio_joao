<?php


  
  $dados = ((isset($_GET['informacoes']))? $_GET['informacoes'] : '');
  $ExibeForm = True;

  $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"null";
  $nome = isset($_GET["nome"])?$_GET["nome"]:"null";
  $serie = isset($_GET["serie"])?$_GET["serie"]:"null";
  $idade = isset($_GET["idade"])?$_GET["idade"]:"null";

  $link = 'exercicios.php?nome=' . $nome;
  $link .= '&sexo=' . $sexo;
  $link .= '&serie=' . $serie;
  $link .= '&idade=' . $idade;

  if(empty(trim($nome))){
    echo "O campo nome precisa ser preenchido corretamente";
    $ExibeForm = False;
  }elseif(is_numeric($nome)){
    echo"O campo nome precisa ser preenchido corretamente</br>";
    $ExibeForm = False;
  }

  if(empty(trim($serie))){
    echo "A série precisa ser prenchida corretamente";
    $ExibeForm = False;
  }elseif(!is_numeric($serie)){
    echo "Preencha de forma corretamente";
    $ExibeForm = False;
  }elseif($serie <= 1 && $serie >= 9 ){
    echo"Série invalida";
    $ExibeForm = False;
  }

  if(empty(trim($idade))){
    echo "Preencha idade corretamente";
    $ExibeForm = False;
  }elseif(!is_numeric($idade)){
    echo "preencha o campo idade corretamente";
    $ExibeForm = False;
  }elseif ($idade <= 1 && $idade >= 18){
    echo "Idade inválida";
    $ExibeForm = False;
  }


 if(in_array($sexo, array("Feminino", "Masculino", "Outros", "Prefiro não informar")) == false){
    echo "Opção inválida";
    $ExibeForm = False;
 }
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="exercicios.css">
  <title>Dados cadastrados</title>
</head>

<body>
  <?php if($ExibeForm == true){?>
  <h1>Dados informados:</h1>
  </br> NOME: <?php echo $nome;?>
  </br> SEXO: <?php echo $sexo;?>
  </br> IDADE: <?php echo $idade;?>
  </br> SÉRIE: <?php echo $serie;?>

</body>
</br> <a href="<?php echo $link ?>">Voltar</a>
<?php } ?>

</html>