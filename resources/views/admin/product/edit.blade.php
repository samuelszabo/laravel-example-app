@extends('layout')

@section('title')
    <title>Products</title>
@endsection
@section('content')
    <form method="POST" action="/admin/product/{{ $product->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <x-form.input name="name" :value="old('name', $product->name)" required />
        <x-form.input name="price" :value="old('price', $product->price)" required />
        <x-form.button>Update</x-form.button>
    </form>
@endsection

