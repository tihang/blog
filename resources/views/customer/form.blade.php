<input type="text" name="name" autocomplete="off" placeholder="Name" value="{{ old('name') ?? $customer->name}}"> @error('name') {{ $message }} @enderror <br><br>
<input type="text" name="email" autocomplete="off" placeholder="Email" value="{{ old('email') ?? $customer->email }}"> @error('email') {{ $message }} @enderror <br><br>
