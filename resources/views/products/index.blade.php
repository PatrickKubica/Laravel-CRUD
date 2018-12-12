@extends('layouts.layout')

@section('title', 'Your Products')


@section('content')
    <h1>Your Products</h1>
    <ul>
    @foreach ($products as $product)
        <li>{{ $product->name }}</li>
    @endforeach
    </ul>
@endsection
