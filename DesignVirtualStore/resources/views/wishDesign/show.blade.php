@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<table class="table col-12">
    <thead>
        <tr>
            <th> Id </th>
            <th> {{__('words.Diseño')}}</th>
            <th> {{__('words.Precio')}} </th>
            <th> {{__('words.Categoria')}} </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($data["wishDesigns"] as $design)
            <tr>
                <td><div class="card-bold"><a href=""> {{ $design->id }} </a></div></td>
                <td><img src="{{ asset('/img/designs/'.$design->image ) }}" alt="" width="200"></td>
                <td> {{ $design->price }} </td>
                <td> {{ $design->category_id }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection