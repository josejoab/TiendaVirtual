@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{{ route('index', app()->getLocale()) }}"><i class="fa fa-home"></i> {{__('words.Inicio')}} </a>
                    <span> {{__('words.Tienda2')}} </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                @include('util.sectionFilter')
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value=""> {{__('words.ordenar')}} </option>
                                    </select>
                                    <select class="p-show">
                                        <option value=""> {{__('words.Ver')}} </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>{{__('words.Ver')}} {{__('words.Diseños')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach ($data["designs"] as $design)
                                @include('util.sectionDesign')
                            @endforeach
                        </div>
                    </div>
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            {{__('words.Cargar')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->


@endsection