<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <a href="/" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Some</a>
        {{--            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}

        {{--            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}


        {{--                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}

    </div>

</div>
@foreach($products as $product)
    <h1>{{$product['name']}}</h1>
    <p>{{$product['price']}}</p>
@endforeach

