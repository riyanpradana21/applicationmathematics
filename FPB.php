<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Kalkulator FPB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!--Awal Navbar Code-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="Home.php">Basic Mathematical Calculation System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Kalkulator.php">Calculator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FPB.php">Largest Common Factor</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar Code-->

    <div class="container p-5">
        <h2>Largest Common Factor Calculation</h2>
        <form method="post">
            <div class="form-group">
                <label for="number1">Bilangan 1 : </label>
                <input type="text" class="form-control" name="number1" required>
            </div>
            <div class="form-group">
                <label for="number2">Bilangan 2 : </label>
                <input type="text" class="form-control" name="number2" required>
            </div>
            <button type="submit" class="btn btn-primary">Hasil</button>
            <a href="Home.php" class="btn btn-danger">Quit</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];

    function findGCD($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    $fpb = findGCD($num1, $num2);
    echo "<h4>Hasil dari FPB $num1 dan $num2 adalah : $fpb</h4>";
}
?>
<footer class="bg-primary text-white text-center pb-5">
      <p>Copyright 2023 && Admin</p>
    </footer>