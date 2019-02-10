@extends('layouts.app')

@section('title', 'Product details')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Name: {{ $product->name }} </h5>
                <h6 class="card-subtitle mb-2 text-muted">SKU: {{ $product->sku }}</h6>
                <p class="card-text">{{ $product->description }}</p>
                <a class="btn btn-primary" href="/products/{{ $product->id }}/edit">Edit this Product</a>
                <a class="btn btn-secondary" href="/products">Back to Overview</a>
            </div>
        </div>
    </div>
@endsection
