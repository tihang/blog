@extends('app')

@section('title', 'Products detail')

@section('content')

    <a href="/products">Back</a> <br><br>
    <strong>Name: </strong> {{ $product->name }} <br>
    <strong>Details: </strong> {{ $product->description }} <br>

    <a href="/products/{{ $product->id }}/edit">Edit</a>

    <form action="/products/{{ $product->id }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
@endsection
