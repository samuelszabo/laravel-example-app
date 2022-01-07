@extends('layout')

@section('title')
    <title>Login</title>
@endsection
@section('content')
    <h1 class="text-center font-bold text-xl">Log In!</h1>

    <form method="POST" action="/login" class="mt-10">
        @csrf

        <x-form.input name="email" type="email" autocomplete="username" required/>
        <x-form.input name="password" type="password" autocomplete="current-password" required/>

        <x-form.button>Log In</x-form.button>
    </form>

@endsection
