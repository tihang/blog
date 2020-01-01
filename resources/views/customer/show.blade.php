<h1>Customer Details</h1>

<div>
    <a href="/customers"> < Back</a>
</div>

<strong>Name</strong> <p>{{ $customer->name  }}</p>
<strong>Email</strong> <p>{{ $customer->email }}</p>

<div>
    <a href="/customers/{{ $customer->id }}/edit">Edit Customer</a>

    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
</div>