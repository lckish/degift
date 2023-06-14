@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать заказ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('order.index')}}">Заказы</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{route('order.show',$order->id)}}">Заказ {{$order->id}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('order.edit',$order->id)}}">Редактировать заказ</a></li>
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
                <form action="{{route('order.update', $order->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{$order->user_id ?? old('user_id')}}" name="user_id" class="form-control" placeholder="user_id">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$order->products ?? old('products')}}" name="products" class="form-control" placeholder="products">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$order->total_price ?? old('total_price')}}" name="total_price" class="form-control" placeholder="total_price">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$order->payment_status ?? old('payment_status')}}" name="payment_status" class="form-control" placeholder="payment_status">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$order->created_at ?? old('created_at')}}" name="created_at" class="form-control" placeholder="created_at">
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
