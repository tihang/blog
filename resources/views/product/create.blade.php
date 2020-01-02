@extends('app')

@section('title', 'Add customer')

@section('content')

<a href="/products">Back</a>

<form action="/products" method="POST">
    @include('product.form')
    @csrf
    <input type="Submit" value="Add Product">
</form>

@endsection

