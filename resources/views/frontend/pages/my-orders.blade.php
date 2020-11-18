@extends('frontend.layouts.app')

@section('title', __('Terms & Conditions'))

@section('content')
 @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        Мои заявки 
                    </x-slot>

                    <x-slot name="body">
                     <div class="panel-body">
                      <table class="table table-striped task-table">
                        <!-- Заголовок таблицы -->
                        <thead>
                          <th>Имя</th>
                          <th>Номер телефона</th>
                          <th>Статус</th>
                          <th>Действия</th>
                        </thead>
                        <!-- Тело таблицы -->
                        <tbody>
                          @foreach ($orders as $order)
                            <tr>
                              <!-- Имя клиента -->
                              <td class="table-text">
                                <div>{{ $order->name }}</div>
                              </td> 

                              <td>
                                <div><a href="tel:{{ $order->phone }}">{{ $order->phone }}</a></div>
                              </td>
                               <td class="table-text">
                                <div>{{ $order->status }}</div>
                              </td> 
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
