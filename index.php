<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$valorProduto = $_POST["valor"];
$desconto = 0;
$codigo = $_POST["codigo"];

if (  $codigo = 1 )
   $desconto = $valorProduto * 15/100;
  
else if ( $codigo = 2 )
    $desconto = $valorProduto * 10/100;

    else if ( $codigo = 3 )
    $desconto = $valorProduto;

    else if ( $codigo = 4 )
    $desconto = $valorProduto + ($valorProduto * 10/100);

    echo "O valor a ser pago pelo produto deverá ser de $valorProduto";

  
?>

</body>
</html>