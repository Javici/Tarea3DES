<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora logica</title>
      
    <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url('https://st2.depositphotos.com/2673929/6809/i/450/depositphotos_68092891-stock-illustration-advanced-calculus.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .boton {
      display: inline-block;
      padding: 10px 16px;
      border-radius: 6px;
      border: 0;
      cursor: pointer;
      margin: 5px;
    }

    .btn-primary {
      background: white;
      color: white;
    }

    .contenedor {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: lightblue;
      border-radius: 16px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.08);
      padding: 2.5rem 3rem;
    }

    .texto {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
      color: black;
    }
    </style>
</head>
<body>
  <div class="contenedor">
    <div class="texto">
      <h1>Calculadora Logica</h1>
      <br>
      <h2>Por favor rellene todos los campos</h2>
      <form action="script.php" method="get" style="display:inline;">
        <h2>Nombre</h2>
        <input type="text" id="nombre" name="nombre" required> 
        <h2>Edad</h2>
        <input type="number" id="edad" name="edad" min="1" required>
        <h2>Numero 1</h2>
        <input type="number" id="numero1" name="numero1" required>
        <h2>Numero 2</h2>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <button type="submit" class="boton btn-primary">Calcular</button>
      </form>
    </div>
  </div>

</body>
</html>
