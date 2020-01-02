@extends('app')

@section('title', 'Customers List')

@section('content')

    <a href="/customers/create">Add a new customer</a>
    <a href="/customers?active=1">Show Active</a>
    <a href="/customers?active=0">Show Inactive</a>

    @forelse ($customers as $customer)
        <ul>
            <li>{{ $customer->name }} || {{ $customer->email }}</li>
            <a href="/customers/{{ $customer->id }}">Get Details</a>

            <form action="/customers/{{ $customer->id}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete">
            </form>
            <br>
        </ul>
    @empty
        <p>No customers to show</p>
    @endforelse

@endsection

