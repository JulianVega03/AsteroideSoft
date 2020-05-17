<?php
require_once 'views/gerente/includes/header.php';
?>
<section class="formulario-contenedor">

    <div class="formulario-informacion">
        <div class="info_titulo">
            <span class="fa fa-user-circle"></span>
            <h2>
                INFORMACION<br />
                DE CONTACTO
            </h2>
        </div>

    </div>
    <div class="formulario-contacto">
        <h2>Registrar Persona</h2>
        
        <?php
            if(!empty($mensaje)){
                echo $mensaje;
            }
        ?>
        <br>

        <form action="<?=URL?>home/registrar" method="post">
            <select name="tipodepersona">
                <?php
                $i = 1;
                foreach ($listTiposPersonas as $tp) {
                ?>
                    <option value="<?= $i ?>"><?= $tp ?></option>
                <?php
                    $i++;
                }
                ?>
            </select>
            <label for="">Nombres</label>
            <input type="text" name="nombre" id="nombres_persona">
            <label for="">Apellidos</label>
            <input type="text" name="apellido" id="apellidos_persona">
            <label for="">Tipo de documento</label>
            <select name="tipo_identificacion">

                <?php
                require_once 'entities/TipoDocumento.php';
                foreach ($listTipoDocumentos as $td) {
                    $tipoDocu = new TipoDocumento();
                    $tipoDocu = $td;
                ?>
                    <option value="<?=$tipoDocu->getId()?>"><?=$tipoDocu->getNombre()?> - <?=$tipoDocu->getDescripcion()?></option>

                <?php
                }
                ?>
            </select>
            <label for="">Documento</label>
            <input type="text" id="documento_persona" name="documento">
            <label for="">Email</label>
            <input type="email" id="email_persona" name="email">
            <label for="">Telefono</label>
            <input type="text" id="telefono_persona" name="telf">
            <label for="">Direccion</label>
            <input type="text" id="direccion_persona" name="direccion">
            <button>REGISTRAR PERSONA</button>


        </form>
    </div>
</section>
<?php
require_once 'views/gerente/includes/footer.php';
?>