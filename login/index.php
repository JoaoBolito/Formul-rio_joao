<!-- backend -->
<?php
$nome = isset($_GET["nome"])?$_GET["nome"]: "null";
$email = isset($_GET["email"])?$_GET["email"]: "null";
$senha = isset($_GET["senha"])?$_GET["senha"]: "null"; 



?>








<!-- frontend -->

<!DOCTYPE html>
<html>
    <head>
        <!-- o content="width=device-width" iguala a largura da minha tela em qualquer tela(responsividade).
        o "o initial-scale=1.0" define o nível de zoom(nenhum zoom será aplicado) -->
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="./style.css">

<!-- javaScript -->

        <script type="text/javascript">
          function validar(event){
           var senha = form.senha.value;
           var confirmarsenha = form.confirmarsenha.value;

           var erro = false;
           if(senha == "" || senha.length <= 5){
            alert ('preencha o campo senha com no mínimo 6 caracteres');
            form.senha;
            erro = true;
           }

           if(confirmarsenha == "" || confirmarsenha.length <=5){
            alert ("Preencha o campo senha com no mínimo 6 caracteres");
            form.confirmarsenha;
            erro = true;
           }


           if (senha != confirmarsenha){
            alert("Senhas não semelhantes")
            form.confirmarsenha.focus();
            erro = true;
           }
          
          if (erro) {
            event.preventDefault()
          }

          }
        </script>



    </head>
    <body>
        <!-- class= wrapper serve para envolver outros outros objetos afim de adicionar outros atributos ou melhor organiza-los no código-->
        <div class="wrapper">
            <a href="#"></a><h2>Registro</h2>
            <form action="../calculadora/exercicio.php" method="POST" name="form" onsubmit="validar(event)">
                <div class="input-box">
                  <input type="text" name="nome" placeholder="Insira seu nome" >
                </div>
                <div class="input-box">
                  <input type="text" name="email" placeholder="insira seu email" >
                </div>
                <div class="input-box">
                  <input type="password" name="senha" placeholder="Crie uma senha" >
                </div>
                <div class="input-box">
                  <input type="password" name="confirmarsenha" placeholder="Repita a senha" >
                </div>
                <div class="policy">
                  <input type="checkbox" >
                  <h3>Aceito todos os termos e condições</h3>
                </div>
                <div class="input-box button">
                  <input type="submit" value="Confirmar">
                </div>
                <div class="text">
                  <h3>Já possui conta? <a href="#">Login</a></h3>
                </div>
            </form>
        </div>
        
    </body>
</html>