<!--  -->

<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if(!empty($op)){
     if($op == '+'){
      $c = $a + $b;
     }elseif($op == '-'){
      $c = $a - $b;
     }elseif($op == '*'){
      $c = $a*$b;
     }elseif($op =='/'){
      $c = $a/$b;
    }
     echo "O resultado da operação: $c";
   }




?> 






<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="exercicio.php" method="post" >
      Primeiro Número: <input name="num1" type="text"><br>
      Segundo Número: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
   <a href="../login/index.php">Voltar</a>
<?php



?>       
</body>
</html>