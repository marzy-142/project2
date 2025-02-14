@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h3>Welcome, {{ Auth::user()->name }}</h3>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection
