@extends('layouts.master')

@section("title", "Venta")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Más Detalles</span>
                    <span class="section-heading-lower">Diseños</span>
                </h2>
                <div class="card-header">  id: {{ $data["design"]["id"]}}</div>
                <div class="card-header">Name: {{ $data["design"]["width"]}}</div>
            </div>   
            <!-- CARRITO FORM-->
            <div>
                <form action="{{ route('cart.addToCart',['id'=> $data['design']->getId()]) }}" method="POST">
                     @csrf
                    <div class="form-row">
                        <div class="col-md-12">Qtt: 
                            <input type="number" class="form-control" name="quantity" min="0" style="width: 80px;">
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-outline-success">Add</button>
                        </div>
                    </div>
                </form>
                </div>           
        </div>
    </div>
    <td> 
        <a class="navbar-brand ml-auto" href="{{ route('designs.show')}}">Atrás</a>
    </td>
</div>
@endsection