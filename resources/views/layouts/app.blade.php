<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ appName() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
    <livewire:styles />
    @stack('after-styles')

    @include('includes.partials.ga')
</head>
<body>
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    <div id="app">
        @include('includes.nav')
        @include('includes.partials.messages')

        <main>
            @yield('content')
        </main>
    </div><!--app-->
    @stack('before-scripts')

    <livewire:scripts />
        <!-- COMMON SCRIPTS -->
    <script src="/js/my/common_scripts.js"></script>
    <script src="/js/my/functions.js"></script>
    <script src="/assets/validate.js"></script>
    
    <!-- Map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="/js/my/markerclusterer.js"></script>
    <script src="/js/my/map.js"></script>
    <script src="/js/my/infobox.js"></script>
    @stack('after-scripts')
</body>
</html>
