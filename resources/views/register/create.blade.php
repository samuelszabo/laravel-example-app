@extends('layout')

@section('title')
    <title>Register</title>
@endsection
@section('content')
    <h1 class="text-center font-bold text-xl">Register!</h1>

    <form method="POST" action="/register" class="mt-10">
        @csrf

        <x-form.input name="name" required/>
        <x-form.input name="email" type="email" required/>
        <x-form.input name="password" type="password" autocomplete="new-password" required/>
        <x-form.button>Sign Up</x-form.button>
    </form>
@endsection
