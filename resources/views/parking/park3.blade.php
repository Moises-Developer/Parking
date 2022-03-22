<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <li class="nav-item fd nvCuad">
            <a class="nav-link nvlet" aria-current="page" href="/dashboard/1">Piso 1</a>
          </li>
          <li class="nav-item fd nvCuad">
            <a class="nav-link nvlet rg" href="/dashboard/2">Piso 2</a>
          </li>
          <li class="nav-item fd nvPos">
            <a class="nav-link active nvlet rg" href="/dashboard/3">Piso 3</a>
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

<div class="dashboard">
    <div class="container margin-top">
        <div class="container mapa1">
            <div class="liberado identificador">21</div>
            <div class="liberado identificador">22</div>
            <div class="liberado identificador">23</div>
            <div class="liberado identificador">24</div>
            <div class="liberado identificador">25</div>
        </div>
        <div class="container calle">
          <div class="drawStreet" style="margin-left: 1rem"></div>
          <div class="drawStreet" style="margin-left: 10.5rem"></div>
          <div class="drawStreet" style="margin-left: 20.1rem"></div>
        </div>
        <div class="container mapa1">
            <div class="liberado identificador">26</div>
            <div class="liberado identificador">27</div>
            <div class="liberado identificador">28</div>
            <div class="liberado identificador">29</div>
            <div class="liberado identificador">30</div>
        </div>
    </div>
    <div class="container info circulo">
        <div>
            <h1>Super Parking</h1>
        </div>
        <div class="maar">
            <h2 class="h2">PISO 3</h2>
        </div>
        <div>
            <p class="p">Numero de lugares ocupados: </p>
            <p class="p">Numero de lugares libres: </p>
            <p class="p">Hora actual: </p>
            <p class="p">Fecha: </p>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
</body>
</html>
