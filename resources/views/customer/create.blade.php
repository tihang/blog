@extends('app')

@section('title', 'Add customer')

@section('content')

<form action="/customers" method="POST">
    @include('customer.form')
    @csrf
    <input type="submit" value="submit">
</form>

@endsection
