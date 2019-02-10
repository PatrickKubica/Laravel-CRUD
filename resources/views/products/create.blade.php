@extends('layouts.app')

@section('title', 'Create a product')


@section('content')
<div class="container">
    <h1> Create a new Product </h1>

    <form method="POST" action="/products">
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Product title" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="sku" placeholder="Product SKU" value="{{ old('sku') }}" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Product description" required>{{ old('description') }}</textarea>
        </div>
            <button class="btn btn-primary" type="submit"> Create Product</button>

        @if ($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <div class="alert alert-danger mt-3" role="alert">{{ $error }}</div>
            @endforeach
        </div>
        @endif
    </form>
</div>
@endsection
