@extends('layouts.master')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{route('home', app()->getLocale())}"><i class="fa fa-home"></i> {{__('words.Inicio')}}</a>
                        <a href="{route('design.show', app()->getLocale())}">{{__('words.Diseños')}}</a>
                        <span>{{__('words.CarritodeCompras')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{__('words.Imagen')}}</th>
                                    <th class="p-name">{{__('words.Nombredeldiseño')}}</th>
                                    <th>{{__('words.Precio')}}</th>
                                    <th>{{__('words.Cantidad')}}</th>
                                    <th>{{__('words.Total')}}</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data["design"] as $product)
                                <tr>
                                    <td class="cart-pic first-row"><img src="{{ asset('/fashi/img/cart-page/product-1.jpg')}}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{ $product->getName() }}</h5>
                                    </td>
                                    <td class="p-price first-row">{{ $product->getPrice() }}</td>
                                    <td class="qua-col first-row">
                                        {{ Session::get('designs')[$product->getId()] }}
                                    </td>
                                    <td class="total-price first-row">{{ Session::get('subPrice')[$product->getId()] }}</td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="{{route('design.show', app()->getLocale())}}" class="primary-btn continue-shop">{{__('words.ContinuarComprando')}}</a>
                                <a href="{{route('cart.cart', app()->getLocale())}}" class="primary-btn up-cart">{{__('words.ActualizarCarrito')}}</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>{{__('words.Codigosdedescuento')}}</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">{{__('words.Aplicar')}}</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">{{__('words.Subtotal')}} <span>$240.00</span></li>
                                    <li class="cart-total">{{__('words.Total')}} <span>$99.999</span></li>
                                </ul>
                                <form action="{{ route('cart.buy', app()->getLocale()) }}" method="POST">
                                @csrf
                                    <button  class="proceed-btn" type="submit">{{__('words.ProcederconCHECKOUT')}}</button>
                                    <a href="{{ route('cart.removeCart', app()->getLocale()) }}" class="proceed-btn">{{__('words.VaciarCarrito')}}</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
