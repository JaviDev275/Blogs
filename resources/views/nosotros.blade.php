@extends('layout.index')
@section('content')
<div class="row">
    <div class="ctol-md-12">
        <h1>Este es mi equipo de trabajo</h1>
        @foreach($equipo as $miembro)
            <a href="{{route('nosotros', $miembro)}}" class='h4 text-danger'>{{$miembro}}</a><br>
        @endforeach
        @if(!empty($nombre))
            @switch($nombre)
                @case($nombre == 'Ignacio')
                    <h2 class='mt-5'>Hola {{$nombre}}, bienvenido a la sección de nosotros</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates porro quas nostrum. Ipsum soluta quia dolore assumenda voluptatem, esse aliquam sint consequuntur, hic totam voluptate quaerat dolor neque pariatur dignissimos?</p>
                    @break
                @case($nombre == 'Joaquin')
                    <h2 class='mt-5'>Hola {{$nombre}}, bienvenido a la sección de nosotros</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates porro quas nostrum. Ipsum soluta quia dolore assumenda voluptatem, esse aliquam sint consequuntur, hic totam voluptate quaerat dolor neque pariatur dignissimos?</p>
                    @break
                @case($nombre == 'Lucas')
                    <h2 class='mt-5'>Hola {{$nombre}}, bienvenido a la sección de nosotros</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates porro quas nostrum. Ipsum soluta quia dolore assumenda voluptatem, esse aliquam sint consequuntur, hic totam voluptate quaerat dolor neque pariatur dignissimos?</p>

                    @break
                @default
                    <h2 class='mt-5'>Hola {{$nombre}}, bienvenido a la sección de nosotros</h2>
            @endswitch
        @endif
</div>



@endsection