<!-- Autor: Valeria Suárez -->

@extends('layouts.master')

@section('content')
<div class="container">
<h3>Chat</h3>
    @livewire("chat-form")
    @livewire("chat-list")
</div>
@endsection

