@extends('app')

@section('title', 'Create Product Page')


@section('content')
    <h1>
        Product page
    </h1>

    <a href="/products/create">Create a product line</a>

    @forelse ($products as $product)
        <ul>
            <li>
            <strong>Name: </strong>{{ $product->name }} <br>
            <strong>Description: </strong>{{ $product->description}} <br>
            <a href="/products/{{ $product->id }}">View </a>
            <br><br>
            </li>
        </ul>

    @empty
        <h3>No products currently in store</h3>
    @endforelse
@endsection

