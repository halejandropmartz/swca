<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Usuarios</span>
        <h3 class="page-title">Captura de usuario</h3>
    </div>
</div>

<!-- Contenido de la página -->
<div class="row">
    <!-- Panel del formulario -->
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Datos del usuario</h6>
            </div>
            <div class="card-body d-flex flex-column">
                <form>
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Usuario -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="calle">Usuario</label>
                                <input type="text" class="form-control" id="calle" placeholder="Ej. hperez96">
                            </div>
                            <!-- Nombre -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="numeroCasa">Nombre(s)</label>
                                <input type="text" class="form-control" id="numeroCasa" placeholder="Ej. Héctor Alejandro">
                            </div>
                            <!-- Apellido paterno -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="colonia">Apellido paterno</label>
                                <input type="text" class="form-control" id="colonia" placeholder="Ej. Pérez">
                            </div>
                            <!-- Apellido materno -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="codigoPostal">Apellido materno</label>
                                <input type="text" class="form-control" id="codigoPostal" placeholder="Ej. Martínez">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Competencia -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="municipio">Competencia</label>
                                <select id="municipio" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="federal">Federal</option>
                                    <option value="estatal">Estatal</option>
                                    <option value="municipal">Municipal</option>
                                </select>
                            </div>
                            <!-- Cargo -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="coordinador">Cargo</label>
                                <input type="text" class="form-control" id="coordinador" placeholder="Ej. Coordinador">
                            </div>
                            <!-- Región -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="region">Región</label>
                                <input type="text" class="form-control" id="region" placeholder="Ej. Guadalupe">
                            </div>
                            <!-- Municipio -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="municipio">Rol</label>
                                <select id="municipio" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Coordinador de área">Coordinador de área</option>
                                    <option value="Capturista de datos">Capturista de datos</option>
                                    <option value="Analista de estadística">Analista de estadística</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-white btn-sm mb-4" type="button" data-toggle="collapse" data-target="#collapseHelp"
                        aria-expanded="false" aria-controls="collapseHelp">
                        Acerca de los roles
                    </button>
                    <div class="help-block collapse mb-4" id="collapseHelp">
                        <strong class="text-muted d-block mb-4">Permisos según el rol</strong>
                        <p>Administrador</p>
                        <ul>
                            <li>Acceso a todos los módulos y funciones del sistema</li>
                        </ul>
                        <p>Coordinador de área</p>
                        <small>Según el área que desempeñe</small>
                        <ul>
                            <li>Capturar datos</li>
                            <li>Modificar datos</li>
                            <li>Consultar datos</li>
                        </ul>
                        <p>Capturista de datos</p>
                        <ul>
                            <li>Capturar datos</li>
                        </ul>
                        <p>Analista de estadísticas</p>
                        <ul>
                            <li>Consultar datos</li>
                            <li>Descargar los datos</li>
                        </ul>
                    </div>
                    <div class="form-row">
                        <!-- Contraseña -->
                        <div class="form-group col-md-6">
                            <label for="calle">Contraseña</label>
                            <input type="password" class="form-control" id="calle">
                        </div>
                        <!-- Confirmación de contraseña -->
                        <div class="form-group col-md-6">
                            <label for="numeroCasa">Verificación de contraseña</label>
                            <input type="password" class="form-control" id="numeroCasa">
                        </div>
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-pill btn-outline-accent"><i class="material-icons mr-1">save</i>Guardar
                            <b>usuario</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Panel de acciones -->
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Acciones</h6>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <span class="d-flex">
                            <i class="material-icons mr-1">flag</i>
                            <p class="mr-1 my-0">Estado:</p>
                            <strong class="text-success">Activado</strong>
                        </span>
                    </li>
                    <!-- <li class="list-group-item p-3 d-flex justify-content-between">
                        <div>
                            <button type="button" class="btn btn-pill btn-outline-accent"><i class="material-icons mr-1">edit</i>Editar</button>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php';
