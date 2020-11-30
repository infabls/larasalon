@extends('frontend.layouts.app')

@section('title', 'Мои заявки')

@section('content')

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        Мои заявки 
                    </x-slot>

                    <x-slot name="body">
                     <div class="panel-body" style="overflow-x: scroll;">
                     @if (count($orders) > 0)
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

                              <!-- действия с заявками -->
                              <td class="table-text">
                                    <form style='float:left' action="{{ url('orders/'.$order->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                      <i class="fa fa-trash"></i> Удалить
                                    </button>
                                  </form>
                                   <form style='float:left' action="{{ url('orders/'.$order->id . '/change') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <button type="submit" class="btn btn-danger">
                                      <i class="fa fa-pen"></i> Изменить
                                    </button>
                                  </form>
                              </td> 
                            </tr>
                          @endforeach
                          @else
                          <p>У вас нет заявок. Хотите дать рекламу?</p>
                          @endif
                        </tbody>
                      </table>
                {!! $orders->render() !!}
                    </div>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
