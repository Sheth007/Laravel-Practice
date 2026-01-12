<div>
    <form action="{{ route('login.controller') }}" method="post">
        @csrf

        <input type="text" name="username" placeholder="Enter username">
        <span>
            @error('username')
            {{ $message }}
            @enderror
        </span>
        <br>
        <br>

        <input type="text" name="useremail" placeholder="Enter email">
        <span>
            @error('useremail')
            {{ $message }}
            @enderror
        </span>
        <br>
        <br>

        <input type="text" name="password" placeholder="Enter password">
        <span>
            @error('password')
            {{ $message }}
            @enderror
        </span>
        <br>
        <br>

        <button type="submit">Submit</button>
    </form>
</div>