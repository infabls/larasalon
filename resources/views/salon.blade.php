<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ appName() }}</title>
        <meta name="description" content="@yield('meta_description', appName())">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        @stack('before-styles')
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        @stack('after-styles')

        @include('includes.partials.ga')
    </head>
    <body>
        @include('includes.partials.read-only')
        @include('includes.partials.logged-in-as')
        <div id="app" class="flex-center position-ref full-height">
            <div class="top-right links">
                 <ul>
                    <h3>Ваш город - {{$value}}</h3>
                    <li><a href="/city/astana">Астана</a></li>
                    <li><a href="/city/almaty">Алматы</a></li>
                    <li><a href="/city/oskemen">Усть-Каменогорск</a></li>
                </ul>
                @auth
                    @if ($logged_in_user->isUser())
                        <a href="{{ route('frontend.user.dashboard') }}">@lang('Dashboard')</a>
                    @endif

                    <a href="{{ route('frontend.user.account') }}">@lang('Account')</a>
                @else
                    <a href="{{ route('frontend.auth.login') }}">@lang('Login')</a>

                    @if (config('boilerplate.access.user.registration'))
                        <a href="{{ route('frontend.auth.register') }}">@lang('Register')</a>
                    @endif
                @endauth
            </div><!--top-right-->

            <div class="content">
                @include('includes.partials.messages')

                <div class="title m-b-md">
                    <example-component></example-component>
                </div><!--title-->

                <div class="links">
                   
               
                <h2>{{$salon['name']}}</h2>
                <img src="https://zapis.kz/{{$salon['avatarUrl']}}" alt="">
                <p>{!! $salon['description'] !!}</p>
                <p>Город: {{$salon['cityName']}}</p>
                <p>Номер: <a href="tel:{{$salon['phoneNumbers']}}">{{$salon['phoneNumbers']}}</a></p>
                <p>Инстаграм: <a target="_blank" href="https://www.instagram.com/{{$salon['instagramProfile']}}/">{{$salon['instagramProfile']}}</a></p>
                </div><!--links-->
            </div><!--content-->
        </div><!--app-->
       <div id="cats">
            <h3>Категории</h3>
            <ul>
                <li><a href="/{{$value}}/category/parikmaherskie-uslugi">Парикмахерские услуги</a></li>
                <li><a href="/{{$value}}/category/nogtevoi-servis">Ногти</a></li>
                <li><a href="/{{$value}}/category/uhod-za-telom">Уход за телом</a></li>
                <li><a href="/{{$value}}/category/makiyazh">Макияж</a></li>
                <li><a href="/{{$value}}/category/udalenie-volos">Удаление волос</a></li>
                <li><a href="/{{$value}}/category/kosmetologiya">Косметология</a></li>
                <li><a href="/{{$value}}/category/brovi">Брови</a></li>
                <li><a href="/{{$value}}/category/resnitsy">Ресницы</a></li>
            </ul>
        </div>
        <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
        <div id="map" style="width:500px; height:400px"></div>
        <script type="text/javascript">
                var map;
                DG.then(function () {
                    map = DG.map('map', {
                        center: [{{$salon['centerY']}}, {{$salon['centerX']}}],
                        zoom: {{$salon['zoom']}}                    
                    });
                    DG.marker([{{$salon['markerY']}}, {{$salon['markerX']}}]).addTo(map).bindPopup('<a target="_blank" href="/salon/{{$salon['urlKey']}}">{{$salon['name']}}</a>');                    var popup = DG.popup()
                        .setLatLng(latlng)
                        .setContent('')
                        .openOn(map);
                    // DG.marker([49.965929, 82.583435]).addTo(map);
                });
        </script>
        @stack('before-scripts')
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/frontend.js') }}"></script>
        @stack('after-scripts')
    </body>
</html>
