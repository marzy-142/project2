@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-blue-600">Login</h2>

        @if($errors->any())
            <div class="bg-red-500 text-white p-2 rounded mt-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf
            <label class="block text-gray-700 font-bold">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded mt-2" required>

            <label class="block text-gray-700 font-bold mt-4">Password</label>
            <input type="password" name="password" class="w-full p-2 border rounded mt-2" required>

            <button type="submit" class="mt-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Login</button>
        </form>
    </div>
@endsection
