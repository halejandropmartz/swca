<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Gestiones</span>
        <h3 class="page-title">Listado de gestiones</h3>
    </div>
</div>

<!-- Contenido de página -->
<div class="row">
    <!-- Panel de la tabla -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <a href="capturar-gestion.php" class="btn btn-pill btn-outline-primary"><i class="material-icons mr-1">add</i>Capturar
                    <b>gestión</b></a>
            </div>
            <div class="card-body p-0">
                <!-- Tabla de gestiones -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">ID</th>
                                <th scope="col" class="border-0">Inicio</th>
                                <th scope="col" class="border-0">Termino</th>
                                <th scope="col" class="border-0">Autoridad</th>
                                <th scope="col" class="border-0">Ámbito</th>
                                <th scope="col" class="border-0">Estado</th>
                                <th scope="col" class="border-0">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CDHEZ-123</td>
                                <td>18/09/18</td>
                                <td>19/09/18</td>
                                <td>Presidencia</td>
                                <td>Lorem ipsum dolor sit amet...</td>
                                <td><button class="btn btn-success btn-pill btn-sm"><i class="material-icons mr-1">arrow_upward</i>Activado</button></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-pill btn-sm"><i class="material-icons mr-1">visibility</i>Ver</button>
                                    <button type="button" class="btn btn-warning btn-pill btn-sm"><i class="material-icons mr-1">edit</i>Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CDHEZ-234</td>
                                <td>18/09/18</td>
                                <td>19/09/18</td>
                                <td>Presidencia</td>
                                <td>Lorem ipsum dolor sit amet...</td>
                                <td><button class="btn btn-secondary btn-pill btn-sm"><i class="material-icons mr-1">arrow_downward</i>Desactivado</button></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-pill btn-sm"><i class="material-icons mr-1">visibility</i>Ver</button>
                                    <button type="button" class="btn btn-warning btn-pill btn-sm"><i class="material-icons mr-1">edit</i>Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CDHEZ-345</td>
                                <td>18/09/18</td>
                                <td>19/09/18</td>
                                <td>Presidencia</td>
                                <td>Lorem ipsum dolor sit amet...</td>
                                <td><button class="btn btn-success btn-pill btn-sm"><i class="material-icons mr-1">arrow_upward</i>Activado</button></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-pill btn-sm"><i class="material-icons mr-1">visibility</i>Ver</button>
                                    <button type="button" class="btn btn-warning btn-pill btn-sm"><i class="material-icons mr-1">edit</i>Editar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php';
