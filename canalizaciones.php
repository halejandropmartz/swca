<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Canalizaciones</span>
        <h3 class="page-title">Listado de canalizaciones</h3>
    </div>
</div>

<!-- Contenido de página -->
<div class="row">
    <!-- Panel de la tabla -->
    <div class="col-12">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <a href="capturar-canalizacion.php" class="btn btn-pill btn-outline-primary"><i class="material-icons mr-1">add</i>Capturar
                    <b>canalización</b></a>
            </div>
            <div class="card-body p-0">
                <!-- Tabla de canalizaciones -->
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">ID</th>
                            <th scope="col" class="border-0">Fecha</th>
                            <th scope="col" class="border-0">Dirigido</th>
                            <th scope="col" class="border-0">Cargo</th>
                            <th scope="col" class="border-0">Canalización</th>
                            <th scope="col" class="border-0">Estado</th>
                            <th scope="col" class="border-0">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CDHEZ-123</td>
                            <td>18/09/18</td>
                            <td>Lorem impsum</td>
                            <td>Lorem impsum</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                            <td><button class="btn btn-success btn-pill btn-sm"><i class="material-icons mr-1">arrow_upward</i>Activado</button></td>
                            <td>
                                <button type="button" class="btn btn-info btn-pill btn-sm"><i class="material-icons mr-1">visibility</i>Ver</button>
                                <button type="button" class="btn btn-warning btn-pill btn-sm"><i class="material-icons mr-1">edit</i>Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>CDHEZ-123</td>
                            <td>18/09/18</td>
                            <td>Lorem impsum</td>
                            <td>Lorem impsum</td>
                            <td>Lorem ipsum dolor sit amet...</td>
                            <td><button class="btn btn-secondary btn-pill btn-sm"><i class="material-icons mr-1">arrow_downward</i>Desactivado</button></td>
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

<?php include_once 'templates/footer.php';
