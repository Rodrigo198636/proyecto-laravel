@extends('layouts.plantilla')

@extends('title', 'pizzas edit')

@section('content')
    <h1>En esta pagina podras editar tu pizza con tus ingredientes favoritos</h1>
    <form action="{{route('pizzas.update', $pizza)}}" method="post">
        
        @csrf    

        @method('put')

        <label>
            Nombre:
        <br>
            <input type="text" nombre="nombre"' value="{{ old('nombre', $pizza->nombre) }}">
        </label>
        <br>
        @error('nombre')
        <br>
        <span>*{{$message}}</span>
        <br>
        @enderror
        
        <label>
            Descripcion:
        <br>
          <textarea name="Descripcion" rows="5">{{ old('Descrpcion', $pizza->Descrpcion) }}</textarea>
        </label>
        <br>
        @error('Descrpcion')
        <br>
        <span>*{{$message}}</span>
        <br>
        @enderror
        
        <label>
            Categoria:
          <br>  
            <input type="text" categoria="Categoria" value="{{ old('Categoria', $pizza->categoria) }}">
        </label>
        <br>
        @error('categoria')
        <br>
        <span>*{{$message}}</span>
        <br>
        @enderror
        
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection