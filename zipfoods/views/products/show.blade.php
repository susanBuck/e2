@extends('templates/master')

@section('title')
    {{ $product['name'] }}
@endsection

@section('content')
    <div id='product-show'>
        <h2>{{ $product['name'] }}</h2>

        <img src='/images/products/{{ $product['sku'] }}.jpg' class='product-thumb'>

        <p class='product-description'>
            {{ $product['description'] }}
        </p>

        <div class='product-price'>${{ $product['price'] }}</div>
    </div>

    <a href='/products'>&larr; Return to all products</a>
@endsection