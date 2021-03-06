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

            <form method="POST" action="{{ route('category.save', app()->getLocale()) }}" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="{{__('words.Nombre')}}" name="name" value="{{ old('name') }}" />
                <input type="text" placeholder="{{__('words.Descripcion')}}" name="description" value="{{ old('description') }}" />
                <input type="submit" value="{{__('words.Enviar')}}" />
            </form>

          </div>
      </div>
    </div>
  </div>
</div>
@endsection