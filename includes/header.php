<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https:/å/fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">




</head>
<body>

<nav class="menu navbar navbar-light">
  <div class="container d-flex">
    <a class="navbar-brand" href="index.php">
      <img src="images/logomanualphi.svg" alt="logo">
    </a>


<button class="btn-rounded " data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <span class="d-flex">
    <img src="images/list.svg" alt="">
    <img src="images/user-circle.svg" alt="">

  </span>



      </button>




<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <img src="images/logomanualphi.svg" alt="logo"></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="nav-item py-2 border-bottom pt-4 pb-4">
      <a class="text-decoration-none text-dark fw-bolder" href="login.php"> Iniciar Sesión</a>
    </div>
    <div class="nav-item py-2 border-bottom pt-4 pb-4">
      <a class="text-decoration-none text-dark fw-bolder" href="register.php"> Registrarme</a>
    </div>
    <div class="nav-item py-2 border-bottom pt-4 pb-4">
      <a class="text-decoration-none text-dark fw-bolder" href="register.php"> Ayuda</a>
    </div>

    <div class="nav-item py-2 border-bottom pt-4 pb-4">
      <a class="text-decoration-none text-dark fw-bolder" href="dashboard.php"> Dashboard</a>
    </div>
    <div class="nav-item py-2 border-bottom pt-4 pb-4">
      <a class="text-decoration-none text-dark fw-bolder" href="dashboard.php"> ¿Qué es manualphi?</a>
    </div>
    <div class="nav-item py-2 border-bottom pt-4 pb-4">
      <a class="text-decoration-none text-dark fw-bolder" href="dashboard.php"> Precios</a>
    </div>
   

    <div class="dropdown mt-3">
      <button class="btn-mn-primary dropdown-toggle text-decoration-none" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Idioma
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Español</a></li>
        <li><a class="dropdown-item" href="#">Inglés</a></li>
        <li><a class="dropdown-item" href="#">Francés</a></li>
      </ul>
    </div>
  </div>
</div>

    
  </div>
</nav>


<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
