@extends('app')

@section('title', 'Customers List')

@section('content')

    <a href="/customers/create">Add a new customer</a>

    @forelse ($customers as $customer)
        <ul>
        <li>{{ $customer->name }} || {{ $customer->email }}</li>
        <a href="/customers/{{ $customer->id }}">Get Details</a>
        </ul>
    @empty
        <p>No customers to show</p>
    @endforelse

@endsection

