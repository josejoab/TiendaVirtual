@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<table class="table col-12">
    <thead>
        <tr>
            <th> Id </th>
            <th> Nombre </th>
            <th> Precio </th>
            <th> Categoria </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($data["designs"] as $design)
            <tr>
                <td><div class="card-bold"><a href="{{ route('design.showDesign', ['id'=>$design->id]) }}"> {{ $design->id }} </a></div></td>
                <td> {{ $design->name }} </td>
                <td> {{ $design->price }} </td>
                <td> {{ $design->category }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection