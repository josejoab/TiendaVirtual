@extends('layouts.master')

@section("title", "productos prueba")
@section('content')

<div class="container">
<div class="row justify-content-center"> 
    
        
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Lista</span>
                <span class="section-heading-lower">Diseños</span>
            </h2>
            <div class="col-md-12">
                <ul id="errors">
                    @foreach($data["designs"] as $venta)
                        <div class="card-header">
                                <li> <a href="{{route('design.showOne', ['id'=> $venta->getId()])}}"> <b>{{ $venta->getId() }}  - {{ $venta->getName() }} </b></a></li>
                        </div>
                    @endforeach
                </ul>
            </div>
            <td> 
                <a class="navbar-brand ml-auto" href="{{ route('cart.removeCart')}}">Remove Cart</a>
            </td>
            <td> 
                <a class="navbar-brand ml-auto" href="{{ route('cart.cart')}}">Cart</a>
            </td>
    </div>
</div>
@endsection