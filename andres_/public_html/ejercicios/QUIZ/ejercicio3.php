<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> QUIZ AR 11-2</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Cover</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
          </nav>
        </div>
      </header>

      <main class="px-3">
        <h1>QUIZ</h1>

        <form action="./ejercicio3.php" method="POST">
          <label for="">Ingresa un numero</label>
          <input type="number" name="numero" id= "numero" min="0" max="9" required> <br><br>
          <button type="submit" name="submit" id="enviar">enviar</button>
        </form>

        <?php
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["numero"])) {
    $numero = htmlspecialchars($_POST["numero"]);
    $cont = 1;
    while (isset($numero) and $cont <= 9) {
        $mult = $numero * $cont;
        $cont = $cont + 1;
        echo htmlspecialchars($numero), " x ", htmlspecialchars($cont), " = ", htmlspecialchars($mult), "<br>";
    }
    exit();
}
        ?>
      </main>
      <footer class="mt-auto text-white-50">
      </footer>
    </div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>