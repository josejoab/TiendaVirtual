<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Home Page')</title>

    <!-- Chat Styles -->
    @livewireStyles
    @livewireScripts
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/fashi/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fashi/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fashi/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fashi/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fashi/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fashi/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fashi/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fashi/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fashi/css/style.css') }}" type="text/css">
</head>

<body>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-right">
                    <!-- Authentication Links -->
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login', app()->getLocale()) }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register', app()->getLocale()) }}">{{ __('words.Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout',app()->getLocale()) }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest


                    <!--Language-->
                    <div class="lan-selector">
                        <!-- con el select-->
                        <select class="language_drop" name="countries" id="countries" style="width:400px;" onchange="location = this.value;">
                            <option value="0" selected>English/Español</option>
                            <option value ="{{ route(Route::currentRouteName(), 'en') }}" data-image="{{ asset('/fashi/img/flag-1.jpg') }}" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value ="{{ route(Route::currentRouteName(), 'es') }}" data-image="{{ asset('/fashi/img/flag-2.jpg') }}" data-imagecss="flag yu"
                                data-title="Spanish">Español</option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{{ asset('/fashi/img/logoSD.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">{{__('words.AllCategories')}}</button>
                            <div class="input-group">
                                <input type="text" placeholder="{{__('words.necesitas')}}">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="{{route('wishDesign.show', app()->getLocale())}}">
                                
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="{{route('cart.cart', app()->getLocale())}}">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                            </li>
                            @guest
                                <li class="cart-price">$ 0</li>
                            @else
                                <li class="cart-price">$ {{ Session::get('totalPrice')["TotalPrice"] }}</li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('index', app()->getLocale())}}">{{__('words.Inicio')}}</a></li>
                        <li><a href="{{route('design.show',app()->getLocale() )}}">{{__('words.Tienda')}}</a></li>
                        @guest
                        @else
                            @if(Auth::user()->role_id==1)
                                <li><a href="{{route('category.create',app()->getLocale() )}}">{{__('words.CCategoria')}}</a></li>
                                <li><a href="{{route('design.create',app()->getLocale() )}}">{{__('words.CDiseño')}}</a></li>
                            @endif
                        @endguest
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset('/fashi/img/logoSD.jpg')}}" alt=""></a>
                        </div>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('/fashi/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/fashi/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/fashi/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('/fashi/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('/fashi/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('/fashi/js/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('/fashi/js/jquery.dd.min.js')}}"></script>
    <script src="{{ asset('/fashi/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('/fashi/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/fashi/js/main.js')}}"></script>


    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f5fb78af0e7167d00103f33/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>

</html>