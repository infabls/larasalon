@extends('frontend.layouts.app')

@section('title', __('Terms & Conditions'))

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
                          <label for="exampleInputEmail1">Name</label>
                          <input  value="{{$salon->name}}" type="text" id="name" name="name" class="form-control" required="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Номер телефона</label>
                          <textarea  name="phoneNumbers" class="form-control" required="">{{$salon->phoneNumbers}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
