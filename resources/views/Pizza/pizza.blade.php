@extends("layouts.plantilla")

@section("title", "pizzas")

@section("content")
    <h1>Bienvenido a la pagina principal de pizzas</h1>
    <a href="Pizza/crea">Crear tu propia pizza</a>
        <ul>
            @foreach ($pizzas as $Pizza)
                <li>
                    <a href="{{route("pizza.tupizza", $pizza->id)}}">{{$pizza->nombre}}</a>
                    <br>
                   
                </li>    
            @endforeach
        </ul>

    {{$pizzas->links()}}
@endsection            