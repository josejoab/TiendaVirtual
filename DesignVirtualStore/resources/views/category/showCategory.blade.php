@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="list-group">
                <li class="list-group-item active"> {{__('words.Diseño')}} </li>
                <li class="list-group-item"><b>Id: </b>{{ $data["design"]['id'] }}</li>
                <li class="list-group-item"><b>Nombre: </b>{{ $data["design"]['name'] }}</li>
                <li class="list-group-item"><b>Ancho: </b>{{ $data["design"]['width'] }}</li>
                <li class="list-group-item"><b>Largo: </b>{{ $data["design"]['length'] }}</li>
                <li class="list-group-item"><b>Categoria: </b>{{ $data["design"]['id_category'] }}</li>
                <li class="list-group-item"><b>Precio: </b>{{ $data["design"]['price'] }}</li>
                <li class="list-group-item"><b>Descripcion: </b>{{ $data["design"]['description'] }}</li>
                <li><img src="{{ asset('/img/designs/thumbs/'.$data["design"]['image'] ) }}" alt="" width="200"></li>
                <li>
                    <form method="POST" action="{{ route('design.destroy', $data["design"]) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger"}> {{__('words.Eliminar')}} </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection