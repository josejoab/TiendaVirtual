@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col"> Id </th>
            <th scope="col"> Name </th>
            <th scope="col"> Price </th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data["api"]["data"] as $dat)
            <tr>
                <td> {{ $dat["id"] }} </td>
                <td> {{ $dat["name"] }} </td>
                <td> {{ $dat["price"] }} </td>
            </tr>
        @endforeach

    </tbody>
</table>

@endsection 