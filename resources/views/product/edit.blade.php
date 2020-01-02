@extends('app')

@section('title', 'Edit Product')

@section('content')

    <a href="/products/{{ $product->id}}">Back</a>

    <form action="/products/{{ $product->id }}" method="POST">
        @method('PATCH')
        @include('product.form')
        @csrf
        <input type="submit" value="Save">
    </form>

@endsection
