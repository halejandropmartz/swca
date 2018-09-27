<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Inicio</span>
        <h3 class="page-title">Bienvenido</h3>
    </div>
</div>

<!-- Bienvenida -->
<div class="row">
    <div class="col-12">
        <div class="card card-small mb-4">
            <div class="card-header">
                <img class="img-fluid" src="images/logos/cdhez.jpg" alt="Logo de la CDHEZ">
            </div>
            <div class="card-body d-flex flex-column">
                <p class="mb-0 font-weight-normal" style="font-size:1rem;">Esta plataforma web es un sistema para captura de asesorías y sus
                    canalizaciones y gestiones. Ofrece agilizar los procesos de registro y consulta de
                    asesorías de la Comisión de Derechos Humanos del Estado de Zacatecas.</p>
            </div>
        </div>
    </div>
</div>

<!-- Secciones -->
<div class="row">
    <div class="col-12">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="m-0">Puedes visitar las siguientes secciones</h6>
                </div>
            </div>
            <div class="card-body">
                <a href="asesorias.php" class="btn btn-pill btn-outline-accent"><i class="material-icons mr-1">assignment_ind</i>Asesorías</a>
                <a href="canalizaciones.php" class="btn btn-pill btn-outline-accent"><i class="material-icons mr-1">directions</i>Canalizaciones</a>
                <a href="gestiones.php" class="btn btn-pill btn-outline-accent"><i class="material-icons mr-1">assignment</i>Gestiones</a>
                <a href="consultas.php" class="btn btn-pill btn-outline-accent"><i class="material-icons mr-1">multiline_chart</i>Consultas</a>
                <a href="usuarios.php" class="btn btn-pill btn-outline-accent"><i class="material-icons mr-1">supervised_user_circle</i>Usuarios</a>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php' ?>