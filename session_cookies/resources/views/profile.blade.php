<div>
    <div class="container">

        <div class="login">

            @if (session('name'))
            
                <h1>Hola Amigo!</h1>

                <h1>Welcome, {{ session('name') }}</h1>

                {{-- if using cookies then use this below --}}
                {{-- <h1>Welcome, {{ cookies('user_name') }}</h1> --}}

                 <div class="extra">
                    <a href="{{ route('logout.controller') }}">Logout</a>
                </div>

            @else
                <h1>Try this 👉: <a href="{{ route('login.controller') }}">Login</a></h1>
            
            @endif
        </div>
    </div>
</div>