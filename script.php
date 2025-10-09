<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .header-btn {
      position: absolute;
      top: 4vh;
      left: 5vw;
      background: white;
      color: black;
      border: none;
      border-radius: 16px;
      padding: 10px 18px;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(255, 182, 193, 0.10);
      transition: background 0.2s;
      text-decoration: none;
      z-index: 2;
    }
    .header-btn:hover {
      background: #fbc2eb;
      color: #4b4b4b;
    }

    body {
      background: linear-gradient(135deg, #f8fafc 0%, #ffe5ec 100%);
      font-family: 'Segoe UI', Arial, sans-serif;
      margin: 0;
      min-height: 100vh;
    }
    header {
      background: #000000;
      color: white;
      padding: 32px 0 24px 0;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      border-bottom-left-radius: 32px;
      border-bottom-right-radius: 32px;
    }
    header h1 {
      margin: 0;
      font-size: 2.5rem;
      letter-spacing: 2px;
      font-weight: 700;
    }
    .resultados {
      margin: 40px auto 40px auto;
      background: #fff0f6;
      border-radius: 24px;
      padding: 32px;
      box-shadow: 0 4px 16px rgba(255, 182, 193, 0.15);
      max-width: 600px;
      color: #4298eeff;
      border: 2px solid #69a8faab;
    }
    h2 {
      color: #013b79ff;
      margin-top: 0;
    }
    h3 {
      color: #2369e2ff;
      font-weight: 500;
      margin-bottom: 10px;
    }
    u {
      color: #013b79ff;
    }
  </style>
</head>
<body>
<header>
  <a href="calculadora_logica.php" class="header-btn">Inicio</a>
  <h1>Calculadora Lógica</h1>
</header>
<div class="resultados">
<h2><u><b>Resultados</u></b></h2>
<?php

// Primero definimos la función esPar para verificar si un número es par(la usaremos luego pero la inicializamos al principio)
// Esta funcion usa el modulo (comprueba el resto de dividir el numero entre 2) y si es par, va a salir 0 con lo que va a ser true
// Tiene un if para que si el numero es 0 devuelva false, ya que 0 no es ni par ni impar
function esPar($numero) {
  if ($numero == 0) {
    return false;
  }else{
    return $numero % 2 == 0;
  }
  }
// Luego usamos isset para verificar si las variables estan creadas y definidas
if (isset($_GET['nombre']) && isset($_GET['edad']) && isset($_GET['numero1']) && isset($_GET['numero2'])) {
  // Guardamos las variables que vamos a usar con $_GET
  $nombre = $_GET['nombre'];
  $edad = $_GET['edad'];
  $num1 = $_GET['numero1'];
  $num2 = $_GET['numero2'];
  
  echo "<h3>Buenos días, $nombre</h3>";

  echo "<h3><u>Clasificación por edad:</u></h3>"; 
  // Hacemos la clasificacion por edad con el if else
  if ($edad <= 11) {
    echo "<h3> Niño</h3>";
  } else if ($edad >= 12 && $edad <= 17) {
    echo "<h3> Adolescente</h3>";
  } else if ($edad >= 18 && $edad <= 64) {
    echo "<h3> Adulto</h3>";
  } else {
    echo "<h3> Adulto Mayor</h3>";
  }
 
  // Comparamos los numeros con <> 
  echo "<h3><u>Comparacion:</u></h3>";
  if ($num1 > $num2) {
    echo "<h3> $num1 es mayor que $num2</h3>";
  } else if ($num2 > $num1) {
    echo "<h3> $num2 es mayor que $num1</h3>";
  } else {
    echo "<h3>Los 2 números son iguales</h3>";
  }

  // Para ver si son positivos vemos si los dos son mayores que 0 con &&
  echo "<h3><u>¿Son ambos numeros positivos</u></h3>";
  if ($num1>0&&$num2>0){
    echo "<h3>Si</h3>";
  }else{
    echo "<h3>No</h3>";
  }

  // Para ver si alguno es negativo es lo mismo pero con ||
  echo "<h3><u>¿Al menos unos de los números es negativo?</u></h3>";
  if ($num1<0||$num2<0){
    echo "<h3>Si</h3>";
  }else{
    echo "<h3>No</h3>";
  }

  // Para ver si exactamente uno es cero usamos XOR, que devuelve true si solo uno de los dos es true
  // nos va a dar false si ninguno es 0 o los dos son 0
  echo "<h3><u>¿Exactamente uno de los números es cero?</u></h3>";
  if ($num1==0 XOR $num2==0){
    echo "<h3>Exactamente uno de los numeros es cero</h3>";
  }else{
    echo "<h3>Ningún número es cero (o los dos son cero)</h3>";
  }

  // Para comprobar si son pares vamos a usar la funcion esPar que definimos al principio
  // Con los operadores logicos comprobamos si los dos son pares, si uno es par y el otro no o si ninguno lo es
  echo "<h3><u>¿Ambos son pares?:</u></h3>";
  if (esPar($num1)&&esPar($num2)){
    echo "<h3>Si</h3>";
  }else if(esPar($num1)&&!esPar($num2)){
    echo "<h3>No, el numero $num1 es par y el $num2 es impar</h3>";
  }else if(!esPar($num1)&&esPar($num2)){
    echo "<h3>No, el numero $num2 es par y el $num1 es impar</h3>";
  }else{
    echo "<h3>Ninguno lo es</h3>";
  }

  // Aqui vamos a comprobar si los dos numeros son iguales con ==, lo cual comprueba que los dos valores son iguales, independiente del tipo de dato que sean
  echo "<h3><u>¿Son iguales con == ?:</u></h3>";
  if ($num1==$num2){
    echo "<h3>Si</h3>";
  }else{
    echo "<h3>No</h3>";
  }

  // Y con el === comprobamos que no solo el valor es el mismo, sino que tienen el mismo tipo de dato
  // En este caso no podemos hacer que la comprobacion anterior y esta sean distintas porque solo aceptamos numeros como tipos de datos asi que si tienen el mismo valor van a ser siempre del mismo tipo de dato
  echo "<h3><u>¿Son iguales con === ?:</u></h3>";
  if ($num1===$num2){
    echo "<h3>Si</h3>"; 
  }else{
    echo "<h3>No</h3>";
  }

  if ($edad>=18&&esPar($num1)&&esPar($num2)){
    echo "<h3>Eres mayor de edad y ambos números son pares</h3>";
  }else if($edad<18&&($num1<0||$num2<0)){
    echo "<h3>Eres menor de edad y al menos uno de los números es negativo</h3>";  
  }else{echo "<h3>Condiciones Normales</h3>";}
}
?>
</div>
</body>
</html>