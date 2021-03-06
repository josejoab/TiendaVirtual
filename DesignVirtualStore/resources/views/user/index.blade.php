
<!-- Autor: Valeria Suárez -->

@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top:20px; margin-bottom:20px">
            <div class="card">
                <div class="card-header">{{ __('words.user') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('words.userlog') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






