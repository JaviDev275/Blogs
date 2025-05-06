@extends('layout.index')
@section('content')


<div class="container my-4">
    <h1 class="display-4">Notas</h1>
    @if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </div>
    @endif

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('notas.crear') }}" method="post">
                    <div class="modal-body">
                        @csrf

                        <input type="text" placeholder="Nombre" class="form-control mb-2" name="nombre"
                            value={{ old("nombre") }}>
                        <input type=" text" placeholder="Descripcion" class="form-control mb-2" name="descripcion"
                            value={{ old("descripcion") }}>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button class=" btn btn-primary btn-block" type="submit">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar
    </button>
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
                <td>{{$nota->descripcion}}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route("notas.editar",$nota) }}" class="btn btn-warning btn-sm text-white">Editar</a>
                    <form action="{{ route('notas.eliminar',$nota) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm text-white">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach()
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$notas->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection