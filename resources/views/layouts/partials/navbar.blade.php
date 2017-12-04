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

        </nav>
    </div>
</div>