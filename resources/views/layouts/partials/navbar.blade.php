<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>

            <a class="nav-link active" href="/index">All ads</a>

            @if (Auth::user())
                <a class="nav-link" href="/users/profile">User profile</a>

                <a class="nav-link" href="/ads/create">Create new ad</a>

                <a class="nav-link" href="/logout">Logout</a>
            @else
                <a class="nav-link" href="/login">Login</a>
            @endif

            {{--search box--}}

            <div class="search-container">
                <form action="/search" method="get" class="form-signin">
                    {{--{{ csrf_field() }}--}}
                    <input type="text" placeholder="Search.." name="key">
                    <button type="submit">search</button>
                </form>
            </div>

        </nav>

        @if(Auth::user())
        <div>
            <p>Logged as <a href="/users/{{Auth::user()->url_name}}">{{Auth::user()->first_name.'  '.Auth::user()->last_name}}</a></p>
        </div>
        @endif
    </div>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    {{--<div>
        @if ($messages->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($messages->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>--}}

    <div>
        @php(dd(session()))
            @endphp
    </div>
</div>