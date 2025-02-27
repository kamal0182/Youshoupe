@extends('layouts.main')
@section('contenu')
<form action="/product/create">
<button >Create
</button></form>


        <h1 class="products-heading">Our Products</h1>
        <div class="products-grid">
            <!-- Product Card 1 -->
            <!-- Product Card Loop -->
@foreach($products as $product)
<div class="product-card">
    <div class="product-image">
        <img src="{{$product->image}}" alt="{{$product->title}}">
    </div>

    <div class="product-details">
        <h2 class="product-title">{{$product->title}}</h2>
        <p class="product-description">{{$product->description}}</p>
        <div class="product-meta">
            <span class="product-price"><strong>$</strong>{{$product->price}}</span>
            <span class="product-creator">Created by: {{$product->user->name}}</span>
        </div>
        <div class="button-group">
            <form action="{{ url('/products', ['id' => $product->id]) }}" method="post">
                @method('delete')
                @CSRF
                <!-- <input type="hidden" name="method" value="delete"> -->
                <button type="submit" class="delete-btn">Delete</button>
            </form>
            <form action="{{ url('/products/update', ['id' => $product->id]) }}" >
                <!-- @method('put') -->
                <!-- @CSRF -->
                <button class="btn btn-primary">Edit</button>
           </form>
        </div>
    </div>
</div>
@endforeach
            <!-- Product Card 2 -->

        </div>


@endsection
