@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"> Actualizar diseño </div>
          <div class="card-body">
            @if($errors->any())
              <ul id="errors">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif
            <form method="POST" action="{{ route('design.update', ['id' => $data["design"]->getId()]) }}" enctype="multipart/form-data">
                @csrf
                <h5></h5>
                <input type="text" placeholder="Nombre" name="name" value="{{ $data["design"]->getName() }}" />
                <input type="number" placeholder="Precio" name="price" value="{{ $data["design"]->getPrice() }}" />
                <input type="text" placeholder="Descripción" name="description" value="{{ $data["design"]->getDescription() }}" />
                <input type="number" placeholder="Ancho" name="width" value="{{ $data["design"]->getWidth() }}" />
                <input type="number" placeholder="Largo" name="length" value="{{ $data["design"]->getLength() }}" />
                <input type="text" placeholder="Categoria" name="category_id" value="{{ $data["design"]->getCategoryId() }}" />
                <input type="file" placeholder="image" name="image"/>
                <input type="submit" value="Send" />
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection