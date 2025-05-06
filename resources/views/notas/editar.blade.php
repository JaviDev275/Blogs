@extends('layout.index')
@section('content')


<div class="row justify-content-center">
    <div class="col-md-6 container">
        <h1 class="text-center">Editar notas</h1>
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
        <form action="{{ route('notas.actualizar', $nota ) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <input type="text" placeholder="Nombre" class="form-control mb-3" name="nombre"
                    value="{{ $nota->nombre }}">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Descripcion" class="form-control mb-3" name="descripcion"
                    value="{{ $nota->descripcion }}">
            </div>
            <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
        </form>
    </div>
</div>
@endsection