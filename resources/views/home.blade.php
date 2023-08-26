@extends('layouts.main')
@section('title', 'Home')
@section('main')
    <h1 class="text-secondary">DC Comics Home</h1>
    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="DC Comics">
@endsection
