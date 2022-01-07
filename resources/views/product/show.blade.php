@extends('layout')

@section('title')
    <title>Product {{$product['name']}}</title>
@endsection
@section('content')
    <h1>This is {{$product['name']}}</h1>
    <p class="card-text">{{$product['price']}}</p>
    <a href="/product" class="btn btn-primary">Show all</a>

@endsection

