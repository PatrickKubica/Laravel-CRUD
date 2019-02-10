@extends('layouts.app')

@section('title', 'Edit a product')


@section('content')
     <form method="POST" action="/products/{{ $product->id }}">
        @method('PATCH')
        @csrf
        
        <div>
            <input type="text" name="name" value="{{ $product->name }}">
        </div>
        <div>
            <input type="text" name="sku" value="{{ $product->sku }}">
        </div>
        <div>
            <textarea name="description">{{ $product->description }}</textarea>
        </div>
        <div>
            <button type="submit"> update the product</button>
        </div>

    </form>

    <form method="POST" action="/products/{{ $product->id }}">
        @method('DELETE')
        @csrf
        
        <div>
            <button type="submit"> Delete the product</button>
        </div>

    </form>
@endsection
