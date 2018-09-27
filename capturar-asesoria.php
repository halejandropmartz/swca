<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Asesorías</span>
        <h3 class="page-title">Captura de asesoría</h3>
    </div>
</div>

<!-- Contenido de página -->
<div class="row">
    <!-- Panel del formulario -->
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Datos de la asesoría</h6>
            </div>
            <div class="card-body d-flex flex-column">
                <form>
                    <div class="form-row px-0 my-2">
                        <!-- Folio de asesoría -->
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-secondary" id="folio">Folio</span>
                                </div>
                                <input readonly type="text" class="form-control" value="CDHEZ-G345345" aria-label="folio"
                                    aria-describedby="folio">
                            </div>
                        </div>
                    </div>
                    <!-- Datos del asesorado -->
                    <strong class="text-muted d-block text-uppercase my-4">Datos del asesorado</strong>
                    <div class="form-row px-0">
                        <!-- Apellido paterno -->
                        <div class="form-group col-md-3">
                            <label for="apellidoPaterno">Apellido paterno</label>
                            <input type="text" class="form-control" id="apellidoPaterno" placeholder="Ej: Raudales">
                        </div>
                        <!-- Apellido materno -->
                        <div class="form-group col-md-3">
                            <label for="apellidoMaterno">Apellido materno</label>
                            <input type="text" class="form-control" id="apellidoMaterno" placeholder="Ej. Rosales">
                        </div>
                        <!-- Nombre -->
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre(s)</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ej. Gloria">
                        </div>
                    </div>
                    <!-- Domicilio -->
                    <strong class="text-muted d-block text-uppercase my-4">Domicilio</strong>
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Calle -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="calle">Calle</label>
                                <input type="text" class="form-control" id="calle" placeholder="Ej. Av. Jesús Reyes Heroles">
                            </div>
                            <!-- Número -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="numeroCasa">Número</label>
                                <input type="text" class="form-control" id="numeroCasa" placeholder="Ej. 204 Interior 2">
                            </div>
                            <!-- Colonia -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="colonia">Colonia</label>
                                <input type="text" class="form-control" id="colonia" placeholder="Ej. Javier Barros Sierra">
                            </div>
                            <!-- Código postal -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="codigoPostal">Código postal</label>
                                <input type="text" class="form-control" id="codigoPostal" placeholder="Ej. 98090">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- País -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="pais">País</label>
                                <input type="text" readonly class="form-control" id="pais" placeholder="Ej. México"
                                    value="México">
                            </div>
                            <!-- Estado -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="estado">Estado</label>
                                <input type="text" readonly class="form-control" id="estado" placeholder="Ej. Zacatecas"
                                    value="Zacatecas">
                            </div>
                            <!-- Municipio -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="municipio">Municipio</label>
                                <select id="municipio" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="Juan Aldama">Juan Aldama</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>
                            <!-- Localidad -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="localidad">Localidad</label>
                                <select id="localidad" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="Centro">Centro</option>
                                    <option value="La Muralla">La Muralla</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Datos complementarios -->
                    <strong class="text-muted d-block text-uppercase my-4">Datos complementarios</strong>
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Edad -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="edad">Edad</label>
                                <input type="text" class="form-control" id="edad" placeholder="Ej. 53">
                            </div>
                            <!-- Escolaridad -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="escolaridad">Escolaridad</label>
                                <select id="escolaridad" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="bachillerato">Bachillerato</option>
                                    <option value="carreraTecnica">Carrera técnica</option>
                                </select>
                            </div>
                            <!-- Ocupación -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="ocupacion">Ocupación</label>
                                <select id="ocupacion" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="desempleado">Desempleado(a)</option>
                                    <option value="autoempleo">Autoempleo</option>
                                </select>
                            </div>
                            <!-- Estado civil -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="estadoCivil">Estado civil</label>
                                <select id="estadoCivil" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="divorciado">Divorciado(a)</option>
                                    <option value="casado">Casado(a)</option>
                                </select>
                            </div>
                            <!-- Nacionalidad -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="nacionalidad">Nacionalidad</label>
                                <select id="nacionalidad" class="form-control">
                                    <!-- <option value="" disabled selected>Seleccione...</option> -->
                                    <option value="mexicana">Mexicana</option>
                                    <option value="extranjera">Extranjera</option>
                                </select>
                            </div>
                            <!-- Grupo social -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="grupoSocial">Grupo social</label>
                                <select id="grupoSocial" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="periodismo">Periodismo</option>
                                    <option value="obrero">Obrero</option>
                                </select>
                            </div>
                            <!-- Grupo de atención -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="grupoAtencion">Grupo de atención</label>
                                <select id="grupoAtencion" class="form-control">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="sistemaPenitenciario">Sistema penitenciario</option>
                                    <option value="sectorEducativo">Sector educativo</option>
                                </select>
                            </div>
                            <!-- Lugar de origen -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="lugarOrigen">Lugar de origen</label>
                                <input type="text" class="form-control" id="lugarOrigen" placeholder="Ej. Fresnillo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Sexo -->
                            <div class="form-group col-lg-12 px-0">
                                <label class="d-block">Sexo</label>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-white active">
                                        <input type="radio" name="options" id="femenino" autocomplete="off" checked>
                                        Femenino
                                    </label>
                                    <label class="btn btn-white">
                                        <input type="radio" name="options" id="masculino" autocomplete="off"> Masculino
                                    </label>
                                </div>
                            </div>
                            <!-- Discapacidad -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="discapacidad">Discapacidad</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="radio" name="discapacidad" value="no">&nbsp;No
                                            &nbsp;<input type="radio" name="discapacidad" value="no">&nbsp;Sí
                                        </div>
                                    </div>
                                    <select id="discapacidad" class="form-control">
                                        <option value="" disabled selected>Seleccione...</option>
                                        <option value="motriz">Motriz</option>
                                        <option value="auditiva">Auditiva</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Grupo étnico -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="grupoEtnico">Grupo étnico</label>
                                <input type="text" class="form-control" id="grupoEtnico" placeholder="Ej. Zapoteco">
                            </div>
                            <!-- Identificación -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="identificacion">Identificación</label>
                                <input type="text" class="form-control" id="identificacion" placeholder="Ej. INE">
                            </div>
                            <!-- Folio ID -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="folioId">Folio ID</label>
                                <input type="text" class="form-control" id="folioId" placeholder="Ej. 23456799">
                            </div>
                            <!-- Correo eléctronico -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="Ej. gloria.raudales@hotmail.com">
                            </div>
                            <!-- Teléfono 1 -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="telefono1">Teléfono 1</label>
                                <input type="text" class="form-control" id="telefono1" placeholder="Ej. 4921231234">
                            </div>
                            <!-- Teléfono 2 -->
                            <div class="form-group col-lg-12 px-0">
                                <label for="telefono2">Teléfono 2</label>
                                <input type="text" class="form-control" id="telefono2" placeholder="Ej. 4921231234">
                            </div>
                        </div>
                    </div>
                    <!-- Datos de la asesoría -->
                    <strong class="text-muted d-block text-uppercase my-4">Datos de la asesoría</strong>
                    <div class="form-row">
                        <!-- Recepción -->
                        <div class="form-group col-md-3">
                            <label for="recepcion">Recepción</label>
                            <select id="recepcion" class="form-control">
                                <option value="" disabled selected>Seleccione...</option>
                                <option value="directa">Directa o personal</option>
                                <option value="telefonica">Telefónica</option>
                            </select>
                        </div>
                        <!-- Materia -->
                        <div class="form-group col-md-3">
                            <label for="materia">Materia</label>
                            <select id="materia" class="form-control">
                                <option value="" disabled selected>Seleccione...</option>
                                <option value="familiar">Familiar</option>
                                <option value="administrativa">Administrativa</option>
                            </select>
                        </div>
                        <!-- Asunto -->
                        <div class="form-group col-md-6">
                            <label for="asunto">Asunto</label>
                            <select id="asunto" class="form-control">
                                <option value="" disabled selected>Seleccione...</option>
                                <option value="divorcioVoluntario">Divorcio voluntario</option>
                                <option value="embargos">Embargos</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Ámbito -->
                        <div class="form-group col-md-6">
                            <label for="ambito">Ámbito</label>
                            <select id="ambito" class="form-control">
                                <option value="" disabled selected>Seleccione...</option>
                                <option value="estatal">Estatal</option>
                                <option value="federal">Federal</option>
                                <option value="municipal">Municipal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Autoridad señalada -->
                        <div class="form-group col-md-6">
                            <label for="autoridadSenalada">Autoridad señalada</label>
                            <textarea class="form-control" name="autoridadSenalada" rows="5" placeholder="Ej. Juez familiar"></textarea>
                        </div>
                        <!-- Superior jerárquico de la autoridad -->
                        <div class="form-group col-md-6">
                            <label for="superiorJerarquico">Superior jerárquico de la autoridad
                                señalada</label>
                            <textarea class="form-control" name="superiorJerarquico" rows="5" placeholder="Ej. Tribunal"></textarea>
                        </div>
                    </div>
                    <!-- Narrativa de los hechos -->
                    <strong class="text-muted text-uppercase d-block my-4">Narrativa de los hechos</strong>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="narrativa" rows="5" placeholder="Escriba los hechos"></textarea>
                        </div>
                    </div>
                    <!-- Asesoría -->
                    <strong class="text-muted text-uppercase d-block my-4">Asesoría</strong>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="asesoria" rows="5" placeholder="Escriba la asesoría"></textarea>
                        </div>
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-pill btn-outline-accent"><i class="material-icons mr-1">save</i>Guardar
                            <b>asesoría</b></button>
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
                        <span class="d-flex mb-2">
                            <i class="material-icons mr-1">flag</i>
                            <p class="mr-1 my-0">Estado:</p>
                            <strong class="text-success">Activado</strong>
                            <!-- <a class="ml-auto" href="#">Editar</a> -->
                        </span>
                        <span class="d-flex mb-2">
                            <i class="material-icons mr-1">directions</i>
                            <p class="mr-1 my-0">Canalizaciones:</p>
                            <strong class="text-primary">2</strong>
                        </span>
                        <span class="d-flex">
                            <i class="material-icons mr-1">assignment</i>
                            <p class="mr-1 my-0">Gestiones:</p>
                            <strong class="text-primary">3</strong>
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

<!-- Panel de canalizaciones -->
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Canalizaciones en esta asesoría</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
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
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-pill btn-outline-primary">
                    <i class="material-icons mr-1">add</i>Agregar</button>
            </div>
        </div>
    </div>
</div>
<!-- Panel de gestiones -->
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Gestiones en esta asesoría</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0">
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
            <div class="card-footer">
                <button type="button" class="btn btn-pill btn-outline-primary">
                    <i class="material-icons mr-1">add</i>Agregar</button>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php';
