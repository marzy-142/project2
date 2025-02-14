<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <div class="text-xl font-bold">My App</div>
        <div>
            <a href="{{ route('home') }}" class="px-4 py-2 hover:bg-blue-500 rounded">Home</a>

            @auth
                @if(Auth::user()->hasRole('admin'))
                    <a href="{{ route('transactions') }}" class="px-4 py-2 hover:bg-blue-500 rounded">Transactions</a>
                @endif

                <a href="{{ route('logout') }}" class="px-4 py-2 bg-red-500 hover:bg-red-600 rounded">Logout</a>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded">Login</a>
            @endguest
        </div>
    </nav>

    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        @yield('content')
    </div>

</body>
</html>
