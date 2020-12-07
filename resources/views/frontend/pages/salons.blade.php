@extends('frontend.layouts.app')

@section('title', 'Список моих салонов')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        Данные о ваших фирмах. Всего фирм - {{$salons->total()}}. 
                    </x-slot>
               <x-slot name="body">
                     <div class="panel-body">
                     @if (count($salons) > 0)
                      <table class="table table-striped task-table">
                        <!-- Заголовок таблицы -->
                        <thead>
                          <th>Название</th>
                          <th>Статус</th>
                          <th>Действия</th>
                        </thead>
                        <!-- Тело таблицы -->
                        <tbody>
                          @foreach ($salons as $salon)
                            <tr>
                              <!-- Имя клиента -->
                              <td class="table-text">
                                <div><a target="_blank" href="/salon/{{$salon->urlKey}}">{{ $salon->name }}</a></div>
                              </td> 
                               <td class="table-text">
                                <div>{{ $salon->status }}</div>
                              </td> 

                              <!-- действия с заявками -->
                              <td class="table-text">
                                    <a href="{{ url('editsalon/'.$salon->id) }}">
                                    <button type="submit" class="btn btn-danger">
                                      <i class="fa fa-pen"></i> Изменить
                                    </button>
                                    </a>
                              </td> 
                            </tr>
                          @endforeach
                          @else
                          <p>У вас нет фирм. Хотите создать?</p>
                          @endif
                        </tbody>
                      </table>
                {!! $salons->render() !!}
                    </div>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
