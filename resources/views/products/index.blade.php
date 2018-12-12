@extends('layouts.layout')

@section('title', 'Your Products')


@section('content')
    <h1>Your Products</h1>
    <ul>
    @foreach ($products as $product)
        <li><a href="/products/{{ $product->id }}">{{ $product->name }}</a></li>
    @endforeach
    </ul>
@endsection
