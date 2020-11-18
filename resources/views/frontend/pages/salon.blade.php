@extends('frontend.layouts.app')

@section('title', __('Terms & Conditions'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        Данные о вашей фирме {{$salon->name}}
                    </x-slot>
                    <x-slot name="body">
                        <a href="orders">Мои заявки</a>
                        <div class="links">
                        <h2>{{$salon['name']}}</h2>
                        <img src="https://zapis.kz/{{$salon['avatarUrl']}}" alt="">
                        <p>{!! $salon['description'] !!}</p>
                        <p>Город: {{$salon['cityName']}}</p>
                        <p>Номер: <a href="tel:{{$salon['phoneNumbers']}}">{{$salon['phoneNumbers']}}</a></p>
                        <p>Инстаграм: <a target="_blank" href="https://www.instagram.com/{{$salon['instagramProfile']}}/">{{$salon['instagramProfile']}}</a></p>
                        <a target="_blank" href="/salon/{{$salon->urlKey}}">Ссылка на портале</a>
                        <a href="/editsalon">Изменить</a>
                        </div><!--links-->
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
