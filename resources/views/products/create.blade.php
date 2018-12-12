@extends('layouts.layout')

@section('title', 'Create a product')


@section('content')
    <h1> Create a new Product </h1>

    <form method="POST" action="/products">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Product title" value="{{ old('name') }}">
        </div>
        <div>
            <input type="text" name="sku" placeholder="Product SKU" value="{{ old('sku') }}" required>
        </div>
        <div>
            <textarea name="description" placeholder="Product description" required>{{ old('description') }}</textarea>
        </div>
        <div>
            <button type="submit"> Create Product</button>
        </div>

        @if ($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
        @endif
    </form>
@endsection
