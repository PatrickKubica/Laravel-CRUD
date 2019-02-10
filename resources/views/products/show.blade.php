@extends('layouts.app')

@section('title', 'Product details')


@section('content')
    <h1> Name: {{ $product->name }} </h1>
    <h2> SKU: {{ $product->sku }} </h1>
    <h3> Description: {{ $product->description }} </h1>

    <a href="/products/{{ $product->id }}/edit">edit this product</a>
@endsection
