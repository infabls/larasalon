@extends('layouts.app')
@section('title', $cat['name'] .' - ' . $city->name)
@section('content')


<style>
  .pagination span {
    text-align: center !important;
  }
</style>

<div class="content">
  @include('includes.partials.messages')
  <div class="filters_listing version_2  sticky_horizontal">
    <div class="container">
      <ul class="clearfix">
        <li>
          <div class="switch-field">
            <input type="radio" id="all" name="listing_filter" value="all" checked>
            <label for="all"><a href="#" onclick='window.location.href =  window.location.href.split("?")[0];'>Все</a></label>
            <input type="radio" id="popular" name="listing_filter" value="popular">
            <label for="popular"><a href="?filterBy=withratings">С отзывами</a></label>
            <input type="radio" id="popular" name="listing_filter" value="popular">
            <label for="popular"><a href="?filterBy=verified">Проверенные</a></label>
            <input type="radio" id="latest" name="listing_filter" value="latest">
            <label for="latest"><a href="/nearest">Ближайшие</a></label>
            <input type="radio" id="latest" name="listing_filter" value="latest">
            <label for="latest"><a href="?filterBy=kaspiRed">Kaspi Red</a></label>
          </div>
        </li>
{{--         <li>
          <div class="layout_view">
            <a href="#0" class="active"><i class="icon-th"></i></a>
            <a href="listing-2.html"><i class="icon-th-list"></i></a>
            <a href="list-map.html"><i class="icon-map"></i></a>
          </div> --}}
        </li>
        <li>
          <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Скрыть" data-text-original="На карте">На карте</a>
        </li>
      </ul>
    </div>
    <!-- /container -->
  </div>
  <div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
  </div>

 <div class="row category">
    <aside class="col-lg-3" id="sidebar2">
      <div id="filters_col">
        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Фильтры </a>
        <div class="collapse show" id="collapseFilters">
          <div class="filter_type">
            <!-- <h6>ВАждн</h6> -->
            <br>
            <ul>
              <li>
                <label class="container_check">Работают сейчас <small>43</small>
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="container_check">Выезд на дом <small>33</small>
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="container_check">Каспи RED <small>12</small>
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </li>
              <li>
                <label class="container_check">Проверенные <small>44</small>
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </li>
            </ul>
          </div>
          <div class="filter_type">
            <h6>Расстояние</h6>
            <div class="distance">Компании рядом с вами в радиусе <span></span> км</div>
            <input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
          </div>
          @if ($subcats->count() > 0)
          <div class="filter_type">
            <h6>Подкатегории</h6>

            <ul>
              @foreach ($subcats as $subcat)
              <li>
                <a href="/{{$value}}/category/{{$subcat->cat_key}}">{{$subcat->name}}</a>
              </li>
              @endforeach
            </ul>
          </div>
          @else
          <p>У этой категории нет подкатегорий</p>
          @endif
        </div>
        <!--/collapse -->
      </div>
      <!--/filters col-->
    </aside>
    <!-- /aside -->
    
    <div class="col-lg-9">
      <div class="category_name">
        <h1>{{$cat['name']}}</h1>
      </div>
      @if ($salons->count() > 0)
      <div class="row">

        @foreach ($salons->sortBy('distance') as $salon)

        <div class="col-md-6">
          <div class="strip grid">
            <figure>
              <a href="#0" class="wish_bt"></a>
              <a href="/salon/{{$salon->urlKey}}"><img src="{{$salon->avatarUrl}}" class="img-fluid" alt="">
                <div class="read_more"><span>Перейти</span></div>
              </a>
              <small>{{ $salon->cityName }}</small>
            </figure>
            <div class="wrapper">
              <h3><a href="/salon/{{$salon->urlKey}}">{{ $salon->name }}</a></h3>
              <div class="cat-address">
                <small>{!! $salon->address !!}</small>
                <!--                 <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">На расстоянии {{$salon->distance*1000}} метров от вас</a> -->
                <a href="dgis://2gis.ru/routeSearch/rsType/car/from/{{$userlng}},{{$userlat}}/to/{{$salon->markerX}},{{$salon->markerY}}" class="address">На расстоянии {{$salon->distance*1000}} метров от вас</a>
              </div>
            </div>
            <ul>
              <li><span class="loc_open">Сейчас открыто</span></li>

              {{-- проверка на наличие отзывов --}}
              @if ($salon->reviewCount > 0)
              <li>
                <div class="score"><span>Рейтинг<em>{{ $salon->reviewCount }} Отзывов</em></span><strong>{{ $salon->averageRating }}</strong></div>
              </li>
              @else
              <li></li>
              @endif
            </ul>
          </div>
        </div>


        @endforeach
      </div>
      {!! $salons->render() !!}
        @else
        <p>Нет салонов отвечающих вашим параметрам</p>
        @endif
    </div>
  </div>


  <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>

  <script type="text/javascript">
   var map;
   DG.then(function () {
    map = DG.map('map', {
      center: [{{$city->latitude}}, {{$city->longitude}}],
      zoom: 11            
    });

    @foreach ($salons as $salon)
    DG.marker([{{$salon->markerY}}, {{$salon->markerX}}]).addTo(map).bindPopup('<a target="_blank" href="/salon/{{$salon->urlKey}}">{{$salon->name}}</a>');                    var popup = DG.popup()
    @endforeach
    .setLatLng(latlng)
    .setContent('')
    .openOn(map);
  });
</script>
</div><!--content-->
</div><!--app-->


@endsection