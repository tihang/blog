<div>
    <input type="text" name="name" autocomplete="off" placeholder="Product name" value="{{ old('name') ??  $product->name }}"> @error('name') {{$message}} @enderror <br>
</div>

<div>
    <input type="text" name="description" autocomplete="off" placeholder="Description" value="{{ old('description') ?? $product->name}}"> @error('description') {{$message}} @enderror <br>
</div>
