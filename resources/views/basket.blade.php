@extends('layouts.main')

@section('title', 'basket.cart')

@section('content')
    <h1></h1>
    <p></p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Количество</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
@foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{ route('product', [$product->category->code, $product->code ]) }}">
                            <img height="56px" src="">
                          {{$product->name}}
                        </a>
                    </td>
                    <td><span class="badge"></span>
                        <div class="btn-group form-inline">
{{--                            прибавление в корзину--}}
                            <form action="{{ route('basketRemove', $product) }}" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
{{--                            удаление из корзины--}}
                            <form action="{{ route('basketAdd', $product) }}" method="POST">
                                <button type="submit" class="btn btn-success" href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                               @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{ $product->price }} гр</td>
                    <td>{{ $product->price }} гр</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">:</td>

                    <td><strike></strike>
                        <b></b> </td>

                    <td></td>

            </tr>
            </tbody>
        </table>

            <div class="row">
                <div class="form-inline pull-right">
                    <form method="POST" action="">

                        <label for="coupon">:</label>
                        <input class="form-control" type="text" name="coupon">
                        <button type="submit" class="btn btn-success"></button>
                    </form>
                </div>
            </div>

            <div class="alert alert-danger"></div>

            <div></div>

        <br>
        <div class="row">
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success"
                   href=""></a>
            </div>
        </div>
@endsection
