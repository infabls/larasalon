<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ appName() }}</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/css/custom.css" rel="stylesheet">
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
            <footer class="plus_border">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <h3 data-target="#collapse_ft_1">Быстрые ссылки</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_ft_1">
                        <ul class="links">
                            <li><a href="#0">Добавить компанию</a></li>
                            <li><a href="#0">Рекламодателям</a></li>
                            <li><a href="#0">Помощь</a></li>
                            <li><a href="#0">Мой аккаунт</a></li>
                            <li><a href="#0">Создать аккаунт</a></li>
                            <li><a href="#0">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <h3 data-target="#collapse_ft_2">Категории</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_ft_2">
                        <ul class="links">
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
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <h3 data-target="#collapse_ft_3">Контакты</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_ft_3">
                        <ul class="contacts">
                    {{--         <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li> --}}
                            <li><i class="ti-headphone-alt"></i><a href="tel:+77058317474"></a>+7 (705) 831 74 74</li>
                            <li><i class="ti-email"></i><a href="#0">info@sparker.com</a></li>
                        </ul>
                    </div>
                </div>
{{--                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <h3 data-target="#collapse_ft_4">Подписывайтесь на рассылку!</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_ft_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <input type="submit" value="Submit" id="submit-newsletter">
                                </div>
                            </form>
                        </div>
                        <div class="follow_us">
                            <h5>Мы в соц сетях</h5>
                            <ul>
                                <li><a href="#0"><i class="ti-facebook"></i></a></li>
                                <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#0"><i class="ti-google"></i></a></li>
                                <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                                <li><a href="#0"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- /row-->
            <hr>
            <div class="row">
{{--                 <div class="col-lg-6">
                    <ul id="footer-selector">
                        <li>
                            <div class="styled-select" id="lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select" id="currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="img/cards_all.svg" alt=""></li>
                    </ul>
                </div> --}}
                <div class="col-lg-12">
                    <ul id="additional_links">
                        <li><a href="#0">Правила использования</a></li>
                        <li><a href="#0">Приватность</a></li>
                        <li><span>© 2020 <a href="https://coderoad.ru/itarget.kz">iTarget.kz</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div><!--app-->
    <div id="toTop"></div><!-- Back to top button -->
        <!-- COMMON SCRIPTS -->
    <script src="/js/my/common_scripts.js"></script>
    <script src="/js/my/functions.js"></script>
    <script src="/assets/validate.js"></script>
    
    <!-- Map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="/js/my/markerclusterer.js"></script>
    <!-- <script src="/js/my/map.js"></script> -->
    <script src="/js/my/infobox.js"></script>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(69904915, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/69904915" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2VL7P3CR4J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2VL7P3CR4J');
</script>
</body>
</html>
