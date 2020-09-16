@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="list-group">
                <li class="list-group-item active"> Diseño </li>
                <li class="list-group-item"><b>Id: </b>{{ $data["design"]->getId() }}</li>
                <li class="list-group-item"><b>Nombre: </b>{{ $data["design"]->getName() }}</li>
                <li class="list-group-item"><b>Ancho: </b>{{ $data["design"]->getWidth() }}</li>
                <li class="list-group-item"><b>Largo: </b>{{ $data["design"]->getLength() }}</li>
                <li class="list-group-item"><b>Categoria: </b>{{ $data["design"]->getcategoryId() }}</li>
                <li class="list-group-item"><b>Precio: </b>{{ $data["design"]->getPrice() }}</li>
                <li class="list-group-item"><b>Descripcion: </b>{{ $data["design"]->getDescription() }}</li>
                <li><img src="{{ asset('/img/designs/thumbs/'.$data["design"]->getImage()) }}" alt="" width="200"></li>
                <li>
                    <form method="POST" action="{{ route('design.destroy', $data["design"]) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger"}> Eliminar </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection