<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <!-- Etiquetas meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Icono y título -->
    <link rel="shortcut icon" href="images/cdhez-logo.ico" />
    <title>CDHEZ&nbsp;Asesorías</title>
    <!-- Font Awesome 5.3.1 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <link rel="stylesheet" href="styles/estilos.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <?php
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
    ?>
</head>

<body class="h-100 <?= $pagina ?>">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar principal -->
            <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                <!-- Logo y título -->
                <div class="main-navbar">
                    <nav class="navbar align-items-stretch navbar-light bg-transparent flex-md-nowrap p-0">
                        <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                            <div class="d-table m-auto">
                                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/cdhez-logo.png"
								 alt="Shards Dashboard">
                                <span class="d-none d-md-inline font-weight-light text-white"><b>CDHEZ</b>&nbsp;Asesorías</span>
                            </div>
                        </a>
                        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                            <i class="material-icons">&#xE5C4;</i>
                        </a>
                    </nav>
                </div>
                <!-- Navegación del sidebar -->
                <div class="nav-wrapper">
                    <ul class="nav flex-column">
                        <div class="user-info">
                            <h5 class="m-0">Héctor Alejandro Pérez Martínez</h5>
                            <br>
                            <small class="d-block">CARGO</small>
                            <p>Coordinador de área de Concepción del Oro</p>
                            <br>
                            <small class="d-block">COMPETENCIA</small>
                            <p>Municipal</p>
                            <br>
                            <small class="d-block">REGIÓN</small>
                            <p>Concepción del Oro</p>
                            <br>
                            <h5 class="m-0">09:03 AM</h5>
                            <p>16 de septiembre de 2018</p>
                        </div>
                        <!-- Inicio -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="material-icons">home</i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <!-- Asesorías -->
                        <li class="nav-item">
                            <a class="nav-link" href="asesorias.php">
                                <i class="material-icons">assignment_ind</i>
                                <span>Asesorías</span>
                            </a>
                        </li>
                        <!-- Canalizaciones -->
                        <li class="nav-item">
                            <a class="nav-link" href="canalizaciones.php">
                                <i class="material-icons">directions</i>
                                <span>Canalizaciones</span>
                            </a>
                        </li>
                        <!-- Gestiones -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="gestiones.php">
                                <i class="material-icons">assignment</i>
                                <span>Gestiones</span>
                            </a>
                        </li>
                        <!-- Consultas -->
                        <li class="nav-item">
                            <a class="nav-link" href="consultas.php">
                                <i class="material-icons">multiline_chart</i>
                                <span>Consultas</span>
                            </a>
                        </li>
                        <!-- Usuario -->
                        <li class="nav-item">
                            <a class="nav-link" href="usuarios.php">
                                <i class="material-icons">supervised_user_circle</i>
                                <span>Usuarios</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Contenido principal -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <!-- Navbar principal -->
                <div class="main-navbar sticky-top bg-white">
                    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                        <div class="d-flex align-items-center">
                            <h5 class="d-none d-md-block ml-4 mb-0 text-truncate">
                                <span class="font-weight-bold"></span>
                            </h5>
                        </div>
                        <ul class="navbar-nav flex-row ml-auto mr-2">
                            <li class="nav-item d-flex align-items-center">
                                <button class="text-nowrap px-3 mx-2 btn btn-outline-secondary btn-pill btn-sm" type="button"></i>hperez96</button>
                            </li>
                            <li class="nav-item d-flex align-items-center">
                                <button class="text-nowrap px-3 mx-2 btn btn-danger btn-pill btn-sm" type="button"><i
                                        class="material-icons mr-1">exit_to_app</i>Salir</button>
                            </li>
                        </ul>
                        <nav class="nav">
                            <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-none d-lg-none text-center border-left"
                                data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                                <i class="material-icons">&#xE5D2;</i>
                            </a>
                        </nav>
                    </nav>
                </div>

                <!-- Contenido -->
                <div class="main-content-container container-fluid px-4">
                    <div class="container">