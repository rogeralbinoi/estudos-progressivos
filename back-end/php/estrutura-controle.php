<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Estrutura de controle</title>
</head>
<?php
echo "<pre>";
/*   if/else
---------------------*/
function test($a)
{
  if ($a) {
    return true;
  } else {
    return false;
  }
    
}

// Nesse caso não precisamos do else, já que se houver $a ele não executará o resto da função
function test2($a)
{
  if ($a) {
     return true;
  }
  return false;

}

var_dump(test()); // False
var_dump(test2()); // False
var_dump(test2('aaaa')); // True
echo "</pre>";
?>

<h2>Codigo HTML em condicoes de controle </h2>
<?php $a = 10 ?>
<?php if ($a == 10):?>
<strong>$a é igual a 10!</strong>
<?php else: ?>
<strong>$a não é igual a 10!</strong>
<?php endif ?>


<h2>Estruturas de decisão</h2>
<?php 

function test3($a) {
  switch($a) {
    case (5):
         echo "Hello 5";
         break; // para parar a execução
    case (10):
        return "return \$a $a"; // no caso de funções basta usar o return sem o break
    case (20):
        return "é 20"; 
    default:
        return "Default";  // Caso não seja encontrado nenhum valor, retorna o default
      
  }
}

var_dump(test3($a));

?>




</body>
</html>
