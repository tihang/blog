@extends('app')

@section('title', 'Services')

@section('content')

    <form action="/service" method="POST">
        <input type="text" name="name" autocomplete="off"> 
        <p style="color: red">@error('name') {{$message}} @enderror</p>
        <button type="submit">Save Service</button>
        @csrf
    </form>


    @forelse ($service as $service)
        <h3>{{ $service->name }}</h3>
    @empty
        <h3>Currently no services</h3>
    @endforelse
@endsection


@section('footer')
    <h1>footer from services</h1>
@endsection