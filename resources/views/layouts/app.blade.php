<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    {{-- datatable --}}


</head>
<style>
    #banner {
        background-color: #97BFB4;
        color: #fff;
        direction: rtl;
    }

    .desc {
        margin-top: 90px;
        padding: 20px;
        margin-right: -100px;
        margin-left: 100px;
    }

    .desc h3 {
        margin-top: 50px;
        margin-bottom: 30px;
    }

    .desc p {
        text-align: center;
        margin-right: 120px;
        font-family: sans-serif;
        font-weight: 600;
    }

    .img-fluid {
        margin-top: -30px;
        margin-right: 50px;
    }

    .bottom-img {
        width: 100%;
        height: 100px;
    }

    .navbar {
        background-color: #97BFB4 !important;
    }

</style>

<body>
    <div id="app">

        @if (auth()->user()->user_type == 1)
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary" dir="rtl">
                <a class="navbar-brand  text-white" href="#">برامجي</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav pl-5 ml-5">
                        <li class="nav-item ">
                            <a class="button-style" href="{{ route('programs') }}">الادارة</a>
                        </li>
                        <li class="nav-item ">
                            <a class="button-style" href="#">المستخدمين</a>
                            {{-- href="{{ route('all_users') }}" --}}
                        </li>
                        <li class="nav-item ">
                            <a class="button-style" href="{{ route('home') }}">الصفحة الرئيسية</a>
                        </li>
                        <li class="nav-item ">
                            <a class="button-style" href="{{ route('get_program_student') }}">البرامج</a>
                        </li>
                        <li class=" nav-item ">
                            <a class="button-style" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                {{ __('تسجيل خروج') }}
                            </a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0" id="logout-form" action="{{ route('logout') }}"
                        method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>
        @else
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary" dir="rtl">
                <a class="navbar-brand  text-white" href="#">برامجي</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav pl-5 ml-5">
                        <li class="nav-item ">
                            <a class="button-style" href="{{ route('home') }}">الصفحة الرئيسية</a>
                        </li>
                        <li class="nav-item ">
                            <a class="button-style" href="{{ route('get_program_student') }}">البرامج</a>
                        </li>
                        <li class=" nav-item ">
                            <a class="button-style" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                {{ __('تسجيل خروج') }}
                            </a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0" id="logout-form" action="{{ route('logout') }}"
                        method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>
        @endif
        <section id="banner">
            <div class="container">
                <div class="row">
                    <div class=" desc col-md-6">
                        <h3>الجامعة المستنصرية موقع التعليم الالكتروني </h3>
                        <p>منصة لتقديم الادوات المجانية لطلاب علوم الحاسوب الجامعة المستنصرية </p>
                    </div>
                    <div class="col-md-6 text-center p-4  mb-3 mt-3">
                        <img src="/image/animation_500_kwyvd9aj.gif" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
            <img src="/image/pngkey.com-wave-shape-png-5161226.png" class="bottom-img">
        </section>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @yield('script')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>


    {{-- datatable --}}


</body>

</html>
