@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <div class="row" style="margin-top:20px; margin-bottom:20px">
            <h2 class="section-heading mb-4" >
                <span >{{__('words.TuComprahasidoExitosa')}}</span>
            </h2>       
        </div>
    </div>     
    <div class="proceed-checkout " style="margin-top:20px; margin-bottom:20px">
        <td><a href="/" class="proceed-btn" >{{__('words.VolveralInicio')}}</a></td>
    </div>  
</div>
@endsection