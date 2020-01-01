@extends('app')

<form action="/products" method="POST">
    <input type="text" name="name" autocomplete="off" placeholder="Product name" value="{{ old('name') }} "> @error {{$message}} @enderror
<input type="text" name="description" autocomplete="off" placeholder="Description" value="{{ old('description') }}"> @error {{$messge}} @enderror
</form>
