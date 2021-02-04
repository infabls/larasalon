@extends('layouts.app')

@section('title', 'Все салоны красоты Казахстана')

@section('content')
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <style>
        .hero_single.version_2 {
            background: #222 url(https://zapis.kz/static/img/client_pages/search/categories/category-1.png) center center no-repeat;
            background-size: cover;
        }
        @media (max-width: 767px) {
            #toTop {
                display: block !important;
            }
        }
        .header_in {
                position: fixed !important;
                box-shadow: 0px 2px 5px 2px #0000007a;
            }
    </style>
    <main>
        <section class="hero_single version_2">
            <div class="wrapper">
                <div class="container">
                    <h3>Все салоны вашего города!</h3>
                    <p>Ищите мастеров и салоны самым удобным способом!</p>
{{--                     <form>
                        <div class="row no-gutters custom-search-input-2">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Чот вы ищете?">
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Город">
                                    <i class="icon_pin_alt"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="wide">
                                    <option>Все категории</option> 
                                    <option>Парикмахерские</option>
                                    <option>Ногти</option>
                                    <option>Уход за телом</option>
                                    <option>Макияж</option>
                                    <option>Удаление волос</option>
                                    <option>Косметология</option>
                                    <option>Брови</option>
                                    <option>Ресницы</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" value="Найти">
                            </div>
                        </div>
                        
                    </form> --}}
                </div>
            </div>
        </section>
        
        
        <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Популярные категории</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row">
                    @foreach ($cats as $cat)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{url($value.'/category/'. $cat->cat_key)}}" class="grid_item">
                            <figure>
                                <img src="https://zapis.kz{{$cat->imageUrl}}" alt="">
                                <div class="info">
                                    <small>122 салона</small>
                                    <h3>{{$cat->name}}</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    @endforeach
                </div>
                
            </div>
            <!-- /container --> 
        </div>
        <!-- /bg_color_1 -->    

        <div class="container-fluid margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Рекоммендуемы компании</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">

                @foreach ($salons as $salon)
                <div class="item">
                    <div class="strip grid">
                        <figure>
                            <a href="{{url('/salon/' .$salon->urlKey)}}" class="wish_bt"></a>
                            <a href="{{url('/salon/' .$salon->urlKey)}}"><img src="{{$salon->avatarUrl}}" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>Подробнее</span></div></a>
                            <small>{{$city->name}}</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{url('/salon/' .$salon->urlKey)}}">{{$salon->name}}</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                        </div>
                        <ul>
                            <li><span class="loc_open">Now Open</span></li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /carousel -->
            <div class="container">
                <div class="btn_home_align"><a href="{{url($value.'/category/parikmaherskie-uslugi')}}" class="btn_1 rounded">Все салоны</a></div>
            </div>
            <!-- /container -->
        </div>
        <!-- /container -->
        
        <div class="call_section pattern">
            <div class="wrapper">
                <div class="container margin_80_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2>Как это работает?</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-search"></i>
                                <h3>Search Locations</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-info"></i>
                                <h3>View Location Info</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-like2"></i>
                                <h3>Book, Reach or Call</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                            </div>
                        </div>
                    </div>
                    
                    <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="register.html" class="btn_1 rounded">Зарегистрироваться</a></p>
                </div>
            </div>
            <!-- /wrapper -->
        </div>
        <!--/call_section-->
        
                <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Еще одни популярные категории</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row justify-content-center">
                    @foreach ($cats as $cat)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{url($value.'/category/'. $cat->cat_key)}}" class="box_cat_home">
                            <i class="icon_menu-circle_alt"></i>
                            <img class='recc_img' src="https://zapis.kz{{$cat->imageUrl}}" width="100%" height="115px" alt="">
                            <h3>{{$cat->name}}</h3>
                            <ul>
                                <li><strong>1240</strong>Компаний</li>
                            </ul>
                        </a>
                    </div>
                    @endforeach
                </div>
                
            </div>
            <!-- /container --> 
        </div>
        <!-- /bg_color_1 -->
{{--!!! ПРИЛОЖЕНИЕ !!!--}}
{{--                 <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Скачивайте приложение cute.kz</h2>
                <p>Доступно в Google Play и AppStore</p>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <img src="img/mobile.svg" alt="" class="img-fluid add_bottom_45">
                    <div class="app_icons">
                        <a href="#0" class="pr-lg-2"><img src="img/app_android.svg" alt=""></a>
                        <a href="#0" class="pl-lg-2"><img src="img/app_apple.svg" alt=""></a>
                    </div>
                    <div class="add_bottom_15"><small>*Некоторое примечание к этому блоку.</small></div>
                </div>
            </div>
        </div> --}}
        <!-- /container -->

        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Новости и события</h2>
                <p>Последние новости в мире красоты в Казахстане</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="img/news_home_1.jpg" alt="">
                        </figure>
                        <ul>
                            <li>Restaurants</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="img/news_home_2.jpg" alt="">
                        </figure>
                        <ul>
                            <li>Shops</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Duo eius postea suscipit ad</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="img/news_home_3.jpg" alt="">
                        </figure>
                        <ul>
                            <li>Shops</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Elitr mandamus cu has</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="img/news_home_4.jpg" alt="">
                        </figure>
                        <ul>
                            <li>Bars</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Id est adhuc ignota delenit</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            
            <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

@endsection
