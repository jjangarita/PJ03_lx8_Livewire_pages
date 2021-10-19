    <!-- Modal -->
<div wire:ignore.selt class="modal fade" id="addStudentModal" tabindex="-1" aria-
    labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Estudiante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="firtname">Nombre</label>
                        <input type="text" name="firstname" class="form-control" wire:model="firstname" />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellido</label>
                        <input type="text" name="lastname" class="form-control" wire:model="lastname" />
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="text" name="email" class="form-control" wire:model="email" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" class="form-control" wire:model="phone" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" wire:click.prevent="store()">Agregar</button>
            </div>
        </div>
    </div>
</div>