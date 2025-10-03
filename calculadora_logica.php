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

    .btn {
      display: inline-block;
      padding: 10px 16px;
      border-radius: 6px;
      border: 0;
      cursor: pointer;
      margin: 5px;
    }

    .btn-primary {
      background: #007bff;
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
      color: white;
      text-shadow:
                -2px -2px 0 #000,
                2px -2px 0 #000,
                -2px 2px 0 #000,
                2px 2px 0 #000,
                -3px 0px 0 #000,
                3px 0px 0 #000,
                0px -3px 0 #000,
                0px 3px 0 #000;
    }
    </style>
</head>
<body>
  <div class="contenedor">
    <div class="texto">
      <h1>Calculadora Logica</h1>
      <br>
      <h2>Seleccione una opción:</h2>
      <div>
        <form action="registroC.php" method="get" style="display:inline;">
          <button type="submit" class="btn btn-primary">Registros Clientes</button>
        </form>
        <form action="registroH.php" method="get" style="display:inline;">
          <button type="submit" class="btn btn-primary">Registros Médicos</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
