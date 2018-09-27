<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Usuarios</span>
        <h3 class="page-title">Listado de usuarios</h3>
    </div>
</div>

<!-- Contenido de página -->
<div class="row">
    <!-- Panel de la tabla -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <a href="capturar-usuario.php" class="btn btn-pill btn-outline-primary"><i class="material-icons mr-1">add</i>Capturar <b>usuario</b></a>
            </div>
            <div class="card-body p-0">
                <!-- Tabla de usuarios -->
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">ID</th>
                                <th scope="col" class="border-0">Usuario</th>
                                <th scope="col" class="border-0">Nombre</th>
                                <th scope="col" class="border-0">Cargo</th>
                                <th scope="col" class="border-0">Competencia</th>
                                <th scope="col" class="border-0">Región</th>
                                <th scope="col" class="border-0">Estado</th>
                                <th scope="col" class="border-0">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>amartinez</td>
                                <td>Alejandro Martínez</td>
                                <td>Administrador</td>
                                <td>Estatal</td>
                                <td>Zacatecas</td>
                                <td><button class="btn btn-success btn-pill btn-sm"><i class="material-icons mr-1">arrow_upward</i>Activado</button></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-pill btn-sm"><i class="material-icons mr-1">visibility</i>Ver</button>
                                    <button type="button" class="btn btn-warning btn-pill btn-sm"><i class="material-icons mr-1">edit</i>Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>hperez</td>
                                <td>Hector Pérez</td>
                                <td>Coordinador de área</td>
                                <td>Municipal</td>
                                <td>Concepción del oro</td>
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
</div>

<?php include_once 'templates/footer.php';
