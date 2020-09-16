@extends('layouts.master')

@section('content')

<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
   <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{ asset('/fashi/img/t1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>{{__('words.TechosPVC')}}</span>
                            <h1>{{__('words.Promo')}}</h1>
                            <p>{{__('words.Lamejorcalidadparatucasa')}}</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Promo <span>10%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{ asset('/fashi/img/t2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Paredes PVC</span>
                            <h1>Precios Bajos</h1>
                            <p>Diseño para tu hogar</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Promo <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    
    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{ asset('/fashi/img/techos.jpg') }}" alt="">
                        <div class="inner-text">
                            <h4>{{__('words.Techos')}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{ asset('/fashi/img/paredes.jpg') }}" alt="">
                        <div class="inner-text">
                            <h4>{{__('words.Paredes')}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{ asset('/fashi/img/pisos.jpg') }}" alt="">
                        <div class="inner-text">
                            <h4>{{__('words.Pisos')}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->
    @endsection