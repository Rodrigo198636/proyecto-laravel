@extends('layouts.plantilla')

@extends('title', 'pizzas tupizza')

@section('content')
    <h1>En esta pagina podras crear tu pizza con tus ingredientes favoritos</h1>
    <form action="{{route('pizzas.store')}}" method="POST">
        
        @csrf    

        <label>
            Nombre:
        <br>
            <input type="text" nombre="nombre" value="{{old()'nombre'}}">
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
          <textarea name="Descripcion" rows="5" >{{old()'Descripcion'}}</textarea>
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
            <input type="text" categoria="Categoria" value="{{old()'Categoria'}}>
        </label>
        <br>

        @error('categoria')
        <br>
        <span>*{{$message}}</span>
        <br>
        @enderror
        

        <button type="submit">Enviar Formulario</button>
    </form>
@endsection