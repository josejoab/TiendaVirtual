@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<table class="table col-12">
    <thead>
        <tr>
            <th> Id </th>
            <th> Nombre </th>
            <th> Categoria </th>
            <th> Precio </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data["designs"] as $design)
            <tr>
                @if($loop->index<2)
                    <td><div class="card-bold"><a href="{{ route('design.showDesign', ['id'=>$design->id]) }}"> {{ $design->id }} </a></div></td>
                @else
                <td><a href="{{ route('design.showDesign', ['id'=>$design->id]) }}"> {{ $design->id }} </a></td>
                @endif
                <td> {{ $design->name }} </td>
                <td> {{ $design->category }} </td>
                <td> {{ $design->price }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection