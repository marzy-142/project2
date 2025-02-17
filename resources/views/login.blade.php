@extends('layouts.main')

@section('title', 'Login')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

body {
font-family: 'Poppins', sans-serif;
background: linear-gradient(135deg, #F5F7FA 0%, #C3CFE2 100%);
}
</style>
</head>
<body class="flex items-center justify-center min-h-screen">

<div class="max-w-md mx-auto bg-white bg-opacity-90 backdrop-blur-lg p-8 rounded-2xl shadow-lg">
<h2 class="text-3xl font-semibold text-center text-gray-800">Welcome Back 👋</h2>
<p class="text-center text-gray-500">Please enter your details to sign in.</p>

@if($errors->any())
<div class="bg-red-100 text-red-600 p-3 rounded-md mt-4 text-center">
{{ $errors->first() }}
</div>
@endif

<form method="POST" action="{{ route('login') }}" class="mt-6">
@csrf
<label class="block text-gray-700 font-medium">Email</label>
<input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg mt-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>

<label class="block text-gray-700 font-medium mt-4">Password</label>
<input type="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg mt-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>

<button type="submit" class="mt-6 w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white py-3 rounded-lg shadow-md hover:opacity-90 transition">
Sign In
</button>
</form>

{{-- <p class="text-center text-gray-500 mt-4">
Don't have an account?
<a href="{{ route('register') }}" class="text-blue-500 font-medium hover:underline">Sign Up</a>
</p> --}}
</div>

</body>
</html>

@endsection
