@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{{ route('index', app()->getLocale()) }}"><i class="fa fa-home"></i> Inicio </a>
                    <a href="#"> Tienda </a>
                    <span> Detalles </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            @include('util.sectionFilter')
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="{{ asset('/img/designs/'.$data["design"]->getImage()) }}" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="{{ asset('/img/designs/'.$data["design"]->getImage()) }}"><img src="{{ asset('/img/designs/'.$data["design"]->getImage()) }}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{ asset('/img/designs/thumbs/'.$data["design"]->getImage()) }}"><img src="{{ asset('/img/designs/thumbs/'.$data["design"]->getImage()) }}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{ asset('/img/designs/thumbs/'.$data["design"]->getImage()) }}"><img src="{{ asset('/img/designs/thumbs/'.$data["design"]->getImage()) }}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{ asset('/img/designs/thumbs/'.$data["design"]->getImage()) }}"><img src="{{ asset('/img/designs/thumbs/'.$data["design"]->getImage()) }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span> oranges </span>
                                <h3> {{ $data["design"]->getName() }} </h3>
                                <a href="{{ route('wishDesign.save',['wishList_id'=>'1', 'design_id'=>$data["design"]->getId()]) }}" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <p> {{ $data["design"]->getDescription() }} </p>
                                <h4> {{ $data["design"]->getPrice() }} <span>{{ $data["design"]->getPrice() }}</span></h4>
                            </div>
                            <div class="quantity">
                                <form method="POST" action="{{ route('cart.addToCart', ['id'=> $data['design']->getId()]) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="pro-qty">
                                        <input type="text" name="quantity" value="1">
                                    </div>
                                    <input type="submit" class="primary-btn pd-cart" value="Agregar" />
                                </form>
                            </div>      
                            <div class="pd-share">
                                <div class="p-code">Sku : 00012</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-1" role="tab"> DESCRIPCIÓN </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2" role="tab"> ESPECIFICACIONES </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-3" role="tab"> COMENTARIOS  (02) </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5> Introducción </h5>
                                            <p> {{ $data["design"]->getDescription() }} </p>
                                            <h5> Caracteristicas</h5>
                                            <p> {{ $data["design"]->getDescription() }} </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{{ asset('/img/designs/'.$data["design"]->getImage()) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory"> Calificación </td>
                                            <td>
                                                <div class="pd-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>(5)</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory"> Precio </td>
                                            <td>
                                                <div class="p-price"> {{ $data["design"]->getPrice() }} </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory"> Añadir al carrito </td>
                                            <td>
                                                <div class="cart-add"> + Anañadir al carrito </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory"> Disponibilidad </td>
                                            <td>
                                                <div class="p-stock"> 22 existencias </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory"> Ancho </td>
                                            <td>
                                                <div class="p-weight"> {{ $data["design"]->getWidth() }} </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Sku</td>
                                            <td>
                                                <div class="p-code">00012</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>2 Comentarios </h4>
                                    <div class="comment-option">
                                    </div>
                                    <div class="leave-comment">
                                        <h4> Comentar </h4>
                                        <form action="#" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Messages"></textarea>
                                                    <button type="submit" class="site-btn">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section Begin -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2> Productos relacionados </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data["designs"] as $design)
            @include('util.sectionDesign')
            @endforeach
        </div>
    </div>
</div>
<!-- Related Products Section End -->

@endsection