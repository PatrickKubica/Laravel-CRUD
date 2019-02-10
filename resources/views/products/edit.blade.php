@extends('layouts.app')

@section('title', 'Edit a product')


@section('content')
<div class="container">
     <form method="POST" action="/products/{{ $product->id }}">
        @method('PATCH')
        @csrf
        
        <div class="form-group">
            <input class="form-control" type="text" name="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="sku" value="{{ $product->sku }}">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description">{{ $product->description }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>

    <form method="POST" action="/products/{{ $product->id }}">
        @method('DELETE')
        @csrf
        
        <button class="btn btn-danger mt-2" type="submit">Delete</button>
    </form>
</div>
@endsection
