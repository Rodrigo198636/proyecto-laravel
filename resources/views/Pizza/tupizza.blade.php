@extends('layouts.plantilla')

@extends('title', 'tupizza', $pizza->nombre)

@section('content')
    <h1>Aqui esta tu Pizza {{$pizza->nombre}} </h1>
    <a href="{{route('pizza.pizza')}}">Volver a Pizza</a>
    <br>
    <a href="{{route('pizzas.edit', $pizza)}}"> Editar Pizza</a>
    <p><strong>Categoria:</strong>{{$pizza->caegoria}}</p>
    <p>{{$pizza->Descripcion}}</p>

    <form action="{{ route('pizzas.destroy', $pizza)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Elminar</button>
    </form>
@endsection
