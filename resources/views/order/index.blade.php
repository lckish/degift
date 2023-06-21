@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заказы</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('order.index')}}">Заказы</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('order.create')}}" class="btn btn-primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID_Пользователя</th>
                                    <th>Продукты</th>
                                    <th>Итоговая цена</th>
                                    <th>Статус заказа</th>
                                    <th>Дата создания</th>
                                    <th>Дата последнего изменения</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr><?php $rep = array("[", "{", "}", "]", ",", "\"", "id:", '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', ":", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '/', '.', 'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' , 'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' , 'S' , 'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z'); ?>
                                        <td><a href="{{route('order.show', $order->id)}}">{{$order->id}}</a></td>
                                        <td><a href="{{route('user.show', $order->user_id)}}">{{$order->user_id}}</a>
                                        </td>
                                        <td>{{str_replace($rep, "",$order->products )}}</td>
                                        <td>{{$order->total_price}}</td>
                                        <td>{{$order->orderTitle}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->updated_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
