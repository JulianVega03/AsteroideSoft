<div class="modal fade" id="agregarEmpleados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Empleados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <div>
                                    <label for="buscar">Buscar Empleado</label>
                                    <input type="double" class="form-control" id="buscarModal">
                                </div>
                            </div>
                            <div class="table-responsive">

                                <table class="table text-center tablaModal">
                                    <thead class=" text-primary">
                                        <th>

                                        </th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Documento</th>
                                        <th>Correo</th>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td> 1151563</td>
                                            <td>Eduard</td>
                                            <td>Cantillo</td>
                                            <td>15985645</td>
                                            <td>eduard@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>1151561</td>
                                            <td>Fabián</td>
                                            <td>Gonzales</td>
                                            <td>14685041</td>
                                            <td>fabian@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelector("#buscarModal").onkeyup = function() {
            $TableFilter(".tablaModal", this.value);
        }

        $TableFilter = function(id, value) {
            var rows = document.querySelectorAll(id + ' tbody tr');

            for (var i = 0; i < rows.length; i++) {
                var showRow = false;

                var row = rows[i];
                row.style.display = 'none';

                for (var x = 0; x < row.childElementCount; x++) {
                    if (row.children[x].textContent.toLowerCase().indexOf(value.toLowerCase().trim()) > -1) {
                        showRow = true;
                        break;
                    }
                }

                if (showRow) {
                    row.style.display = null;
                }
            }
        }
    </script>
</div>