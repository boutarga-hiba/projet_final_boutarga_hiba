
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Backend</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" href="img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/lightslider.min.css') }}">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        {{-- style select --}}
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    </head>

    <!--::header part start::-->
    <header class="main_menu home_menu position-static">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">

                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('storage/img/logo.png') }}" alt="logo">
                            </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class=" navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('product.admin')}}">Products</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="" id="">
                                        Users
                                    </a>

                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href={{route("info.index")}} id="">
                                        Infos
                                    </a>

                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link" href={{route("mail.index")}} id="">
MailBoxe
  </a>

                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{route("info.index")}}">Contact</a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{route("maili.store")}}">MailBox</a> --}}
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">

                            <a href={{route('login')}} ><i class="fa-solid fa-circle-user" style="color: #000000;"></i></a>
                            {{--logout--}}
                            @auth
                            <form action="{{ route('logout')}}" method="POST">
                                @csrf
                                <a class="text-dark" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="text-dark ti-power-off"></i>
                                </a>
                            </form>
                        @endauth
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- Header part end-->
    @include('layouts.flash')
    @yield('product_backend')

</body>
</html>
