
    <link rel="stylesheet" href="<?= URL ?>public/css/stylecontrato.css" />
    <script src="https://kit.fontawesome.com/e43617e4d2.js" crossorigin="anonymous"></script>
 
        <?php
        require_once 'views/gerente/includes/header.php';
        ?>
    <div class="opciones">

        <div class="titulo">
            <span class="fa fa-address-book"></span>
            <h1>CONTRATO</h1>
        </div>
        <div class="formulario">
            <form action="" method="">
                <input type="text" id="" placeholder="Ingrese nombre del contrato">
                <input type="search" id="site-search">
                <select>
                    <option>Tipo de contrato 1 </option>
                    <option>Tipo de contrato 2</option>
                    <option>Tipo de contrato 3</option>
                </select>
            </form>
        </div>
    </div>

    <section class="contenedor">
        <article class="contenedor-margen">
            <div class="primero">
                <h2>Descripcion Del Contrato</h2>
                <textarea id="w3mission"></textarea>

            </div>
            <aside class="segundo">

                <div class="fecha-principal">
                    <div class="fecha-inicio">
                        <input type="date" id="dateinicio">
                    </div>
                    <div class="fecha-final">
                        <input type="date" id="datefinal">
                    </div>

                </div>
                <div class="coste">
                    <button>Finalizar</button>
                    <input type="text" id="" placeholder="Costo monetario del contrato $">

                </div>

            </aside>
        </article>
    </section>



</body>

</html>