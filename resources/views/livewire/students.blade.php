<div>
    @include('livewire.create')
    @include('livewire.update')
    @include('livewire.delete')

   
    <section>
        <div class="container">
            <div class="row">
                .@if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card bg-secondary">
                    <div class="card-header bg-dark text-light">
                        <h3>
                            Todos los estudiantes
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addStudentModal">Agregar Nuevo</button>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table tabl-striped table-dark">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Correo electrónico</th>
                                    <th>Teléfono</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->firstname}}</td>
                                    <td>{{$student->lastname}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">Editar</button>

                                        {{-- eliminacion directa --}}
                                        {{-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#destroyStudentModal" wire:click.prevent="delete({{$student->id}})">Eliminar</button> --}}
                                        
                                        {{-- Eliminación con verificación --}}
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteStudentModal" wire:click.prevent="edit({{$student->id}})">Eliminar</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$students->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>