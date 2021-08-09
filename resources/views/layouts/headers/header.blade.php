<em>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('apptest') }}">AppTest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ setActiveClass('apptest') }} " aria-current="page" href="{{ route('apptest') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActiveClass('posts_path') }} " href="{{ route('posts_path') }}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActiveClass('about_path') }} " href="{{ route('about_path') }}" tabindex="-1" aria-disabled="false">About-Us</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ setActiveClass('url-short_path') }} " href="{{ route('url-short_path') }}">Url-shortener</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ setActiveClass('root_events') }} " href="{{ route('root_events') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('laramap-path') }}">Laramap</a>
                    </li>
                </ul>
                <!--<form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </div>
        </div>
    </nav>
</em>