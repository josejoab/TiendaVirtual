@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @include('util.message')
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

            <form method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" />
                <input type="text" placeholder="Categoria" name="category" value="{{ old('category') }}" />
                <input type="number" placeholder="Precio" name="price" value="{{ old('price') }}" />
                <input type="text" placeholder="Descripción" name="description" value="{{ old('description') }}" />
                <input type="file" placeholder="img" name="img"/>
                <input type="submit" value="Send" />
            </form>

          </div>
      </div>
    </div>
  </div>
</div>
@endsection