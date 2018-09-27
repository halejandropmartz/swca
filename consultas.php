<?php include_once 'templates/header.php'; ?>

<!-- Encabezado de página -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Consultas</span>
        <h3 class="page-title">Consultas generales</h3>
    </div>
</div>

<!-- Contenido de la página -->
<div class="row">
    <!-- Panel del seleccionador -->
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Criterio de la consulta</h6>
            </div>
            <div class="card-body">
                <!-- Seleccionador -->
                <div class="input-group">
                    <select id="municipio" class="form-control">
                        <option value="etarioSexo" selected>Asesorías por grupo etario y sexo</option>
                        <option value="materiaSexo">Asesorías por materia y sexo</option>
                        <option value="mes">Asesorías por mes</option>
                        <option value="recepcion">Asesorías por tipo de recepción</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Consultas -->
<div class="row">
    <!-- Panel de la tabla -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Sexo femenino</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">Ene</th>
                                <th scope="col" class="border-0">Feb</th>
                                <th scope="col" class="border-0">Mar</th>
                                <th scope="col" class="border-0">Abr</th>
                                <th scope="col" class="border-0">May</th>
                                <th scope="col" class="border-0">Jun</th>
                                <th scope="col" class="border-0">Jul</th>
                                <th scope="col" class="border-0">Ago</th>
                                <th scope="col" class="border-0">Sep</th>
                                <th scope="col" class="border-0">Oct</th>
                                <th scope="col" class="border-0">Nov</th>
                                <th scope="col" class="border-0">Dic</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123</td>
                                <td>18</td>
                                <td>75</td>
                                <td>77</td>
                                <td>444</td>
                                <td>56</td>
                                <td>11</td>
                                <td>24</td>
                                <td>45</td>
                                <td>78</td>
                                <td>23</td>
                                <td>114</td>
                            </tr>
                            <tr>
                                <td>75</td>
                                <td>123</td>
                                <td>77</td>
                                <td>45</td>
                                <td>18</td>
                                <td>56</td>
                                <td>114</td>
                                <td>51</td>
                                <td>447</td>
                                <td>11</td>
                                <td>23</td>
                                <td>78</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Consultas -->
<div class="row">
    <!-- Panel de la tabla -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Sexo masculino</h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">Ene</th>
                                <th scope="col" class="border-0">Feb</th>
                                <th scope="col" class="border-0">Mar</th>
                                <th scope="col" class="border-0">Abr</th>
                                <th scope="col" class="border-0">May</th>
                                <th scope="col" class="border-0">Jun</th>
                                <th scope="col" class="border-0">Jul</th>
                                <th scope="col" class="border-0">Ago</th>
                                <th scope="col" class="border-0">Sep</th>
                                <th scope="col" class="border-0">Oct</th>
                                <th scope="col" class="border-0">Nov</th>
                                <th scope="col" class="border-0">Dic</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123</td>
                                <td>18</td>
                                <td>75</td>
                                <td>77</td>
                                <td>444</td>
                                <td>56</td>
                                <td>11</td>
                                <td>24</td>
                                <td>45</td>
                                <td>78</td>
                                <td>23</td>
                                <td>114</td>
                            </tr>
                            <tr>
                                <td>75</td>
                                <td>123</td>
                                <td>77</td>
                                <td>45</td>
                                <td>18</td>
                                <td>56</td>
                                <td>114</td>
                                <td>51</td>
                                <td>447</td>
                                <td>11</td>
                                <td>23</td>
                                <td>78</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php';
