<head>
  <title>Products inventory</title>
</head>
@extends('layout') @section('content') @include('navbar')

<div class="flex-center position-ref full-height">
  @if (Route::has('login'))
  <div class="top-right links">
    @auth
    <a href="{{ url('/home') }}">Home</a> @else
    <a href="{{ route('login') }}">Login</a> @if (Route::has('register'))
    <a href="{{ route('register') }}">Register</a> @endif @endauth
  </div>
  @endif

  <div class="content">
    <div class="title m-b-md">
      Products inventory
    </div>

    <div class="links">
      <a class="btn btn-primary" href="{{ URL::to('suppliers') }}" role="button">Suppliers</a>
      <a class="btn btn-primary" href="{{ URL::to('clients') }}" role="button">Clients</a>
      <a class="btn btn-primary" href="{{ URL::to('display') }}" role="button">Display Products</a>
    </div>
  </div>
</div>
