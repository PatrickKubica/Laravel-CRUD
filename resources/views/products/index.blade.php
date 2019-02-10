@extends('layouts.app')

@section('title', 'Your Products')


@section('content')
<div class="container">
    <div class="d-flex justify-content-between pb-3">
        <h2>Your Products</h2>
        <a class="btn btn-primary" role="button" href="/products/create">New Product</a>
    </div>
    
    
    <div class="row">
    @foreach ($products as $product)
        <div class="col-sm-4 mb-3 pr-2 pl-2">
            <div class="bg-white border border-dark rounded p-3 h-100">
                <a class="text-primary" href="/products/{{ $product->id }}">{{ $product->name }}</a>
                <div>SKU: {{ $product->sku }}</div>
                <div>{{ str_limit($product->description, 200) }}</div>
            </div>
        </div>
    @endforeach
    </div>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }} </p>
    @endif
</div>
@endsection
