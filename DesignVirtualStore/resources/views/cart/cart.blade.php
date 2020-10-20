@extends('layouts.master')

@section('content')


<div class="row" style="margin-top:20px; margin-bottom:20px">
        <div class="col-lg-8 mx-auto">
        <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">
                @foreach($data["design"] as $product)
                    <li>{{__('words.Nombre')}}: {{ $product->getName() }} - {{__('words.Cantidad')}}: {{ Session::get('designs')[$product->getId()] }}</li>
                @endforeach
                <br /><br />
                {{__('words.Total')}}: precio_total
                <form action="{{ route('cart.buy', app()->getLocale()) }}" method="POST">
                @csrf
                <button type="submit">{{__('words.Comprar')}}</button>
                </form> 
            </ul>
        </div>
    </div>

        </div>
    </div>

@endsection