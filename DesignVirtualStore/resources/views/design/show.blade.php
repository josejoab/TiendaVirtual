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
                <td><div class="card-bold"><a href="{{ route('design.showDesign', ['id'=>$design->getId()]) }}"> {{ $design->getId() }} </a></div></td>
                <td> {{ $design->getName() }} </td>
                <td> {{ $design->getPrice() }} </td>
                <td> {{ $design->getCategoryId() }} </td>
                <td><div class="card-bold"><a href="{{ route('design.edit', ['id'=>$design->getId()]) }}"> Editar </a></div></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection