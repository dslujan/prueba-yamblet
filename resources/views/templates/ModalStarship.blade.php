<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Editar Datos Naves</h4>
            </div>
            <form action="" method="POST" role="form" id="form">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la nave">
                    </div>
                    <div class="form-group">
                        <label for="model">Modelo</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Modelo de la nave">
                    </div>
                    <div class="form-group">
                        <label for="manufacturer">fabricante</label>
                        <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Fabricante de la nave">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" >Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>