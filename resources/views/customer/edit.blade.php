<h1>Edit customer</h1>

<form action="/customers/{{ $customer->id }}" method="POST">
    @method('PATCH')
    @include('customer.form')
    @csrf
    <input type="submit" value="Save">
</form>
