@extends('layouts.layout')

@section('title', 'Create a product')


@section('content')
    <h1> Create a new Product </h1>

    <form method="POST" action="/products">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Product title">
        </div>
        <div>
            <input type="text" name="sku" placeholder="Product SKU">
        </div>
        <div>
            <textarea name="description" placeholder="Product description"></textarea>
        </div>
        <div>
            <button type="submit"> Create Product</button>
        </div>

    </form>
@endsection
