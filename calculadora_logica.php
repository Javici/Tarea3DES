<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora logica</title>
      
    <style>


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
      position: relative;
    }
    header h1 {
      margin: 0;
      font-size: 2.5rem;
      letter-spacing: 2px;
      font-weight: 700;
    }
    .contenedor {
      margin: 40px auto 0 auto;
      background: #fff0f6;
      border-radius: 24px;
      padding: 32px;
      box-shadow: 0 4px 16px rgba(255, 182, 193, 0.15);
      max-width: 600px;
      color: #4298eeff;
      border: 2px solid #69a8faab;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .texto {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
      color: #2369e2ff;
      width: 100%;
    }

    h2 {
      color: #2369e2ff;
      margin-bottom: 10px;
    }
    input[type="text"], input[type="number"] {
      padding: 8px 12px;
      border-radius: 8px;
      border: 1px solid #a6c1ee;
      margin-bottom: 10px;
      font-size: 1rem;
      width: 180px;
      background: #f8fafc;
      color: #2369e2ff;
    }
    .boton {
      display: inline-block;
      padding: 10px 16px;
      border-radius: 16px;
      border: none;
      cursor: pointer;
      margin: 5px;
      background: white;
      color: #2369e2ff;
      font-weight: 500;
      box-shadow: 0 2px 8px rgba(255, 182, 193, 0.10);
      transition: background 0.2s;
    }
    .boton:hover {
      background: #fbc2eb;
      color: #4b4b4b;
    }
    </style>
</head>
<body>
  <header>

    <h1>Calculadora Lógica</h1>
  </header>
  <div class="contenedor">
    <div class="texto">
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
        <br>
        <button type="submit" class="boton">Calcular</button>
      </form>
    </div>
  </div>

</body>
</html>
