@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заказ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('order.index')}}">Заказы</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{route('order.show',$order->id)}}">Заказ {{$order->id}}</a></li>
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
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{route('order.edit', $order->id)}}"
                                   class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{route('order.delete', $order->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$order->id}}</td>
                                </tr>
                                <tr>
                                    <td>Пользователь</td>
                                    <td>{{$order->user_id}}</td>
                                </tr>
                                <tr>
                                    <td>Продукты</td>
                                    <td>{{$order->products}}</td>
                                </tr>
                                <tr>
                                    <td>Итоговая цена</td>
                                    <td>{{$order->total_price}}</td>
                                </tr>
                                <tr>
                                    <td>Дата создания</td>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Дата последнего изменения</td>
                                    <td>{{$order->updated_at}}</td>
                                </tr>

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
@endsection
