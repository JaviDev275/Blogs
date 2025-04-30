@extends('layout.index')
@section('content')
<div class="row">
    <div class="ctol-md-12">
        <h1>Detalles</h1>
        <h2>Nombre {{ $nota -> nombre }}</h2>
        <p>Descripcion {{ $nota -> descripcion }}</p>
    </div>
    @endsection