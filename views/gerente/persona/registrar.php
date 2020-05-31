<?php require_once 'views/gerente/templates/header.php'; ?>
<?php require_once 'views/gerente/templates/aside.php'; ?>
<div class="main-panel">
    <!-- Navbar -->
    <?php require_once 'views/gerente/templates/navbar.php'; ?>
    <!-- End Navbar -->
    <div class="content">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <br>
                    <div class="card-header container ">
                        <h4 class="card-title" style="margin: auto;"> Registro de Personal</h4>

                    </div>
                    <br>
                    <div class="card-body container">

                        <form id="form1" action="<?= URL ?>persona/nuevo" method="post" class="needs-validation" style="width: fit-content; margin:auto;font-size:18px">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tipo de documento</label>
                                        <select class="form-control" id="tipodocumento_persona" name="tipo_documento" requiered>
                                            <?php
                                            foreach ($tiposDocumentos as $tipo) {
                                            ?>
                                                <option value="<?= $tipo->getId() ?>"><?= $tipo->getNombre() ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">Complete el campo.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Documento</label>
                                    <input type="text" class="form-control" id="documento_persona" name="documento" style="height:38px" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="nombre_persona" name="nombre" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" id="apellido_persona" name="apellido" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label>Email</label>
                                    <input type="mail" class="form-control" id="email_persona" name="email" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Direccion</label>
                                    <input type="text" class="form-control" id="direccion_persona" name="direccion" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control" id="telefono_persona" name="telefono" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">¿Es empleado?</label>
                                    <div class="form-check ">
                                        <input class="" type="radio" onclick=mostrarCargo() name="empleado" id="inlineRadio1" value="si">
                                        <label class="form-check-label" for="inlineRadio1">Si!</label>
                                    </div>

                                    <div class="form-check ">
                                        <input class="" type="radio" onclick=ocultarCargo() name="empleado" id="inlineRadio2" value="no">
                                        <label class="form-check-label" for="inlineRadio2">No!</label>
                                    </div>

                                </div>

                            </div>
                            <div id="cargo" class="form-row">

                                <div class="col-md-7">
                                    <label for="exampleFormControlSelect1">Cargo del empleado</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="cargo">
                                        <?php
                                        foreach ($cargos as $cargo) {
                                        ?>
                                            <option value="<?= $cargo->getId() ?>"><?= $cargo->getNombre() ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label>Codigo Empleado:</label>
                                    <input type="text" class="form-control" id="codigo_empleado" name="codigoEmpleado" style="height: 38px;">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <di class="col-md-12" style="text-align: center;">
                                    <button class="btn btn-info" type="submit">Enviar Registro</button>
                                </di>
                            </div>

                        </form>
                        <button id="btn" class="btn btn-outline-primary" onclick=mostrarTabla() type="">Mostrar tabla </button>
                        <button id="btn" class="btn btn-outline-primary" onclick=ocultarTabla() type="">Ocultar tabla </button>

                        <div id="tablatabla" class="contenedor-tabla">

                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th scope="col"># Documento</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">correo</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($personas as $persona) {
                                        ?>

                                            <tr>
                                                <td><?= $persona->getDocumento() ?></th>
                                                <td><?= $persona->getNombre() ?></td>
                                                <td><?= $persona->getApellido() ?></td>
                                                <td><?= $persona->getCorreo() ?></td>
                                            </tr>


                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>


                        </div>


                    </div>
                </div>

                <!-- Modal New-->
                <?php require_once 'views/gerente/proyectos/nuevo.php'; ?>


            </div>

            <?php require_once 'views/gerente/templates/footer.php'; ?>


        </div>
        <?php require_once 'views/gerente/templates/scripts.php'; ?>





        <style>
            .contenedor-tabla {
                text-align: center;
                /* background-color: #A0D3E7; */
                height: auto;
                width: 100%;
            }

            #tablatabla {
                display: none;
            }

            .table-sm {
                border-style: solid;
                border-width: 1px;
            }

            #cargo {
                display: none;
            }
        </style>

        <script>
            function mostrarCargo() {
                document.getElementById('cargo').style.display = 'flex';
            }

            function ocultarCargo() {
                document.getElementById('cargo').style.display = 'none';
            }

            function mostrarTabla() {
                document.getElementById('tablatabla').style.display = 'flex';
            }

            function ocultarTabla() {
                document.getElementById('tablatabla').style.display = 'none';
            }
        </script>




        <script>
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>