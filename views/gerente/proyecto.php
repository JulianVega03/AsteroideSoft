
<?php
        require_once 'views/gerente/includes/header.php';
        ?>
    <div class="contenedor">
        <div class="principal">
            <div>
                <h2 name="nombreProyecto" class="nombreProyecto">Nombre del proyecto</h2>
            </div>
            <div class="sec">
                <h3>Agregar entregable</h3>
                <div class="contentEntregables">
                    <div class="divisorSecundario e1">
                        <div class="inputs">
                            <input type="text" name="nomEntregable1" placeholder="Nombre">
                            <input type="number" name="costoEntregable1" placeholder="Costo">
                        </div>
                        <textarea name="descEntregable1" cols="30" rows="10"
                            placeholder="Descripcion del entregable"></textarea>
                    </div>
                </div>
                <button class="agregarE">Agregar</button>
                <button class="eliminarE btn_danger">Eliminar</button>
            </div>
        </div>
        <div class="secundario">
            <div class="info">
                <h3 style="text-align: center;">Informacion del proyecto</h3>
                <input class="iInfo" type="text" placeholder="Nombre">
                <input class="iInfo" type="number" placeholder="Presupuesto">
                <input class="iInfo" type="date">
                <input class="iInfo" type="number" placeholder="Duración">
            </div>
            <div class="participantes">
                <button> <a class="enlace" href="#modal1">Agregar participantes</a></button>
            </div>
        </div>

    </div>


    <div id="modal1" class="modalmask">
        <div class="modalbox movedown">
            <a href="#close" title="Close" class="close">X</a>
            <table id="empleados" class="display compact" style="width:100%">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombres</th>
                        <th>Identificacion</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>jhonatan andres</td>
                        <td>beltran caceres</td>
                        <td>101010101</td>
                        <td>jhonatan@gmail.com</td>
                        
                    
                    <tr>
                        <td>julian david</td>
                        <td>godine</td>
                        <td>12534523</td>
                        <td>juliandvid@gmail.com</td>
                    </tr>
                    <tr>
                        <td>vanessa carolina</td>
                        <td>perez sarmineto</td>
                        <td>3673424573</td>
                        <td>vannesas@gmail.com</td>
                    </tr>
                    <tr>
                        <td>eduardo david</td>
                        <td>martinez lopez</td>
                        <td>32246523</td>
                        <td>eduardodadivd@gmail.com</td>
                    </tr>
                    <tr>
                        <td>carolina andrea</td>
                        <td>ramirez ramirez</td>
                        <td>35231345</td>
                        <td>carolinaandre@gmail.com</td>
                    </tr>
                    <tr>
                        <td>maria jose</td>
                        <td>rojas castro</td>
                        <td>45626245624</td>
                        <td>mariajosejose@gmail.com</td>
                    </tr>
                    <tr>
                        <td>jhonatan andres</td>
                        <td>beltran caceres</td>
                        <td>101010101</td>
                        <td>jhonatan@gmail.com</td>
                    </tr>
                    <tr>
                        <td>maria jose</td>
                        <td>rojas castro</td>
                        <td>45626245624</td>
                        <td>mariajosejose@gmail.com</td>
                    </tr>
                    <tr>
                        <td>maria jose</td>
                        <td>rojas castro</td>
                        <td>45626245624</td>
                        <td>mariajosejose@gmail.com</td>
                    </tr>
                    <tr>
                        <td>maria jose</td>
                        <td>rojas castro</td>
                        <td>45626245624</td>
                        <td>mariajosejose@gmail.com</td>
                    </tr>
                    <tr>
                        <td>maria jose</td>
                        <td>rojas castro</td>
                        <td>45626245624</td>
                        <td>mariajosejose@gmail.com</td>
                    </tr>
                    <tr>
                        <td>maria jose</td>
                        <td>rojas castro</td>
                        <td>45626245624</td>
                        <td>mariajosejose@gmail.com</td>
                    </tr>
                    <tr>
                        <td>maria jose</td>
                        <td>rojas castro</td>
                        <td>45626245624</td>
                        <td>mariajosejose@gmail.com</td>
                    </tr>
                </tbody>
               
            </table>
        </div>
    </div>

    <script src="<?=URL?>public/js/proyecto.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#empleados').DataTable();
        });
    </script>
</body>

</html>