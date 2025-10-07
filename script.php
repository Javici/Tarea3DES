<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #87ceeb; /* azul claro */
    }
    .resultados {
      margin-left: 40px;
      margin-top: 30px;
      background: #fff;
      border-radius: 16px;
      padding: 24px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      max-width: 600px;
    }
  </style>
</head>
<body>
<div class="resultados">
<h2>Resultados</h2>
<?php
function esPar($numero) {
  return $numero % 2 == 0;
}
if (isset($_GET['nombre'])) {
  $nombre = $_GET['nombre'];
  echo "<h3>Buenos días, $nombre</h3>";
}
if (isset($_GET['edad'])) {
  $edad = $_GET['edad'];
  echo "<h3><u>Clasificación por edad:</u></h3>"; 
  if ($edad <= 11) {
    echo "<h3> Niño</h3>";
  } else if ($edad >= 12 && $edad <= 17) {
    echo "<h3> Adolescente</h3>";
  } else if ($edad >= 18 && $edad <= 64) {
    echo "<h3> Adulto</h3>";
  } else {
    echo "<h3> Adulto Mayor</h3>";
  }
} 
if (isset($_GET['numero1'])&&isset($_GET['numero2'])){
  $num1 = $_GET['numero1'];
  $num2 = $_GET['numero2'];
  echo "<h3><u>Comparacion:</u></h3>";
  if ($num1 > $num2) {
    echo "<h3> $num1 es mayor que $num2</h3>";
  } else if ($num2 > $num1) {
    echo "<h3> $num2 es mayor que $num1</h3>";
  } else {
    echo "<h3>Los 2 números son iguales</h3>";
  }
  echo "<h3><u>¿Son ambos numeros positivos</u></h3>";
  if ($num1>0&&$num2>0){
    echo "<h3>Si</h3>";
  }
  if ($num1<0||$num2<0){
    echo "<h3>Al menos unos de los números es negativo</h3>";
  }else{
    echo "<h3>Ningún número es negativo</h3>";
  }
  if ($num1==0 XOR $num2==0){
    echo "<h3>Exactamente uno de los numeros es cero</h3>";
  }else{
    echo "<h3>Ningún número es cero (o los dos son cero)</h3>";
  }
  echo "<h3>¿Ambos son pares?:</h3>";
  if (esPar($num1)&&esPar($num2)){
    echo "<h3>Si</h3>";
  }else if(esPar($num1)&&!esPar($num2)){
    echo "<h3>El numero $num1 es par y el $num2 es impar</h3>";
  }else if(!esPar($num1)&&esPar($num2)){
    echo "<h3>El numero $num2 es par y el $num1 es impar</h3>";
  }else{
    echo "<h3>Ninguno lo es</h3>";
  }
}
?>
</div>
</body>
</html>