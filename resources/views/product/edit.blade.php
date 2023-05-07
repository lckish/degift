@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать продукт</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Welcome</a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Продукты</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{route('product.show',$product->id)}}">Продукт {{$product->id}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.edit',$product->id)}}">Редактировать продукт</a></li>
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
                <form action="{{route('product.update', $product->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{$product->title ?? old('title')}}" name="title" class="form-control" placeholder="Название">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$product->description ?? old('description')}}" name="description" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$product->content ?? old('content')}}" name="content" class="form-control" placeholder="Контент">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$product->preview_image ?? old('preview_image')}}" name="preview_image" class="form-control" placeholder="Картинка">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$product->price ?? old('price')}}" name="price" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$product->old_price ?? old('old_price')}}" name="old_price" class="form-control" placeholder="Старая цена">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$product->count ?? old('count')}}" name="count" class="form-control" placeholder="Количество">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$product->is_published ?? old('is_published')}}" name="is_published" class="form-control" placeholder="Публикация">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$product->category_id ?? old('category_id')}}" name="category_id" class="form-control" placeholder="Категория">
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
