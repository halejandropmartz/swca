<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Gestiones</span>
        <h3 class="page-title">Captura de gestión</h3>
    </div>
</div>

<!-- Contenido de página -->
<div class="row">
    <!-- Panel del formulario -->
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Datos de la gestión</h6>
            </div>
            <div class="card-body d-flex flex-column">
                <form>
                    <div class="form-row px-0 my-2 d-flex justify-content-between">
                        <!-- Folio de gestión -->
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-secondary" id="folio">Gestión</span>
                                </div>
                                <input readonly type="text" class="form-control" value="CDHEZ-G345345" aria-label="folio"
                                    aria-describedby="folio">
                            </div>
                        </div>
                        <!-- Folio de asesoría -->
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-secondary" id="folio">Asesoría</span>
                                </div>
                                <input readonly type="text" class="form-control" value="CDHEZ-G345345" aria-label="folio"
                                    aria-describedby="folio">
                            </div>
                        </div>
                    </div>
                    <div class="form-row px-0">
                        <!-- Fecha de inicio -->
                        <div class="form-group col-md-6">
                            <label for="inicio">Fecha de inicio</label>
                            <input type="text" class="form-control" id="inicio">
                        </div>
                        <!-- Fecha de termino -->
                        <div class="form-group col-md-6">
                            <label for="termino">Fecha de termino</label>
                            <input type="text" class="form-control" id="termino">
                        </div>
                    </div>
                    <div class="form-row px-0">
                        <!-- Autoridad -->
                        <div class="form-group col-md-6">
                            <label for="autoridad">Autoridad</label>
                            <input type="text" class="form-control" id="autoridad">
                        </div>
                        <!-- Ámbito -->
                        <div class="form-group col-md-6">
                            <label for="ambito">Ámbito</label>
                            <input type="text" class="form-control" id="ambito">
                        </div>
                    </div>
                    <div class="form-row px-0">
                        <!-- Gestión -->
                        <div class="form-group col-md-12">
                            <label for="gestion">Gestión</label>
                            <textarea class="form-control" name="gestion" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-pill btn-outline-primary"><i class="material-icons mr-1">save</i>Guardar
                            <b>gestión</b></button>
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
                    <li class="list-group-item p-3">
                        <button type="button" class="btn btn-pill btn-outline-primary my-2 mr-2"><i class="material-icons mr-1">save_alt</i>Descargar
                            en <b>PDF</b></button>
                        <button type="button" class="btn btn-pill btn-outline-primary my-2 mr-2"><i class="material-icons mr-1">save_alt</i>Descargar
                            en <b>Excel</b></button>
                        <button type="button" class="btn btn-pill btn-outline-primary my-2 mr-2"><i class="material-icons mr-1">print</i>Imprimir</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php include_once 'templates/footer.php';
