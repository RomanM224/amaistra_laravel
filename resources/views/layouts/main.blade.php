<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

    @yield('custom_css')
</head>

<body style="background-image:url({{ asset('images/background.jpg')}})">
    <div class="page">
        <header style="background-image:url({{ asset('images/header_img.jpg')}})">
            <div class="buttonBars">
                <div class="buttonBar1"></div>
                <div class="buttonBar2"></div>
                <div class="buttonBar3"></div>
            </div>
            <nav class="navbar_short_screen">
                <ul class="nav_list_short ">
                    <li> <a href="{{ route('index') }}" class="navbar_item_short">Главная</a></li>
                    <li> <a href="{{ route('orders') }}" class="navbar_item_short">Услуги</a></li>
                    <li> <a href="{{ route('showAllPosts') }}" class="navbar_item_short">Новости</a></li>
                    <li> <a href="{{ route('showAllReview') }}" class="navbar_item_short">Отзывы</a></li>
                    <li> <a href="{{ route('contacts') }}" class="navbar_item_short">Контакты</a></li>
                    @auth
                    <li> <a href="{{ route('home') }}" class="navbar_item_short">Панель Админа</a></li>
                    @endauth
                </ul>
            </nav>
            <div class="logo_block">
                <a href="">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <nav class="navbar_big_screen">
                <ul class="nav_list">
                    <li> <a href="{{ route('index') }}" class="navbar_item">Главная</a></li>
                    <li> <a href="{{ route('orders') }}" class="navbar_item">Услуги</a></li>
                    <li> <a href="{{ route('showAllPosts') }}" class="navbar_item">Новости</a></li>
                    <li> <a href="{{ route('showAllReview') }}" class="navbar_item">Отзывы</a></li>
                    <li> <a href="{{ route('contacts') }}" class="navbar_item">Контакты</a></li>
                    @auth
                    <li> <a href="{{ route('home') }}" class="navbar_item">Панель Админа</a></li>
                    @endauth
                </ul>
            </nav>

        </header>


        @yield('content')
    </div>
    <script>
        $(".buttonBars").click(function() {
            console.log("hello");
            $(".buttonBars").toggleClass("change");
            $(".navbar_short_screen").toggleClass("nav_list_on");
        });
    </script>


</body>

</html>