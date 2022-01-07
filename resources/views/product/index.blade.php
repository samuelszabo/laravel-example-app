@extends('layout')

@section('title')
    <title>Products</title>
@endsection
@section('content')
    @foreach($products as $product)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product['name']}}</h5>
                <p class="card-text">{{$product['price']}}</p>
                <a href="/product/{{$product['id']}}" class="btn btn-primary">Go {{$product['id']}}</a>
            </div>
        </div>
        <h1></h1>
        <p></p>
    @endforeach
@endsection

