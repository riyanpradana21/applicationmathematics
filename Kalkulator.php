<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Menu</title>
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

    <div class="Kalkulator">
        <h2 class="Header text-center mt-5">Menu Kalkulator</h2>
        <form method="post" action="Kalkulator.php">
            <div class="mb-3">
                <label for="bilangan1" class="form-label">Bilangan 1</label>
                <input type="number" name="bilangan1" id="bilangan1" class="form-control">
            </div>
            <div class="mb-3">
                <label for="operator" class="form-operator">operator</label>
                <select name="operator" id="operator" class="form-select">
                    <option value="tambah">&plus;</option>
                    <option value="kurang">&sub;</option>
                    <option value="kali">&times;</option>
                    <option value="bagi">&divide;</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="bilangan1" class="form-label">Bilangan 2</label>
                <input type="number" name="bilangan2" id="bilangan2" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary"> Hitung Angka </button>
            <a href="Home.php" class="btn btn-danger">Quit</a>
        </form>
        <div class="mt-3 fs-3 fw-semibold">
            <h2>Hasil Bilangan : </h2>
            <?php
            if($_POST) {
                switch($_POST['operator']) {
                    case 'tambah':
                        echo $_POST['bilangan1'] + $_POST['bilangan2'];
                        break;
                    case 'kurang':
                        echo $_POST['bilangan1'] - $_POST['bilangan2'];
                        break;
                    case 'kali':
                        echo $_POST['bilangan1'] * $_POST['bilangan2'];
                        break;
                    case 'bagi':
                        echo $_POST['bilangan1'] / $_POST['bilangan2'];
                        break;
                }
            }
            ?>
        </div>
    </div>
    <footer class="bg-primary text-white text-center pb-5">
      <p>Copyright 2023 && Admin</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>