<?php
    json_decode($parks, true);
    $j = 0;
    for($i = 1; $i <= 10; $i++){
        $park[$i] = $parks[$j]->status;
        $j++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="refresh" content="20">-->
    <title>Estacionamiento Dashboard</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">DASHBOARD</a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Configuraciones de pisos</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 ds">
          <li class="nav-item fd nvPos">
            <a class="nav-link active nvlet" aria-current="page" href="/dashboard/1">Piso 1</a>
          </li>
          <li class="nav-item fd nvCuad">
            <a class="nav-link nvlet rg" href="/dashboard/2">Piso 2</a>
          </li>
          <li class="nav-item fd nvCuad">
            <a class="nav-link nvlet rg" href="/dashboard/3">Piso 3</a>
          </li>
            <li class="nav-item fd nvCuad">
                <a class="nav-link nvlet rg" href="/dashboard/statistics">Estadisticas del software</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


<div class="modal" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> BIENVENIDO AL SISTEMA </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mid-image">
              <img class="viene" src="../img/modal_back.jpeg" alt="No hay sistema xd">
          </div>
          <div>
            <p class="pmod">SUPER PARKING SYSTEM</p>
          </div>
      </div>
    </div>
  </div>
</div>
<?php $park8 = "ocupado " ?>
<div class="dashboard">
    <div class="container margin-top">
        <div class="container mapa1">
            <div class="<?php isset($park[1]) ? $park[1] : $park[1] = "liberado"; echo $park[1] ?> identificador">1</div>
            <div class="<?php isset($park[2]) ? $park[2] : $park[2] = "liberado"; echo $park[2] ?> identificador">2</div>
            <div class="<?php isset($park[3]) ? $park[3] : $park[3] = "liberado"; echo $park[3] ?> identificador">3</div>
            <div class="<?php isset($park[4]) ? $park[4] : $park[4] = "liberado"; echo $park[4] ?> identificador">4</div>
            <div class="<?php isset($park[5]) ? $park[5] : $park[5] = "liberado"; echo $park[5] ?> identificador">5</div>
        </div>
        <div class="container calle">
          <div class="drawStreet" style="margin-left: 1rem"></div>
          <div class="drawStreet" style="margin-left: 10.5rem"></div>
          <div class="drawStreet" style="margin-left: 20.1rem"></div>
        </div>
        <div class="container mapa1">
            <div class="<?php isset($park[6]) ? $park[6] : $park[6] = "liberado"; echo $park[6] ?> identificador">6</div>
            <div class="<?php isset($park[7]) ? $park[7] : $park[7] = "liberado"; echo $park[7] ?> identificador">7</div>
            <div class="<?php isset($park[8]) ? $park[8] : $park[8] = "liberado"; echo $park[8] ?> identificador">8</div>
            <div class="<?php isset($park[9]) ? $park[9] : $park[9] = "liberado"; echo $park[9] ?> identificador">9</div>
            <div class="<?php isset($park[10]) ? $park[10] : $park[10] = "liberado"; echo $park[10] ?> identificador">10</div>
        </div>
    </div>
    <?php
        $ocupado = 0;
        $libre = 0;
        $parking = [$park[1], $park[2], $park[3], $park[4], $park[5], $park[6], $park[7], $park[8], $park[9], $park[10]];
        for($i = 0; $i < 10; $i++){
            if($parking[$i] == "liberado" || $parking[$i] == "liberado "){
                $libre++;
            }else{
                if($parking[$i] == "ocupado" || $parking[$i] == "ocupado "){
                    $ocupado++;
                }
            }
        }

        date_default_timezone_set("AMERICA/MEXICO_CITY");
    ?>
    <div class="container info circulo">
        <div>
            <h1>Super Parking</h1>
        </div>
        <div class="maar">
            <h2 class="h2">PISO 1</h2>
        </div>
        <div>
            <p class="p">Numero de lugares ocupados: <?= $ocupado ?></p>
            <p class="p">Numero de lugares libres: <?= $libre ?></p>
            <p class="p">Hora actual: <?= date("H:i:s"); ?></p>
            <p class="p">Fecha:  <?= date("d-m-Y"); ?></p>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
</body>
</html>
