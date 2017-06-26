<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Главная</title>
    <meta name="description"  />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ URL::asset('/images/iiidm.png') }}" />
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('libs/bootstrap/bootstrap-grid-3.3.1.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('libs/font-awesome-4.2.0/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('libs/fancybox/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('libs/owl-carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('libs/countdown/jquery.countdown.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/media.css') }}" />
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"
            type="text/javascript" charset="utf-8" ></script>
</head>
<body>

{{--@include('layouts.top_header')--}}
{{--
@include('layouts.navbar')
--}}
@yield('content')

{{--<div class="hidden">
    <form id="callback" class="pop_form">
        <h3>Заказать разработку</h3>
        <input type="text" name="name" placeholder="Ваше имя..." required />
        <input type="text" name="phone" placeholder="Ваше телефон..." required />
        <button class="button" type="submit">Заказать</button>
    </form>
</div>--}}



<!--[if lt IE 9]>
<script src="{{ URL::asset('libs/html5shiv/es5-shim.min.js') }}"></script>
<script src="{{ URL::asset('libs/html5shiv/html5shiv.min.js') }}"></script>
<script src="{{ URL::asset('libs/html5shiv/html5shiv-printshiv.min.js') }}"></script>
<script src="{{ URL::asset('libs/respond/respond.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ URL::asset('libs/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ URL::asset('libs/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>
<script src="{{ URL::asset('libs/fancybox/jquery.fancybox.pack.js') }}"></script>
<script src="{{ URL::asset('libs/waypoints/waypoints-1.6.2.min.js') }}"></script>
<script src="{{ URL::asset('libs/scrollto/jquery.scrollTo.min.js') }}"></script>
<script src="{{ URL::asset('libs/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('libs/countdown/jquery.plugin.js') }}"></script>
<script src="{{ URL::asset('libs/countdown/jquery.countdown.min.js') }}"></script>
<script src="{{ URL::asset('libs/countdown/jquery.countdown-ru.js') }}"></script>
<script src="{{ URL::asset('libs/landing-nav/navigation.js') }}"></script>
<script src="{{ URL::asset('js/common.js') }}"></script>



</body>
</html>