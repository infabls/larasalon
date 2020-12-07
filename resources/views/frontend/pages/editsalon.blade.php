@extends('frontend.layouts.app')

@section('title', 'Редактировать салон '. $salon->name)

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        Изменение данных о фирме {{$salon->name}}
                    </x-slot>

                    <x-slot name="body">
                     <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('editsalon/'.$salon->id) }}">
                       @csrf
                        <div class="form-group">
                          <label for="name">Название</label>
                          <input  value="{{$salon->name}}" type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="cityName">Город</label>
                          <input  value="{{$salon->cityName}}" type="text" id="cityName" name="cityName" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="description">Описание</label>
                          <textarea id="description" name="description" class="form-control">{{$salon->description}}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="instagramProfile">Инстаграм</label>
                          <input  value="{{$salon->instagramProfile}}" type="text" id="instagramProfile" name="instagramProfile" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Номер телефона</label>
                          <textarea  name="phoneNumbers" class="form-control" required="">{{$salon->phoneNumbers}}</textarea>
                        </div>
                         <div class="form-group">
                          <label for="kaspiRed">Есть ли Kaspi Red? 0 - нет, 1 - да</label>
                          <input type="number" name="kaspiRed" class="form-control" required="" value="{{$salon->kaspiRed}}">
                        </div>
                        <div class="form-group">
                          <label for="markerY">Широта (Latitude)</label>
                          <input  value="{{$salon->markerY}}" type="text" id="markerY" name="markerY" class="form-control">
                        </div>
                         <div class="form-group">
                          <label for="markerX">Широта (Latitude)</label>
                          <input  value="{{$salon->markerX}}" type="text" id="markerX" name="markerX" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                      </form>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
