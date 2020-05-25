<div class="modal fade" id="modalEliminarContrato-<?=$contrato->getCodigo()?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Contrato</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= URL ?>contratos/eliminar/<?=$contrato->getCodigo()?>" method="get" class="form-eliminar">
                <div class="modal-body text-center">
                    <p class="text-eliminar">¿Estas Seguro de Eliminar el Contrato "<?=$contrato->getCodigo()?>"?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>

