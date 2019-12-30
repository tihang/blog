@extends('app')

@section('title', 'Add customer')
    
@section('content')

<form action="/customers" method="POST">
    <input type="text" name="name" autocomplete="off" placeholder="Name" value="{{ old('name') }}"> @error('name') {{ $message }} @enderror <br><br>
    <input type="text" name="email" autocomplete="off" placeholder="Email" value="{{ old('email') }}"> @error('email') {{ $message }} @enderror <br><br>
        @csrf
        <input type="submit" value="submit">
</form>

@endsection