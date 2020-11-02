@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"> {{__('words.Añadirdiseño')}} </div>
          <div class="card-body">
            @if($errors->any())
              <ul id="errors">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif
            <form method="POST" action="{{ route('design.save', app()->getLocale()) }}" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="{{__('words.Nombre')}}" name="name" value="{{ old('name') }}" />
                <input type="number" placeholder="{{__('words.Precio')}}" name="price" value="{{ old('price') }}" />
                <input type="text" placeholder="{{__('words.Descripcion')}}" name="description" value="{{ old('description') }}" />
                <input type="number" placeholder="{{__('words.Ancho')}}" name="width" value="{{ old('width') }}" />
                <input type="number" placeholder="{{__('words.Largo')}}" name="length" value="{{ old('length') }}" />
                <input type="text" placeholder="{{__('words.Categoria')}}" name="category_id" value="{{ old('category_id') }}" />
                <input type="file" placeholder="{{__('words.Imagen')}}" name="image"/>
                <input type="submit" value="{{__('words.Enviar')}}" />
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection