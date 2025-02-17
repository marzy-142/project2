<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
        </style>
</head>
<body class="bg-gray-100">

    <nav class="bg-teal-500 text-white p-4 flex justify-between items-center">
        <div class="text-xl font-bold">My App</div>
        <div class="flex gap-4">
            <a href="{{ route('home') }}" class="px-4 py-2 hover:bg-blue-500 rounded">Home</a>

            @if(Auth::check() && Auth::user()->hasRole('admin'))
                <a href="{{ route('transactions') }}" class="px-4 py-2 hover:bg-blue-500 rounded">Transactions</a>
            @else
                <span class="px-4 py-2 " title="Admins only">
                    Transactions
                </span>
            @endif

            @auth
                <a href="{{ route('logout') }}" class="px-4 py-2 bg-red-500 hover:bg-red-600 rounded">Logout</a>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="px-4 py-2 bg-gray-500 hover:bg-green-600 rounded">Login</a>
            @endguest
        </div>
    </nav>


    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        @yield('content')
    </div>

</body>
</html>
