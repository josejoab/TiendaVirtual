@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"> Añadir diseño </div>
          <div class="card-body">
            @if($errors->any())
             <ul id="errors">
               @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif

            <form method="POST" action="{{ route('design.save') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" />
                <input type="number" placeholder="Precio" name="price" value="{{ old('price') }}" />
                <input type="text" placeholder="Descripción" name="description" value="{{ old('description') }}" />
                <input type="number" placeholder="Ancho" name="width" value="{{ old('width') }}" />
                <input type="number" placeholder="Largo" name="length" value="{{ old('length') }}" />
                <input type="text" placeholder="Categoria" name="category_id" value="{{ old('category_id') }}" />
                <input type="file" placeholder="image" name="image"/>
                <input type="submit" value="Send" />
            </form>

          </div>
      </div>
    </div>
  </div>
</div>
@endsection