@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"> {{__('words.Actualizardiseño')}} </div>
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
                <input type="text" placeholder="{{__('words.Nombre')}}" name="name" value="{{ $data["design"]->getName() }}" />
                <input type="number" placeholder="{{__('words.Precio')}}" name="price" value="{{ $data["design"]->getPrice() }}" />
                <input type="text" placeholder="{{__('words.Descripcion')}}" name="description" value="{{ $data["design"]->getDescription() }}" />
                <input type="number" placeholder="{{__('words.Ancho')}}" name="width" value="{{ $data["design"]->getWidth() }}" />
                <input type="number" placeholder="{{__('words.Largo')}}" name="length" value="{{ $data["design"]->getLength() }}" />
                <input type="text" placeholder="{{__('words.Categoria')}}" name="category_id" value="{{ $data["design"]->getCategoryId() }}" />
                <input type="file" placeholder="{{__('words.Imagen')}}" name="image"/>
                <input type="submit" value="{{__('words.Enviar')}}" />
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection