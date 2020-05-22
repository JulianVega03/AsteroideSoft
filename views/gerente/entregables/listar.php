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
                    <div class="card-header">
                        <h4 class="card-title">Proyecto X</h4>
                        <div class="card-header-icons">
                            <button class="edit" data-toggle="modal" data-target="#modalEditarEntregable"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#modalEliminarEntregable"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-flex">
                            <div class="card__grilla">
                                <div class="card__grilla-elemento plus"><button class="add" data-toggle="modal" data-target="#modalAñadirEntregable"><i class="fas fa-plus"></i></button></div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E1</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E2</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E3</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E4</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal New-->
    <?php require_once 'views/gerente/entregables/nuevo.php'; ?>

    <!-- Modal Edit-->
    <?php include_once 'views/gerente/entregables/editar.php'; ?>

    <!-- Modal Delete -->
    <?php include_once 'views/gerente/entregables/eliminar.php'; ?>

    <?php require_once 'views/gerente/templates/footer.php'; ?>

    <script>
        $('.edit').prop("disabled", true);
        $('.delete').prop("disabled", true);

        function select() {
            if(!this.classList.contains('plus')) {
                this.classList.toggle('card__grilla-elemento-select');
                actualizar();
            }             
        }

        function actualizar() {
            var seleccionados = $('.card__grilla-elemento-select');
            if (seleccionados.length == 0) {
                $('.edit').prop("disabled", true);
                $('.delete').prop("disabled", true);
                $('.add').prop("disabled", false);
            } else if (seleccionados.length == 1) {
                $('.add').prop("disabled", true);
                $('.edit').prop("disabled", false);
                $('.delete').prop("disabled", false);
            } else {
                $('.add').prop("disabled", true);
                $('.edit').prop("disabled", true);
                $('.delete').prop("disabled", false);
            }
        }
            var elementos = document.querySelectorAll('.card__grilla-elemento');
            elementos.forEach(elemento => elemento.addEventListener('click', select));
    </script>
</div>

<?php require_once 'views/gerente/templates/scripts.php'; ?>