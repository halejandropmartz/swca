<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Asesorías</span>
        <h3 class="page-title">Listado de asesorías</h3>
    </div>
</div>

<!-- Contenido de página -->
<div class="row">
    <!-- Panel de la tabla -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <a href="capturar-asesoria.php" class="btn btn-pill btn-outline-primary"><i class="material-icons">add</i>Capturar
                    <b>asesoría</b></a>
            </div>
            <div class="card-body p-0">
                <!-- Tabla de asesorías -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">Folio</th>
                                <th scope="col" class="border-0">Apellidos</th>
                                <th scope="col" class="border-0">Nombre</th>
                                <th scope="col" class="border-0">Municipio</th>
                                <th scope="col" class="border-0">Teléfono</th>
                                <th scope="col" class="border-0">Estado</th>
                                <th scope="col" class="border-0">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CDHEZ-123</td>
                                <td>Ali</td>
                                <td>Kerry</td>
                                <td>Guadalupe</td>
                                <td>107-0339</td>
                                <td><button class="btn btn-success btn-pill btn-sm"><i class="material-icons">arrow_upward</i>Activado</button></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-pill btn-sm"><i class="material-icons mr-1">visibility</i>Ver</button>
                                    <button type="button" class="btn btn-warning btn-pill btn-sm"><i class="material-icons mr-1">edit</i>Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CDHEZ-234</td>
                                <td>Clark</td>
                                <td>Angela</td>
                                <td>Fresnillo</td>
                                <td>1-660-850-1647</td>
                                <td><button class="btn btn-secondary btn-pill btn-sm"><i class="material-icons">arrow_downward</i>Desactivado</button></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-pill btn-sm"><i class="material-icons mr-1">visibility</i>Ver</button>
                                    <button type="button" class="btn btn-warning btn-pill btn-sm"><i class="material-icons mr-1">edit</i>Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CDHEZ-345</td>
                                <td>Jerry</td>
                                <td>Nathan</td>
                                <td>Jalpa</td>
                                <td>214-4225</td>
                                <td><button class="btn btn-success btn-pill btn-sm"><i class="material-icons">arrow_upward</i>Activado</button></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-pill btn-sm"><i class="material-icons mr-1">visibility</i>Ver</button>
                                    <button type="button" class="btn btn-warning btn-pill btn-sm"><i class="material-icons mr-1">edit</i>Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CDHEZ-456</td>
                                <td>Colt</td>
                                <td>Angela</td>
                                <td>Jeréz</td>
                                <td>1-848-473-7416</td>
                                <td><button class="btn btn-success btn-pill btn-sm"><i class="material-icons">arrow_upward</i>Activado</button></td>
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

<?php include_once 'templates/footer.php'; ?>