<?php
session_start();
if(!isset($_SESSION['nombre_completo'])){
    header('location: login.php');
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="js/bootstrap.js"></script>

</head>
    <body class="fondo">
      
        <nav class="navbar md:navbar-expand bg-1">
  <div class="container-fluid">
    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" aria-hidden="true"></span>
    </button>
    <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
      <div class="drawer-header">
        <h5 class="drawer-title" id="navbarDrawerLabel">de</h5>
        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
      </div>
      <div class="drawer-body mb-2 md:mb-0">
        <ul class="nav navbar-nav me-auto">
          
          
          <li class="nav-item">
            
            <div class="menu">
              <a class="menu-item" href="#">Action</a>
              <a class="menu-item" href="#">Another action</a>
              <hr class="menu-divider">
              <a class="menu-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario_tipo.php">Agregar Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lista_tipos.php">Ver inventari</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controladores/cerrar_sesion.php">Cerrar sesion</a>
          </li>
          <li class="nav-item">
            <button class="nav-link" type="button" 
            data-bs-toggle="menu" aria-expanded="false">
            Menu
          </button>
          </li>
        </ul>
        
      </div>
      
    </dialog>
  </div>
</nav>
<div class="bor-fondo">
          <h1>koapdkspo</h1>
</div>
