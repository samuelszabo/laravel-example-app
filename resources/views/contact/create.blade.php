@extends('layout')

@section('title')
    <title>Contact</title>
@endsection
@section('content')
    <form method="POST" action="/contact" enctype="multipart/form-data">
        @csrf
        <x-form.input name="name" required/>
        <x-form.input name="email" type="email" required/>
        <x-form.textarea name="message" required/>
        <x-form.button>Send</x-form.button>
    </form>
@endsection

