<h1>Edit customer</h1>

<form action="/customers/{{ $customer->id }}" method="POST">
    @method('PATCH')
    <label for="name">Customer name: </label><input name="name" type="text" autocomplete="off" value="{{ $customer->name }}" @error('name') }}<p>{{ $message }}</p> @enderror<br>
    <label for="email">Customer email: </label><input name="email" type="text" autocomplete="off" value="{{ $customer->email }}" @error('email') }}<p>{{ $message }}</p> @enderror<br>
    @csrf
    <input type="submit" value="Save">
</form>