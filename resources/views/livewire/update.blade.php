    <!-- Modal -->
<div wire:ignore.selt class="modal fade" id="updateStudentModal" tabindex="-1" aria-
    labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar estudiante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="id" wire:model="ids" />
                    <div class="form-group">
                        <label for="firtname">Nombre</label>
                        <input type="text" name="firstname" class="form-control" wire:model="firstname" />
                        @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellido</label>
                        <input type="text" name="lastname" class="form-control" wire:model="lastname" />
                        @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="text" name="email" class="form-control" wire:model="email" />
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" class="form-control" wire:model="phone" />
                        @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-info" wire:click.prevent="update()">Actualizar</button>
            </div>
        </div>
    </div>
</div>