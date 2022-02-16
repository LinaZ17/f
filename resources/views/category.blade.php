@extends('layouts.main')

@section('title', 'Страница Категорий')


@section('content')

<div class="container">
    <div class="starter-template">
        <h1>
            {{ $category->name }}
            {{ $category->products->count() }}
{{--            подсчитает количество категорий--}}
        </h1>
        <p>
            {{ $category->description }}
        </p>
        <div class="row">
@foreach($category->products as $product)
            @include('card', compact('product'))
            @endforeach
        </div>
    </div>
</div>
@endsection
