@extends('layouts.layout')

@section('title', 'Your Products')


@section('content')
    <ul>
    @foreach ($products as $product)
        <li>{{ $product->name }}</li>
    @endforeach
    </ul>

    <div>
        <a href="/products/create">Create a new product</a>
    </div>
@endsection
