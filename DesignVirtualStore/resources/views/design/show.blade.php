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
            <th> &nbsp; </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($data["designs"] as $design)
            <tr>
                <td><div class="card-bold"><a href="{{ route('design.showDesign', ['id'=>$design->id]) }}"> {{ $design->id }} </a></div></td>
                <td> {{ $design->name }} </td>
                <td> {{ $design->price }} </td>
                <td> {{ $design->category_id }} </td>
                <td><div class="card-bold"><a href="{{ route('design.edit', ['id'=>$design->id]) }}"> Editar </a></div></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection