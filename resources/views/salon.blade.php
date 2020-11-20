@extends('layouts.app')
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/vendors.css" rel="stylesheet">

<!-- YOUR CUSTOM CSS -->
<link href="/css/custom.css" rel="stylesheet">
@section('content')

        @if($salon['avatarUrl2'] !== '')
        <div id="carousel_in" class="owl-carousel owl-theme">
          <div class="item"><img src="https://zapis.kz/{{$salon['avatarUrl']}}" alt=""></div>
        </div>
        @endif
        <nav class="secondary_nav sticky_horizontal_2">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Описание</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#map">Карта</a></li>
                    <li><a href="#sidebar">Заказать</a></li>
                </ul>
            </div>
        </nav>

                <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section id="description">

                            <div class="detail_title_1">
                                @if ($salon['averageRating'] > 0)
                                <div class="cat_star">
                                    @for ($i = 0; $i < round($salon['averageRating']); $i++)
                                        <i class="icon_star"></i>
                                    @endfor                                               
                                </div>
                                @endif
                                <h1>{{$salon['name']}}</h1>
                                <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">{{$salon['address']}}</a>
                            </div>
                            <p>{!!$salon['description']!!}</p>
                            <h5 class="add_bottom_15">Amenities</h5>
                            <div class="row add_bottom_30">
                                <div class="col-lg-6">
                                    <ul class="bullets">
                                        <li>Dolorem mediocritatem</li>
                                        <li>Mea appareat</li>
                                        <li>Prima causae</li>
                                        <li>Singulis indoctum</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="bullets">
                                        <li>Timeam inimicus</li>
                                        <li>Oportere democritum</li>
                                        <li>Cetero inermis</li>
                                        <li>Pertinacia eum</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->                       
                            <hr>
                            <div class="room_type first">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/img/gallery/hotel_list_1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Single Room</h4>
                                        <p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                        <ul class="hotel_facilities">
                                            <li><img src="/img/hotel_facilites_icon_2.svg" alt="">Single Bed</li>
                                            <li><img src="/img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
                                            <li><img src="/img/hotel_facilites_icon_5.svg" alt="">Shower</li>
                                            <li><img src="/img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
                                            <li><img src="/img/hotel_facilites_icon_8.svg" alt="">Hairdryer</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /rom_type -->
                            <div class="room_type alternate">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/img/gallery/hotel_list_2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Double Room</h4>
                                        <p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                        <ul class="hotel_facilities">
                                            <li><img src="/img/hotel_facilites_icon_3.svg" alt="">Double Bed</li>
                                            <li><img src="/img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
                                            <li><img src="/img/hotel_facilites_icon_6.svg" alt="">Bathtub</li>
                                            <li><img src="/img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
                                            <li><img src="/img/hotel_facilites_icon_8.svg" alt="">Hairdryer</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /rom_type -->
                            <div class="room_type last">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/img/gallery/hotel_list_3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Suite Room</h4>
                                        <p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                        <ul class="hotel_facilities">
                                            <li><img src="/img/hotel_facilites_icon_3.svg" alt="">King size Bed</li>
                                            <li><img src="/img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
                                            <li><img src="/img/hotel_facilites_icon_6.svg" alt="">Bathtub</li>
                                            <li><img src="/img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
                                            <li><img src="/img/hotel_facilites_icon_9.svg" alt="">Swimming pool</li>
                                            <li><img src="/img/hotel_facilites_icon_3.svg" alt="">Hairdryer</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /rom_type -->
                            <hr>
                            <h3>Prices</h3>
                            <table class="table table-striped add_bottom_45">
                                <tbody>
                                    <tr>
                                        <td>Low (from 23/03 to 31/05)</td>
                                        <td>140$</td>
                                    </tr>
                                    <tr>
                                        <td>Middle (from 23/03 to 31/05)</td>
                                        <td>180$</td>
                                    </tr>
                                    <tr>
                                        <td>High (from 23/03 to 31/05)</td>
                                        <td>200$</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <h3>Наш адрес</h3>
                            <div id="map" class="map map_single add_bottom_45"></div>
                            <!-- End Map -->
                        </section>
                        <!-- /section -->
                    
                    @if ($salon['reviewCount'] > 0)
                                
                        <section id="reviews">
                            <h2>Отзывы</h2>
                            <div class="reviews-container add_bottom_30">
                                <div class="row">
                                    <div class="col-lg-3">

                                        <div id="review_summary">
                                            <strong>{{$salon['averageRating']}}</strong>
                                            <em>Баллов</em>
                                            <small>Основано на {{$salon['reviewCount']}} отзывах</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <div class="reviews-container">

                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/img/avatar1.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Admin – April 03, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/img/avatar2.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Ahsan – April 01, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/img/avatar3.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Sara – March 31, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                            </div>
                            <!-- /review-container -->
                        </section>
                        <!-- /section -->
                        <hr>
                    @else
                        <section id="reviews">
                            <h2>Отзывов нет</h2>
                        </section>

                    @endif
                            <div class="add-review">
                                <h5>Leave a Review</h5>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Name and Lastname *</label>
                                            <input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email *</label>
                                            <input type="email" name="email_review" id="email_review" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Rating </label>
                                            <div class="custom-select-form">
                                            <select name="rating_review" id="rating_review" class="wide">
                                                <option value="1">1 (lowest)</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected>5 (medium)</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10 (highest)</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Your Review</label>
                                            <textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 add_top_20 add_bottom_30">
                                            <input type="submit" value="Submit" class="btn_1" id="submit-review">
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                    <!-- /col -->
                    
                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price">
                                <span>45$ <small>person</small></span>
                                @if ($salon['reviewCount'] > 0)
                                <div class="score">
                                    <span>Отлично<em>{{$salon['reviewCount']}} отзывов</em></span>
                                    <strong>{{$salon['averageRating']}}</strong>
                                </div>
                                @endif

                            </div>

                            <div class="form-group" id="input-dates">
                                <input class="form-control" type="text" name="dates" placeholder="When..">
                                <i class="icon_calendar"></i>
                            </div>

                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown">Guests <span id="qty_total">0</span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-content">
                                        <label>Adults</label>
                                        <div class="qty-buttons">
                                            <input type="button" value="+" class="qtyplus" name="adults">
                                            <input type="text" name="adults" id="adults" value="0" class="qty">
                                            <input type="button" value="-" class="qtyminus" name="adults">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu-content">
                                        <label>Childrens</label>
                                        <div class="qty-buttons">
                                            <input type="button" value="+" class="qtyplus" name="child">
                                            <input type="text" name="child" id="child" value="0" class="qty">
                                            <input type="button" value="-" class="qtyminus" name="child">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->

                            <div class="form-group clearfix">
                                <div class="custom-select-form">
                                    <select class="wide">
                                        <option>Room Type</option>  
                                        <option>Single Room</option>
                                        <option>Double Room</option>
                                        <option>Suite Room</option>
                                    </select>
                                </div>
                            </div>
                            <a href="checkout.html" class=" add_top_30 btn_1 full-width purchase">Purchase</a>
                            <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
                            <div class="text-center"><small>No money charged in this step</small></div>
                        </div>
                        <ul class="share-buttons">
                            <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                            <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
                            <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                        </ul>
                    </aside>
                </div>
                <!-- /row -->
        </div>
        <!-- /container -->

                <div class="links">
                   
               
                <h2>{{$salon['name']}}</h2>
                <p>{!! $salon['description'] !!}</p>
                <p>Город: {{$salon['cityName']}}</p>
                <p>Номер: <a href="tel:{{$salon['phoneNumbers']}}">{{$salon['phoneNumbers']}}</a></p>
                <p>Инстаграм: <a target="_blank" href="https://www.instagram.com/{{$salon['instagramProfile']}}/">{{$salon['instagramProfile']}}</a></p>
                </div><!--links-->
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('createOrder')}}">
                       @csrf
                        <div class="form-group">
                            <h3>Оставить заявку</h3>
                          <input  value="{{$salon->id}}" type="text" id="firm_id" name="firm_id" class="form-control" required="" hidden="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Имя</label>
                          <input  name="name" type="text" class="form-control" required="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Номер телефона</label>
                          <input  name="phone" type="tel" class="form-control" required="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div id="disqus_thread"></div>
            </div><!--content-->
        </div><!--app-->

<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://cute-2.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
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
        <script src="/js/common_scripts.js"></script>
<script src="/js/functions.js"></script>

    <!-- CAROUSEL -->
    <script>
        
     $('#carousel_in').owlCarousel({
        center: true,
        items:1,
        loop:true,
        margin:3,
        autoHeight:true,
        responsive:{
            600:{
                items:1
            },
             1000:{
                items:2
            }
        }
    });
    </script>
<script src="js/animated_canvas_min.js"></script>
@endsection
