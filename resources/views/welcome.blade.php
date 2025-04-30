@extends('layout.index')
@section('content')


<div class="container my-4">
    <h1 class="display-4">Notas</h1>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('notas.crear') }}" method="post">
                        <input type="text" placeholder="Nombre" class="form-control mb-2" name="nombre"">
        <input type=" text" placeholder="Descripcion" class="form-control mb-2" name="descripcion"">
                    </form>
                </div>
                <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button class=" btn btn-primary btn-block" type="submit">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <table class=" table">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $nota)
            <tr>
                <th scope="row">{{$nota->id}}</th>
                <td><a href="{{ route('nota.detalle', $nota) }}">{{$nota->nombre}}</a></td>
                <!-- url('/'.$nota->id.'') -->
                <td>{{$nota->descripcion}}</td>
                <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Agregar </button></td>
            </tr>
            @endforeach()
        </tbody>
    </table>
</div>
@endsection